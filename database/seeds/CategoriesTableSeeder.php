<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $now = date('Y-m-d H:i:s');

        DB::table('categories')->insert([
            [
                'name' => 'Medicine',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Toys',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Food',
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ]);
    }
}
