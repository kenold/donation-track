<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_item')->delete();

        $now = date('Y-m-d H:i:s');

        $faker = Faker::create();

        $contactItem = [];
            foreach (range(1, 200) as $index) {
                $contactItem[] = [
                    'date' =>  $faker->unique()->dateTimeBetween($startDate = '-60 days ', $endDate = 'now'),
                    'contact_id'=> rand(1, 20),
                    'item_id' => rand(1, 10),
                    'item_qty' => rand (5, 250),
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        DB::table('contact_item')->insert($contactItem);
    }
}
