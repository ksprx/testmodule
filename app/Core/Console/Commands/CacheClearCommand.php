<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CacheClearCommand extends Command
{
    protected static string $defaultName = 'cache:clear';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    public function configure(): void
    {
        $this->setDescription('Clear all cached files');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $cacheFiles = [
            storage_path('/cache/config.php'),
            storage_path('/cache/routes.php'),
        ];

        foreach ($cacheFiles as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }

        $output->writeln('<info>Cache cleared successfully!</info>');
        return Command::SUCCESS;
    }
}