<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeResourceCommand extends Command
{
    protected static string $defaultName = 'make:resource';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new API resource')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the resource')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $path = "app/Http/Resources";
        $namespace = "App\\Http\\Resources";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Resources";
            $namespace = "App\\Modules\\{$moduleName}\\Resources";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, 0755, true);
        }

        $filePath = $path . "/{$name}.php";

        if (file_exists(AMADAY_PATH . '/' . $filePath)) {
            $output->writeln("<error>Resource {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/resource.stub');
        $content = str_replace(array('{{resourceName}}', '{{namespace}}'), array($name, $namespace), $stub);
        file_put_contents(AMADAY_PATH . '/' . $filePath, $content);

        $output->writeln("<info>Resource {$name} created successfully at {$filePath}</info>");

        return Command::SUCCESS;
    }
}
