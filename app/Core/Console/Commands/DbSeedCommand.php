<?php

namespace App\Core\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DbSeedCommand extends Command
{
    protected static $defaultName = 'db:seed';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Run the database seeders');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Seeding the database...</info>');

        // Run the DatabaseSeeder
        $seeder = new DatabaseSeeder();
        $seeder->run();

        $output->writeln('<info>Database seeding completed successfully!</info>');

        return Command::SUCCESS;
    }
}
