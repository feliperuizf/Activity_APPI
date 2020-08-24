<?php

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
        // $this->call(UserSeeder::class);
        $this->call(statusAvailabilityTableSeeder::class);
        $this->call(workersTableSeeder::class);
        $this->call(experiencesTableSeeder::class);
        $this->call(experienceworkersTableSeeder::class);
        $this->call(jobprofilesTableSeeder::class);
        $this->call(studiesTableSeeder::class);
        $this->call(studiesworkersTableSeeder::class);
    }
}