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
        $this->call(SchoolTableSeeder::class);
        $this->call(CampusTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(CourseTypeTableSeeder::class);
        $this->call(CourseHasTypeTableSeeder::class);
    }
}
