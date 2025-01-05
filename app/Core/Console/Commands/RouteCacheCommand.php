<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RouteCacheCommand extends Command
{
    protected static string $defaultName = 'route:cache';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    public function configure(): void
    {
        $this->setDescription('Cache the application routes');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $router = app()->getRouter();
        $routes = $router->getAllRoutes();
        $cachePath = storage_path('/cache/routes.php');

        if (!file_exists(dirname($cachePath))) {
            mkdir(dirname($cachePath), 0755, true);
        }

        file_put_contents($cachePath, '<?php return ' . var_export($routes, true) . ';');

        $output->writeln('<info>Routes cached successfully!</info>');
        return Command::SUCCESS;
    }
}