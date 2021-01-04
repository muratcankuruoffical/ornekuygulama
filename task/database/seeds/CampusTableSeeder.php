<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('campuses')->insert([
                'school_id' => $i,
                'name' => $faker->name,
                'email' => $faker->email(5),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
