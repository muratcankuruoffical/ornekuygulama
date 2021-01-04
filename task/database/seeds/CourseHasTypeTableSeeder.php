<?php

use Illuminate\Database\Seeder;

class CourseHasTypeTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('coursehastypes')->insert([
                'course_id' => $i,
                'course_type_id' => $i,
            ]);
        }
    }
}
