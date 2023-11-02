<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TodosTableSeeder;
use Database\Seeders\TodoLabelsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TodoLabelsTableSeeder::class);
        $this->call(TodosTableSeeder::class);
    }
}
