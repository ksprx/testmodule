<?php

namespace App\Core\Console\Commands;

use App\Core\Migration\Migration;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Schema\Blueprint;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected static string $defaultName = 'migrate';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Run database migrations')
            ->setHelp('This command allows you to run all database migrations that have not been executed yet.')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $migrationsPath = AMADAY_PATH . '/database/migrations';
        $moduleName = ucwords($input->getOption('module'));
        if($moduleName){
            $migrationsPath = "app/Modules/{$moduleName}/Migrations";
            $pathModule = "app/Modules/{$moduleName}";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!DB::schema()->hasTable('migrations')) {
            DB::schema()->create('migrations', function (Blueprint $table) {
                $table->id();
                $table->string('migration');
                $table->integer('batch')->default(1);
            });
            $output->writeln("<info>Created migrations table.</info>");
        }
        $executedMigrations = Migration::pluck('migration')->toArray();
        $migrationFiles = glob($migrationsPath . '/*.php');
        foreach ($migrationFiles as $file) {
            $migrationName = pathinfo($file, PATHINFO_FILENAME);

            if (!in_array($migrationName, $executedMigrations)) {
                require_once $file;

                $className = $this->getMigrationClassName($file);
                if (class_exists($className)) {
                    $migrationInstance = new $className();
                    if (method_exists($migrationInstance, 'up')) {
                        $migrationInstance->up();
                        Migration::create(['migration' => $migrationName]);
                        $output->writeln("<info>Migrated: {$migrationName}</info>");
                    }
                }
            } else {
                $output->writeln("<comment>Skipped (already migrated): {$migrationName}</comment>");
            }
        }

        $output->writeln("<info>All migrations completed successfully.</info>");
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
