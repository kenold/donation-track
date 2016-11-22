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
        DB::table('donations')->truncate();

        $faker = Faker::create();
        $donations = [];

        foreach (range(1, 250) as $index) {
            $donations[] = [
                'contact_id' => $faker->numberBetween($min = 1, $max = 20),
                'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'contact_id' => rand(1, 20),
                'amount' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 800),
                'item_id' => rand(1, 5),
                'quantity' => $faker->numberBetween($min = 5, $max = 100),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
        }

        DB::table('donations')->insert($donations);
    }
}
