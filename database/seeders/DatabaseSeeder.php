<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            SectionSeeder::class,
            SubsectionSeeder::class,
            DivisionSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
