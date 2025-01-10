<?php

namespace App\Core\Console\Commands;

use App\Core\Migration\Migration;
use Illuminate\Database\Capsule\Manager as DB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateRollbackCommand extends Command
{
    protected static string $defaultName = 'migration:rollback';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Rollback database migrations')
            ->setHelp('This command allows you to rollback all database migrations that have been executed.')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!DB::schema()->hasTable('migrations')) {
            $output->writeln("<info>No table migrated before.</info>");
            return Command::SUCCESS;
        }
        $migrationsPath = AMADAY_PATH . '/database/migrations';
        $moduleName = null;
        $executedMigrations = Migration::orderByDesc('id')->select('migration', 'module')->get()->toArray();
        foreach ($executedMigrations as $executedMigration) {
            $fileName = $executedMigration['migration'];
            $file = $migrationsPath . DIRECTORY_SEPARATOR . $executedMigration['migration'] . ".php";

            if ($executedMigration["module"] != null) {
                $moduleName = ucwords($executedMigration["module"]);
                $file = "app/Modules/{$moduleName}/Migrations" . DIRECTORY_SEPARATOR . $executedMigration['migration'] . ".php";
                $pathModule = "app/Modules/{$moduleName}";
                if (!is_dir($pathModule)) {
                    $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                    continue;
                }
            }
            require_once $file;
            $extra_text = ($moduleName != null) ? " Module : {$moduleName}" : "";
            $className = $this->getMigrationClassName($file);
            if (class_exists($className)) {
                $migrationInstance = new $className();
                if (method_exists($migrationInstance, 'down')) {
                    $migrationInstance->down();
                    Migration::where(['migration' => $fileName, 'module' => $executedMigration["module"]])->delete();

                    $output->writeln(("<info>Migration rollbacked: {$fileName} $extra_text</info>"));
                }
            }
        }

        $output->writeln("<info>All migrations rollback completed successfully.</info>");
        return Command::SUCCESS;
    }

    protected function getMigrationClassName(string $filePath): ?string
    {
        $content = file_get_contents($filePath);
        if (preg_match('/class\s+([a-zA-Z0-9_]+)/', $content, $matches)) {
            return $matches[1];
        }
        return null;
    }
}
