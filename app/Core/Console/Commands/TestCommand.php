<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'test:run';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure()
    {
        $this->addArgument(
            'modules',
            InputArgument::IS_ARRAY | InputArgument::OPTIONAL,
            'The names of the modules to test (separate multiple modules with a space).'
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $modules = $input->getArgument('modules');

        if (empty($modules)) {
            $testPath = "app/Http/Tests";
            $this->runTests($testPath, $output);
            return Command::SUCCESS;
        }

        foreach ($modules as $module) {
            $testPath = "app/Modules/{$module}/Tests";

            if (!is_dir($testPath)) {
                $output->writeln("<error>Test directory not found for module: {$module}</error>");
                continue;
            }

            $this->runTests($testPath, $output);
        }

        return Command::SUCCESS;
    }

    private function runTests(string $testPath, OutputInterface $output): void
    {
        $phpunitPath = 'vendor/bin/phpunit';
        $command = escapeshellcmd(PHP_BINARY . " vendor/bin/phpunit {$testPath}");

        $output->writeln("<info>Running tests for: {$testPath}</info>");
        passthru($command);
    }
}