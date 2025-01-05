<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeSeederCommand extends Command
{
    protected static $defaultName = 'make:seeder';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a new database seeder')
            ->addArgument('name', InputArgument::REQUIRED, 'The name of the seeder');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        $seederPath = AMADAY_PATH . '/database/seeders';

        if (!file_exists($seederPath)) {
            mkdir($seederPath, 0755, true);
        }

        $filePath = $seederPath . '/' . $name . '.php';

        if (file_exists($filePath)) {
            $output->writeln("<error>Seeder {$name} already exists!</error>");
            return Command::FAILURE;
        }

        $stub = file_get_contents(AMADAY_PATH . '/app/Core/Stubs/seeder.stub');
        var_dump(file_exists(AMADAY_PATH . '/app/Core/Stubs/migration.stub'));
        $seederContent = str_replace('{{seederName}}', $name, $stub);

        file_put_contents($filePath, $seederContent);
        $output->writeln("<info>Seeder created successfully at {$filePath}</info>");

        return Command::SUCCESS;
    }
}
