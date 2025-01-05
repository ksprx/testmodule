<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigCacheCommand extends Command
{
    protected static string $defaultName = 'config:cache';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    public function configure(): void
    {
        $this->setDescription('Cache the application configuration files');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $configPath = CONFIG_PATH;
        $cachePath = storage_path('/cache/config.php');

        $config = [];
        foreach (glob($configPath . '/*.php') as $file) {
            $key = basename($file, '.php');
            $config[$key] = include $file;
        }

        if (!file_exists(dirname($cachePath))) {
            mkdir(dirname($cachePath), 0755, true);
        }

        file_put_contents($cachePath, '<?php return ' . var_export($config, true) . ';');

        $output->writeln('<info>Configuration cached successfully!</info>');
        return Command::SUCCESS;
    }
}
