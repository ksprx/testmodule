<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MakeMiddlewareCommand extends Command
{
    protected static string $defaultName = 'make:middleware';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new middleware class')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the middleware')
            ->addOption('global', 'g', InputOption::VALUE_NONE, 'Register the middleware as global')
            ->addOption('module', 'p', InputOption::VALUE_OPTIONAL, 'Specify a module for resource binding');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $moduleName = ucwords($input->getOption('module'));
        $path = "app/Http/Middlewares";
        $namespace = "App\\Http\\Middlewares";
        if ($moduleName) {
            $pathModule = "app/Modules/{$moduleName}";
            $path = "app/Modules/{$moduleName}/Middlewares";
            $namespace = "App\\Modules\\{$moduleName}\\Middlewares";
            if (!is_dir($pathModule)) {
                $output->writeln("<error>Module {$moduleName} Not Exist</error>");
                return Command::FAILURE;
            }
        }
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, 0755, true);
        }

        $middlewarePath = AMADAY_PATH . "/{$path}/{$name}.php";

        if (file_exists($middlewarePath)) {
            $output->writeln("<error>Middleware {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/middleware.stub');
        $content = str_replace(array('{{class}}', '{{namespace}}'), array($name, $namespace), $stub);
        file_put_contents($middlewarePath, $content);

        $output->writeln("<info>Middleware {$name} created successfully at {$middlewarePath}.</info>");

        if ($input->getOption('global')) {
            $this->registerGlobalMiddleware($name, $output);
        }

        return Command::SUCCESS;
    }

    protected function registerGlobalMiddleware(string $name, OutputInterface $output): void
    {
        $configPath = AMADAY_PATH . '/config/middlewares.php';

        $middlewares = file_exists($configPath) ? include $configPath : [];

        $middlewares[] = "\App\Http\Middlewares\\$name::class";

        $content = "<?php\n\nreturn [\n";
        $content .= implode(",\n", array_map(function ($middleware) {
            return "    {$middleware}";
        }, $middlewares));
        $content .= "\n];\n";

        file_put_contents($configPath, $content);

        $output->writeln("<info>Middleware {$name} registered as global middleware in config/middlewares.php.</info>");
    }
}
