<?php

namespace App\Core\Database\Seeders;

abstract class Seeder
{
    /**
     * Method that each seeder should implement.
     */
    abstract public function run();

    public function call(string $seederClass): void
    {
        $seeder = new $seederClass();

        if (method_exists($seeder, 'run')) {
            echo "Running seeder: " . $seederClass . PHP_EOL;
            $seeder->run();
            echo "Completed seeder: " . $seederClass . PHP_EOL;
        } else {
            echo "Seeder class {$seederClass} does not have a run method." . PHP_EOL;
        }
    }
}
