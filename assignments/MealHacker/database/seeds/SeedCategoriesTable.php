<?php

use Illuminate\Database\Seeder;

class SeedCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Ukrainian Cuisine'
        ]);

        DB::table('categories')->insert([
            'name' => 'Egyptian Cuisine'
        ]);

        DB::table('categories')->insert([
            'name' => 'Italian Cuisine'
        ]);

        DB::table('categories')->insert([
            'name' => 'Turkish Cuisine'
        ]);

        DB::table('categories')->insert([
            'name' => 'Japanese Cuisine'
        ]);
    }
}
