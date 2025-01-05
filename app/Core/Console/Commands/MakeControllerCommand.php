<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeControllerCommand extends Command
{
    protected static $defaultName = 'make:controller';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new controller')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the controller')
            ->addOption('resource', 'r', InputOption::VALUE_NONE, 'Create a resource controller with predefined methods')
            ->addOption('model', 'm', InputOption::VALUE_REQUIRED, 'Specify a model for resource binding')
            ->addOption('module', 'p', InputOption::VALUE_REQUIRED, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $isResource = $input->getOption('resource');
        $modelName = $input->getOption('model');
        $moduleName = $input->getOption('module');
        $controllerName = ucfirst($name) . 'Controller';
        $path = "app/Http/Controllers";
        $namespace = "App\\Http\\Controllers";
        $extraUse = "use App\\Http\\Controllers\\Controller;";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Controllers";
            $namespace = "App\\Modules\\{$moduleName}\\Controllers";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, 0755, true);
        }

        $controllerPath = $path . "/{$controllerName}.php";

        if (file_exists($controllerPath)) {
            $output->writeln("<error>Controller {$controllerName} already exists!</error>");
            return Command::FAILURE;
        }

        $stubPath = $isResource
            ? AMADAY_PATH . '/app/Core/Stubs/controller.resource.stub'
            : AMADAY_PATH . '/app/Core/Stubs/controller.stub';

        $stub = file_get_contents($stubPath);
        $content = str_replace(array('{{controllerName}}', '{{extraUse}}', '{{namespace}}'), array($controllerName, $extraUse, $namespace), $stub);
        if ($modelName) {
            $content = str_replace(array('{{modelNamespace}}', '{{modelType}}', '{{modelVariable}}'), array("use App\\Models\\{$modelName};", $modelName, strtolower($modelName)), $content);
        } else {
            $content = str_replace(array('{{modelNamespace}}', '{{modelType}}', '{{modelVariable}}'), array('', 'string $id', '$id'), $content);
        }

        file_put_contents($controllerPath, $content);

        $output->writeln("<info>Controller {$controllerName} created successfully.</info>");

        return Command::SUCCESS;
    }
}
