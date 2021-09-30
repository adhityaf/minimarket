<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CreateCategorySeeder;
use Database\Seeders\CreateProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CreateCategorySeeder::class,
            CreateProductSeeder::class,
            CreateDetailSeeder::class,
        ]);
    }
}
