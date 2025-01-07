<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeModelCommand extends Command
{
    protected static string $defaultName = 'make:model';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new model with optional migrations')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the model')
            ->addOption('migration', 'm', InputOption::VALUE_NONE, 'Create a migration for the model')
            ->addOption('trigger', 't', InputOption::VALUE_NONE, 'Create a trigger migration for the model')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $path = "app/Models";
        $namespace = "App\\Models";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Models";
            $namespace = "App\\Modules\\{$moduleName}\\Models";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, true, true);
        }
        $path = $path . "/{$name}.php";

        if (file_exists($path)) {
            $output->writeln("<error>Model {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/model.stub');
        $content = str_replace(array('{{modelName}}', '{{namespace}}'), array($name, $namespace), $stub);
        file_put_contents($path, $content);
        $output->writeln("<info>Model {$name} created successfully.</info>");

        if ($input->getOption('migration')) {
            $this->createMigration($name, $output);
        }

        if ($input->getOption('trigger')) {
            $this->createMigration($name, $output);
            $this->createTriggerMigration($name, $output);
        }

        return Command::SUCCESS;
    }

    protected function createMigration(string $name, OutputInterface $output): void
    {
        $tableName = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name)) . 's';
        $className = 'Create' . ucfirst($name) . 'Table';
        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/migration.stub');
        $migrationContent = str_replace('{{className}}', $className, $stub);
        $migrationContent = str_replace('{{tableName}}', $tableName, $migrationContent);

        $timestamp = date('Y_m_d_His');
        $migrationPath = "database/migrations/{$timestamp}_create_{$tableName}_table.php";
        file_put_contents($migrationPath, $migrationContent);

        $output->writeln("<info>Migration created successfully at {$migrationPath}</info>");
    }

    protected function createTriggerMigration(string $name, OutputInterface $output): void
    {
        $tableName = strtolower($name) . 's';
        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/migration_trigger.stub');
        $migrationContent = str_replace('{{tableName}}', ucfirst($tableName), $stub);

        $timestamp = date('Y_m_d_His', strtotime('+1 second'));
        $migrationPath = "database/migrations/{$timestamp}_create_{$tableName}_trigger_table.php";
        file_put_contents($migrationPath, $migrationContent);

        $output->writeln("<info>Trigger migration created successfully at {$migrationPath}</info>");
    }
}
