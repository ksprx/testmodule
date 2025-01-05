<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeCommandCommand extends Command
{
    protected static string $defaultName = 'make:command';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new command')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $path = "app/Console/Commands";
        if (!file_exists(AMADAY_PATH . '/' . $path)) {
            mkdir(AMADAY_PATH . '/' . $path, true, true);
        }
        $path = $path . "/{$name}.php";

        if (file_exists($path)) {
            $output->writeln("<error>Command {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/command.stub');
        $content = str_replace('{{commandName}}', ucfirst($name), $stub);
        $content = str_replace('{{commandNameLower}}', strtolower($name), $content);
        file_put_contents($path, $content);
        $output->writeln("<info>Command {$name} created successfully.</info>");

        return Command::SUCCESS;
    }
}
