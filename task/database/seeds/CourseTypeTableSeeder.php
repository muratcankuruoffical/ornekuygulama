<?php

use Illuminate\Database\Seeder;

class CourseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for($i=1; $i<10; $i++){
            \Illuminate\Support\Facades\DB::table('coursetypes')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}
