<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
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
            \Illuminate\Support\Facades\DB::table('schools')->insert([
                'name' => $faker->name,
                'email' => $faker->email(5),
                'logo' => "400x400_100x100.jpg"
            ]);
        }

    }
}
