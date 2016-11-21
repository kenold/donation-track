<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donations = [];

        foreach (range(1, 250) as $index) {
            $donations[] = [
                'contact_id' => $faker->numberBetween($min = 1, $max = 20),
                'date' => $faker->date;
                'item_name' => $faker->,
                'quantity' => $faker->numberBetween($min = 5, $max = 100),
                'category_id' => $faker->numberBetween($min = 1, $max = 5),
            ];
        }
    }
}
