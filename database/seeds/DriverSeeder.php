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


        \Illuminate\Support\Facades\DB::table('routes')->insert([
            'route_id' => '2b',
            'start_location' => 'bournemouth',
            'end_location' => 'southbourne',
        ]);

        \Illuminate\Support\Facades\DB::table('routes')->insert([
            'route_id' => '1b',
            'start_location' => 'bournemouth',
            'end_location' => 'kinson',
        ]);

        \Illuminate\Support\Facades\DB::table('routes')->insert([
            'route_id' => '5a',
            'start_location' => 'bournemouth',
            'end_location' => 'westbourne',
        ]);

        \Illuminate\Support\Facades\DB::table('routes')->insert([
            'route_id' => '9b',
            'start_location' => 'bournemouth',
            'end_location' => 'poole',
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '5a'

        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '5a'

        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '5a'

        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '5a'

        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '9b'

        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '9b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '9b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '9b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '9b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '1b'

        ]);
        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '1b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '1b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '1b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '1b'
        ]);
        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '2b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '2b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '2b'
        ]);

        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '2b'
        ]);
        \Illuminate\Support\Facades\DB::table('drivers')->insert([
            'title' => $faker->title,
            'first_name' => $faker->firstName,
            'surname' => $faker->lastName,
            'property_number' => $faker->buildingNumber,
            'first_line_address' => $faker->streetName,
            'post_code' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'route_id' => '2b'
        ]);



    }

}
