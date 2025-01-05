<?php

namespace App\Core\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StorageLinkCommand extends Command
{
    protected static string $defaultName = 'storage:link';

    public static function getDefaultName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Create a symbolic link from "public/storage" to "storage/app/public".');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $publicPath = public_path('storage');
        $storagePath = storage_path('app/public');
        if (!is_dir($storagePath)) {
            $output->writeln('<error>The "storage/app/public" directory does not exist.</error>');
            return Command::FAILURE;
        }

        if (is_link($publicPath)) {
            unlink($publicPath);
        } elseif (file_exists($publicPath)) {
            $output->writeln('<error>The "public/storage" already exists and is not a symbolic link.</error>');
            return Command::FAILURE;
        }

        if (symlink($storagePath, $publicPath)) {
            $output->writeln('<info>The [public/storage] directory has been linked successfully.</info>');
            return Command::SUCCESS;
        }

        $output->writeln('<error>Failed to create the symbolic link.</error>');
        return Command::FAILURE;
    }
}
