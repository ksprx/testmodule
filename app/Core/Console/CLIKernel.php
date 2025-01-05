<?php

namespace App\Core\Console;

use DirectoryIterator;
use Exception;
use ReflectionClass;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CLIKernel
{
    protected Application $app;
    protected array $commandDirectories = [
        'app/Console/Commands',
        'app/Core/Console/Commands'
    ];

    public function __construct()
    {
        $this->app = new Application('Arta CLI', '1.0.0');
        $this->loadCommands();
    }

    protected function loadCommands(): void
    {
        foreach ($this->commandDirectories as $directory) {
            $this->registerCommandsFromDirectory($directory);
        }
    }

    protected function registerCommandsFromDirectory(string $directoryPath): void
    {
        $fullPath = AMADAY_PATH . '/' . $directoryPath;
        if (!is_dir($fullPath)) {
            return;
        }

        foreach (new DirectoryIterator($fullPath) as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                $this->registerCommandFromFile($directoryPath, $file->getBasename('.php'));
            }
        }
    }

    protected function registerCommandFromFile(string $namespacePath, string $className): void
    {
        $namespace = str_replace('/', '\\', $namespacePath);
        $fullClassName = ucfirst("{$namespace}\\{$className}");

        if (class_exists($fullClassName)) {
            $reflection = new ReflectionClass($fullClassName);
            if ($reflection->isSubclassOf(Command::class) && !$reflection->isAbstract()) {
                $this->app->add($reflection->newInstance());
            }
        }
    }

    /**
     * @throws Exception
     */
    public function run(): void
    {
        $this->app->run();
    }

    /**
     * @throws Exception
     */
    public function handle(InputInterface $input, OutputInterface $output)
    {
        return $this->app->run($input, $output);
    }
}
