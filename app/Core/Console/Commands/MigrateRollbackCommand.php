<?php

namespace App\Core\Console\Commands;

use App\Core\Migration\Migration;
use Illuminate\Database\Capsule\Manager as DB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
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
            ->setHelp('This command allows you to rollback all database migrations that have been executed.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if (!DB::schema()->hasTable('migrations')) {
            $output->writeln("<info>No table migrated before.</info>");
            return Command::SUCCESS;
        }
        $migrationsPath = AMADAY_PATH . '/database/migrations';
        $executedMigrations = Migration::orderByDesc('id')->pluck('migration')->toArray();
        foreach ($executedMigrations as $fileName) {
            $file = $migrationsPath . DIRECTORY_SEPARATOR . $fileName . ".php";
            require_once $file;

            $className = $this->getMigrationClassName($file);
            if (class_exists($className)) {
                $migrationInstance = new $className();
                if (method_exists($migrationInstance, 'down')) {
                    $migrationInstance->down();
                    Migration::where(['migration' => $fileName])->delete();
                    $output->writeln("<info>Migration rollbacked: {$fileName}</info>");
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
