<?php

use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            \Illuminate\Support\Facades\DB::table('drivers')->insert([ //,
                'title' => $faker->title,
                'first_name' => $faker->firstName,
                'surname' => $faker->lastName,
                'property_number' => $faker->buildingNumber,
                'first_line_address' => $faker->streetName,
                'post_code' => $faker->postcode,
                'phone_number' => $faker->phoneNumber
            ]);
        }
    }

}
