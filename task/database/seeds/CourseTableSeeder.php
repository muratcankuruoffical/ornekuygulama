<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('courses')->insert([
                'campus_id' => $i,
                'name' => $faker->name,
                'price' => 14.99
            ]);
        }
    }
}
