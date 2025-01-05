<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeRequestCommand extends Command
{
    protected static string $defaultName = 'make:request';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new API request')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the request')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = $input->getOption('module');
        $path = "app/Http/Requests";
        $namespace = "App\\Http\\Requests";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Requests";
            $namespace = "App\\Modules\\{$moduleName}\\Requests";
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
            $output->writeln("<error>Request {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/request.stub');
        $content = str_replace(array('{{resourceName}}', '{{namespace}}'), array($name, $namespace), $stub);
        file_put_contents(AMADAY_PATH . '/' . $filePath, $content);

        $output->writeln("<info>Request {$name} created successfully at {$filePath}</info>");

        return Command::SUCCESS;
    }
}
