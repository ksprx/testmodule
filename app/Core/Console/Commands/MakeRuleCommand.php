<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeRuleCommand extends Command
{
    protected static string $defaultName = 'make:rule';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new validation rule')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the validation rule')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $name = ucwords($name);
        $path = "app/Core/Validation/Rules";
        $namespace = "App\\Core\\Validation\\Rules";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Validation/Rules";
            $namespace = "App\\Modules\\{$moduleName}\\Validation\\Rules";
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
            $output->writeln("<error>Rule {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/rule.stub');
        $content = str_replace(array('{{className}}', '{{namespace}}'), array($name, $namespace), $stub);
        file_put_contents(AMADAY_PATH . '/' . $filePath, $content);

        $output->writeln("<info>Rule {$name} created successfully at {$filePath}</info>");

        return Command::SUCCESS;
    }
}
