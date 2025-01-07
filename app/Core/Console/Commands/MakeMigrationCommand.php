<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeMigrationCommand extends Command
{
    protected static string $defaultName = 'make:migration';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new migration')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the migration')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $path = "database/migrations";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/migrations";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, true, true);
        }

        $tableName = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
        $className = str_replace(' ', '', ucwords(str_replace('_', ' ', $name)));
        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/migration.stub');
        $migrationContent = str_replace('{{className}}', $className, $stub);
        $migrationContent = str_replace('{{tableName}}', $tableName, $migrationContent);

        $timestamp = date('Y_m_d_His');
        $migrationPath = $path . "/{$timestamp}_{$tableName}.php";

        if (file_exists($migrationPath)) {
            $output->writeln("<error>Migration {$name} already exists!</error>");
            return Command::FAILURE;
        }

        file_put_contents($migrationPath, $migrationContent);
        $output->writeln("<info>Migration created successfully at {$migrationPath}</info>");

        return Command::SUCCESS;
    }
}
