<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeTypeCommand extends Command
{
    protected static $defaultName = 'make:type';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new type for graphql')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the controller')
            ->addOption('module', 'p', InputOption::VALUE_REQUIRED, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $typeName = ucfirst($name) . 'Type';
        $path = "app/Http/GraphQL/Types";
        $namespace = "App\\Http\\GraphQL\\Types";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/GraphQL/Types";
            $namespace = "App\\Modules\\{$moduleName}\\GraphQL\\Types";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, 0755, true);
        }

        $typepath = $path . "/{$typeName}.php";

        if (file_exists($typepath)) {
            $output->writeln("<error>Type {$typepath} already exists!</error>");
            return Command::FAILURE;
        }

        $stubPath = AMADAY_PATH . '/app/Core/Stubs/type.stub';

        $stub = file_get_contents($stubPath);
        $content = str_replace(array('{{typeName}}', '{{namespace}}'), array($typeName, $namespace), $stub);

        file_put_contents($typepath, $content);

        $output->writeln("<info>Type {$typeName} created successfully.</info>");

        return Command::SUCCESS;
    }
}
