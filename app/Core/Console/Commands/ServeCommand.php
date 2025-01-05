<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServeCommand extends Command
{
    protected static string $defaultName = 'serve';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Serve project');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $host = env('DEV_SERV_HOST', 'localhost');
        $port = env('DEV_SERV_PORT', 8000);
        $documentRoot = AMADAY_PATH . '/public';
        $serverCommand = sprintf('php -S %s:%d -t %s', $host, $port, $documentRoot);

        echo "Server running at http://{$host}:{$port}\n";
        passthru($serverCommand);
        return Command::SUCCESS;
    }
}
