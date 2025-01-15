<?php

namespace App\Core\Console\Commands;

use Illuminate\Support\Str;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeModuleCommand extends Command
{
    protected static $defaultName = 'make:module';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new module with controllers, models, resources, requests, and routes')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the module');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($name);
        $modulePath = AMADAY_PATH . "/app/Modules/{$moduleName}";

        if (is_dir($modulePath)) {
            $output->writeln("<error>Module {$moduleName} already exists!</error>");
            return Command::FAILURE;
        }

        $this->createDirectories($modulePath);

        $this->createServiceProvider($moduleName, $modulePath);

        $this->createSchemaFile($modulePath, $moduleName);

//        $this->updateComposerAutoload($moduleName);

        $output->writeln("<info>Module {$moduleName} created successfully.</info>");
        return Command::SUCCESS;
    }

    protected function createDirectories(string $modulePath): void
    {
        $directories = [
            "{$modulePath}/Controllers",
            "{$modulePath}/Models",
            "{$modulePath}/Resources",
            "{$modulePath}/Migrations",
            "{$modulePath}/Middlewares",
            "{$modulePath}/Validation/Rules",
            "{$modulePath}/GraphQL",
            "{$modulePath}/GraphQL/Types",
            "{$modulePath}/Tests",
        ];

        foreach ($directories as $directory) {
            mkdir($directory, 0777, true);
        }
    }

    protected function createServiceProvider(string $moduleName, string $modulePath)
    {
        $namespace = "App\\Modules\\{$moduleName}";
        $className = "{$moduleName}ServiceProvider";
        $prefix = Str::snake($moduleName);

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/module/service_provider.stub');
        $content = str_replace(
            ['{{moduleNamespace}}', '{{moduleName}}', '{{prefix}}'],
            [$namespace, $className, $prefix],
            $stub
        );

        file_put_contents("{$modulePath}/{$className}.php", $content);
    }

    protected function createSchemaFile(string $modulePath, string $moduleName)
    {
        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/module/schema.stub');
        $content = str_replace(
            ['{{moduleName}}'],
            [$moduleName],
            $stub
        );

        file_put_contents("{$modulePath}/GraphQL/Schema.php", $content);
    }

    protected function updateComposerAutoload(string $moduleName): void
    {
        $composerJsonPath = AMADAY_PATH . '/composer.json';
        $composerJson = json_decode(file_get_contents($composerJsonPath), true);

        $composerJson['autoload']['psr-4']["App\\Modules\\{$moduleName}\\"] = "app/Modules/{$moduleName}";

        file_put_contents($composerJsonPath, json_encode($composerJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        shell_exec('composer dump-autoload');
    }
}
