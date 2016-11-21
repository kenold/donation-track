<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();

        $faker = Faker::create();
        $contact = [];
            foreach (range(1, 20) as $index) {
                $contacts[] = [
                    'fname' => $faker->firstName,
                    'lname' => $faker->lastName,
                    'mname' => $faker->randomElement($array = array ('A','B','C', 'D', 'E', 'F', 'K', 'M', 'N')),
                    'sex' => $faker->randomElement($array = array ('M','F')),
                    'photo_url' => $faker->imageUrl($width = 640, $height = 480, 'people', true),
                    'job_title' => $faker->jobTitle ,
                    'company' => $faker->company ,
                    'address1' => $faker->streetAddress,
                    'address2' => $faker->secondaryAddress,
                    'city' => $faker->city,
                    'state' => $faker->stateAbbr,
                    'zip' => $faker->postcode,
                    'country' => $faker->country,
                    'cell_phone' => $faker->phoneNumber,
                    'work_phone' => $faker->phoneNumber,
                    'email' => $faker->email,
                    'facebook' => 'http://www.facebook.com/' . $faker->userName,
                    'twitter' => 'http://www.twitter.com/' . $faker->userName,
                    'skype' => $faker->userName,
                    'notes' => $faker->sentence($nbWords = 12, $variableNbWords = true),
                ];
            }
        DB::table('contacts')->insert($contacts);
    }
}
