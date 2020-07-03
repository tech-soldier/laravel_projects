<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeedRecipesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'name' => 'Borshch',
            'image' => 'borsh.jpg',
            'prep_time' => 60,
            'description' => 'Ukrainian Borsch… everyone knows what it is and many people around the world have fallen in love with this iconic beet soup. It is as authentic as it gets.
                                It can be served vegetarian-style by omitting the sausage.',
            'ingredients' => '1 (16 ounce) package pork sausage; 3 medium beets, peeled and shredded; 3 carrots, peeled and shredded;
                                3 medium baking potatoes, peeled and cubed; 1 tablespoon vegetable oil; 1 medium onion, chopped;
                                1 (6 ounce) can tomato paste; ¾ cup water; ½ medium head cabbage, cored and shredded; 1 (8 ounce) can diced tomatoes,
                                drained; 3 cloves garlic, minced; 1 pinch salt and pepper to taste; 1 teaspoon white sugar, or to taste; ½ cup sour cream,
                                for topping; 1 tablespoon chopped fresh parsley for garnish',
            'recipe' => '<span>Step 1</span>
                        <p>Crumble the sausage (if using) into a skillet over medium-high heat. Cook and stir until no longer pink. Remove from the heat and set aside.</p>
                        <span>Step 2</span>
                        <p>Fill a large pot halfway with water(about 2 quarts), and bring to a boil. Add the sausage, and cover the pot. Return to a boil. Add the beets, and cook until they have lost their color. Add the carrots and potatoes, and cook until tender, about 15 minutes. Add the cabbage, and the can of diced tomatoes.</p>
                        <span> Step 3</span>
                        <p>Heat the oil in a skillet over medium heat. Add the onion, and cook until tender. Stir in the tomato paste and water until well blended. Transfer to the pot. Add the raw garlic to the soup, cover and turn off the heat. Let stand for 5 minutes. Taste, and season with salt, pepper and sugar.</p>
                        <span>Step 4</span>
                        <p>Ladle into serving bowls, and garnish with sour cream, if desired, and fresh parsley. </p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => '',
            'image' => '',
            'prep_time' => 60,
            'description' => '',
            'ingredients' => '',
            'recipe' => '<span>Step 1</span>
                        <p></p>
                        <span>Step 2</span>
                        <p></p>
                        <span> Step 3</span>
                        <p></p>
                        <span>Step 4</span>
                        <p></p>',
            'vegetarian' => 'no',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
