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
            'name' => 'Vareniky',
            'image' => 'vareniki.jpg',
            'prep_time' => 120,
            'description' => 'Called “vareniki,” these little dumplings are absolutely to-die-for! They can have so many different types of fillings. They can range from sweet to savory, but this particular version is my favorite.',
            'ingredients' => '18 ounces potatoes; 1 pinch salt and freshly ground black pepper; 3 cups all-purpose flour; 1 teaspoon salt; ¼ cup sour cream; ½ teaspoon baking soda; ½ cup water; ¼ cup butter; 2 onions, finely diced; 3 ½ cups finely chopped button mushrooms',
            'recipe' => '<span>Step 1</span>
                        <p>Place potatoes into a large pot and cover with salted water; bring to a boil. Reduce heat to medium-low and simmer until tender, about 25 minutes. Drain potatoes and mash; season with salt and pepper.</p>
                        <span>Step 2</span>
                        <p>Combine flour and 1 teaspoon salt in a large bowl while potatoes are cooking. Stir sour cream and baking soda together in a second bowl. Add water to flour mixture and blend in, followed by sour cream mixture. Knead into a smooth dough, cover with plastic wrap, and refrigerate for 10 to 15 minutes.</p>
                        <span> Step 3</span>
                        <p>Melt butter in a skillet over medium heat and cook onions until browned, 5 to 10 minutes. Add mushrooms and cook until browned, about 5 minutes. Add to mashed potatoes.</p>
                        <span>Step 4</span>
                        <p>Divide dough into 4 portions and roll each portion into a 1 1/2-inch thick rope. Cut ropes into small 1/2-inch pieces. Press each dough piece into a small flat circle and place 1 teaspoon of potato filling in the center. Fold dough over into a half-moon shape and seal edges.</p>,
                        <span>Step 5</span>
                        <p>Bring a large pot of salted water to a gentle boil. Add the vareniki in batches and cook until they float to the surface, about 3 minutes. Cook for 2 to 3 minutes more. Remove with a slotted spoon and place in a colander to drain.</p>',
            'vegetarian' => 'yes',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Pizza Dough',
            'image' => 'pizza.jpg',
            'prep_time' => 60,
            'description' => 'Cooks everywhere agree: this is the best pizza dough recipe! It’s a trusted resource for how to make pizza dough with the perfect chewy texture—every time.',
            'ingredients' => '500 grams* Tipo 00 or all-purpose flour (3 1/3 cups); 8 grams instant or active dry yeast (2 teaspoons); 7 grams kosher salt (1 teaspoon); 338 grams warm water (1 1/4 cups + 3 tablespoons); 13 grams olive oil (1 tablespoon)',
            'recipe' => '<span>Step 1</span>
                        <p>Combine the flour, salt, and yeast in a bowl or the bowl of your stand mixer. Stir to combine. Add the water and olive oil and stir until a raggy dough forms. Turn the dough out onto a floured surface.</p>
                        <span>Step 2</span>
                        <p>Knead the dough by pushing with the base of your palm, then reforming it into a ball. Continue kneading for 8 minutes until the dough feels pillowy and has a smooth, stretchy exterior. If the dough is very sticky, add a small amount of flour while kneading. Alternatively: attach the dough hook to a stand mixer and start the mixer on medium-low speed, then allow the mixer to knead for 8 minutes.</p>
                        <span> Step 3</span>
                        <p>After the kneading is finished, divide the dough into 3 equal pieces. Using floured hands, gently shape each half into a boule (ball shape) by folding the dough under itself. Set each boule on a floured surface and dab the dough with a bit of olive oil to keep it moist. Cover all boules with a damp towel and allow them to rise until doubled in size, about 45 minutes to 1 hour.</p>
                        <span>Step 4</span>
                        <p>The dough can be used immediately. However, for the BEST flavor, transfer the dough to separate sealed containers, large enough for the dough to double in size again, and store in the refrigerator for 2 to 3 days. (Alex and I don’t always do this, but we try when possible because it makes for a noticeably nutty, unique flavor that truly is the best homemade pizza dough you’ve ever had.) </p>
                        <span>Step 5</span>
                        <p>To stretch the dough, place it on a lightly floured surface and gently press it into a circle, flipping several times and adding a pinch of flour if it is too sticky. Once you have about an 8-inch circle, pick up the dough and gently drape it over the knuckles on both of your hands. Slowly rotate it around, allowing gravity to stretch it into a circle about 11 inches in diameter. Do not overwork or fold the dough. If the dough starts to resist stretching, put it down and allow it to rest for a few minutes, at which point it will stretch more easily.We bake our pizzas at 500F and use a pizza peel to transfer it to a preheated pizza stone in the oven: the bake time is around 5 to 7 minutes.</p>',
            'vegetarian' => 'no',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Spaghetti Pasta Carbonara',
            'image' => 'pasta.jpg',
            'prep_time' => 30,
            'description' => 'Spaghetti Pasta Carbonara—indulgent and delicious, yet so easy! Pasta carbonara takes only 30 min start to finish! Learn how to make carbonara sauce with bacon or pancetta and loads of parmesan.',
            'ingredients' => '1 tablespoon extra virgin olive oil or unsalted butter; 1/2 pound pancetta or thick cut bacon, diced; 1-2 garlic cloves, minced, about 1 teaspoon (optional); 3-4 whole eggs; 1 cup grated parmesan or pecorino cheese; 1 pound spaghetti pasta (or bucatini or fettuccine); Salt and black pepper to taste',
            'recipe' => '<span>Step 1</span>
                        <p>Heat pasta water: Put a large pot of salted water on to boil (1 Tbsp salt for every 2 quarts of water.)</p>
                        <span>Step 2</span>
                        <p>Sauté pancetta/bacon and garlic: While the water is coming to a boil, heat the olive oil in a large sauté pan over medium heat. Add the bacon or pancetta and cook slowly until crispy. Add the garlic (if using) and cook another minute, then turn off the heat and put the pancetta and garlic into a large bowl.</p>
                        <span> Step 3</span>
                        <p>. Beat eggs and half of the cheese: In a small bowl, beat the eggs and mix in about half of the cheese.</p>
                        <span>Step 4</span>
                        <p>Cook pasta: Once the water has reached a rolling boil, add the dry pasta, and cook, uncovered, at a rolling boil.</p>
                        <span>Step 5</span>
                        <p>Toss pasta with pancetta/bacon: When the pasta is al dente (still a little firm, not mushy), use tongs to move it to the bowl with the bacon and garlic. Let it be dripping wet. Reserve some of the pasta water. Move the pasta from the pot to the bowl quickly, as you want the pasta to be hot. It\'s the heat of the pasta that will heat the eggs sufficiently to create a creamy sauce.
Toss everything to combine, allowing the pasta to cool just enough so that it doesn\'t make the eggs curdle when you mix them in. (That\'s the tricky part.)
</p>
                        <span>Step 6</span>
                        <p>Add the beaten egg mixture: Add the beaten eggs with cheese and toss quickly to combine once more. Add salt to taste. Add some pasta water back to the pasta to keep it from drying out.
Serve at once with the rest of the parmesan and freshly ground black pepper. If you want, sprinkle with a little fresh chopped parsley.
</p>',
            'vegetarian' => 'no',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Tiramisu',
            'image' => 'tiramisu.jpg',
            'prep_time' => 300,
            'description' => 'Mascarpone custard layered with whipped cream and rum and coffee soaked ladyfingers.',
            'ingredients' => 'egg yolks; 3/4 cup white sugar; 2/3 cup milk; 1 1/4 cups heavy cream; 1/2 teaspoon vanilla extract; 1 pound mascarpone cheese; 1/4 cup strong brewed coffee, room temperature; 2 tablespoons rum; 2 (3 ounce) packages ladyfinger cookies; 1 tablespoon unsweetened cocoa powder',
            'recipe' => '<span>Step 1</span>
                        <p>In a medium saucepan, whisk together egg yolks and sugar until well blended. Whisk in milk and cook over medium heat, stirring constantly, until mixture boils. Boil gently for 1 minute, remove from heat and allow to cool slightly. Cover tightly and chill in refrigerator 1 hour.</p>
                        <span>Step 2</span>
                        <p>In a medium bowl, beat cream with vanilla until stiff peaks form. Whisk mascarpone into yolk mixture until smooth.</p>
                        <span> Step 3</span>
                        <p>In a small bowl, combine coffee and rum. Split ladyfingers in half lengthwise and drizzle with coffee mixture.</p>
                        <span>Step 4</span>
                        <p>Arrange half of soaked ladyfingers in bottom of a 7x11 inch dish. Spread half of mascarpone mixture over ladyfingers, then half of whipped cream over that. Repeat layers and sprinkle with cocoa. Cover and refrigerate 4 to 6 hours, until set.</p>',
            'vegetarian' => 'no',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Hummus',
            'image' => 'hummus.jpg',
            'prep_time' => 60,
            'description' => 'This roasted Garlic Parmesan Hummus is silky smooth, the creamiest hummus you will ever have! Layered with nutty flavors and loaded with garlic and pepper this dip has a flavorful kick. Your every day hummus jazzed up that will leave you begging for more! Drizzle with a little extra olive oil, parmesan and pepper if you like before enjoying!',
            'ingredients' => '1 head garlic, top third sliced off and discarded; 1 teaspoon olive oil; 1 pinch salt and ground black pepper to taste; 1 (15 ounce) can chickpeas (garbanzo beans), drained and rinsed; 1/4 cup tahini; 1/4 cup grated Parmesan cheese; 3 tablespoons extra-virgin olive oil; 2 tablespoons lemon juice; 1/2 teaspoon freshly ground black pepper; 1/4 teaspoon cumin; 1/4 teaspoon salt',
            'recipe' => '<span>Step 1</span>
                        <p>Preheat oven to 375 degrees F (190 degrees C).</p>
                        <span>Step 2</span>
                        <p>Place the garlic head on a piece of aluminum foil. Drizzle olive oil over garlic and season with salt and pepper. Wrap foil around garlic to fully enclose and place on a baking sheet.</p>
                        <span> Step 3</span>
                        <p>Bake in the preheated oven until roasted and tender, about 40 minutes. Remove garlic from aluminum foil and cool for 20 minutes. Remove garlic cloves from the peels.</p>
                        <span>Step 4</span>
                        <p>Combine roasted garlic, chickpeas, tahini, Parmesan cheese, olive oil, lemon juice, 1/2 teaspoon black pepper, cumin, and salt in a food processor or blender until smooth.</p>',
            'vegetarian' => 'yes',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Falafel',
            'image' => 'falafel.jpg',
            'prep_time' => 60,
            'description' => 'Falafel is a deep-fried ball or patty made from ground chickpeas, fava beans, or both. Falafel is a traditional Middle Eastern food, commonly served in a pita, which acts as a pocket, or wrapped in a flatbread known as taboon.',
            'ingredients' => '1 (15 ounce) can chickpeas (garbanzo beans), drained; 1 onion, chopped; 1/2 cup fresh parsley; 2 cloves garlic, chopped; 1 egg; 2 teaspoons ground cumin; 1 teaspoon ground coriander; 1 teaspoon salt; 1 dash pepper; 1 pinch cayenne pepper; 1 teaspoon lemon juice; 1 teaspoon baking powder; 1 tablespoon olive oil; 1 cup dry bread crumbs; 1 quart oil for frying; 2 pita breads, cut in half; 1 cup chopped tomatoes',
            'recipe' => '<span>Step 1</span>
                        <p>In a small bowl combine yogurt, cucumber, dill, salt, pepper and mayonnaise and mix well. Chill for at least 30 minutes.</p>
                        <span>Step 2</span>
                        <p>In a large bowl mash chickpeas until thick and pasty; don\'t use a blender, as the consistency will be too thin. In a blender, process onion, parsley and garlic until smooth. Stir into mashed chickpeas.</p>
                        <span> Step 3</span>
                        <p>In a small bowl combine egg, cumin, coriander, salt, pepper, cayenne, lemon juice and baking powder. Stir into chickpea mixture along with olive oil. Slowly add bread crumbs until mixture is not sticky but will hold together; add more or less bread crumbs, as needed. Form 8 balls and then flatten into patties.</p>
                        <span>Step 4</span>
                        <p>Heat 1 inch of oil in a large skillet over medium-high heat. Fry patties in hot oil until brown on both sides. Serve two falafels in each pita half topped with chopped tomatoes and cucumber sauce.
 
</p>',
            'vegetarian' => 'yes',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Kofta Kebap',
            'image' => 'kebab.jpg',
            'prep_time' => 30,
            'description' => 'A must-try authentic Kofta kebab recipe: ground beef and lamb mixed with fresh parsley, onions, garlic and Middle Eastern spices. Add some Mediterranean sides and salads for your next picnic!',
            'ingredients' => '1 medium yellow onion, quartered; 2 garlic cloves; 1 whole bunch parsley, stems removed (about 2 packed cups parsley leaves); 1 lb ground beef; 1/2 lb ground lamb; 1 slice of bread, toasted until browned and soaked in water until fully tender; Salt and pepper; 1 1/2 tsp ground allspice; 1/2 tsp cayenne pepper; 1/2 tsp ground green cardamom; 1/2 tsp ground sumac; 1/2 tsp ground nutmeg; 1/2 tsp paprika; Pita bread to serve',
            'recipe' => '<span>Step 1</span>
                        <p>Soak 10 wooden skewers in water for about 30 minutes to 1 hour. Remove from water when you are ready to begin. Lightly oil the grates of a gas grill and preheat it to medium-high for about 20 minutes. Prepare pita bread and fixings. If you plan to, make the tahini sauce from this recipe. Prepare other sides and salads before you begin grilling.</p>
                        <span>Step 2</span>
                        <p>In a food processor, chop the onion, garlic, and parsley.
                        Add the beef, lamb, bread (be sure to squeeze out the water completely), and the spices. Run the processor until all is well combined forming a pasty meat mixture.
                        </p>
                        <span> Step 3</span>
                        <p>Remove the meat mixture from the food processor and place in a large bowl. Take a fistful portion of the meat mixture and mold it on a wooden skewer. Repeat the process until you have run out of meat. For best results, make sure each kofta kebab is about 1 inch in thickness.</p>
                        <span>Step 4</span>
                        <p>Lay the skewered kofta kebabs on a tray lined with parchment paper
                        Place the kofta kebabs on the lightly oiled, heated gas grill. Grill on medium-high heat for 4 minutes on one side, turn over and grill for another 3-4 minutes.
                        Serve the kofta kebabs immediately with pita bread, tahini and the fixings you prepared. See suggestions for sides and related recipes.
                        </p>',
            'vegetarian' => 'no',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menemen',
            'image' => 'menemen.jpg',
            'prep_time' => 60,
            'description' => 'This traditional Turkish egg scramble is quick and easy to make with a few basic ingredients, and extra-delicious when served up with some good crusty bread.  See notes above for possible variations.',
            'ingredients' => '1 tablespoon olive oil and butter; 1 onion finely diced; 1 green pepper finely diced; 1 (15-ounce) can diced tomatoes, with their juices; 1 teaspoon aleppo pepper, salt and pepper; 4 eggs; ',
            'recipe' => '<span>Step 1</span>
                        <p>Sauté some finely-diced onion and peppers in olive oil until softened.</p>
                        <span>Step 2</span>
                        <p> Add in the tomatoes, butter, Aleppo pepper, plus a generous pinch of salt and black pepper, and stir for a bit until the tomatoes are nice and hot.</p>
                        <span> Step 3</span>
                        <p>Crack the eggs directly onto the tomato mixture and let them cook for about a minute or so.  Then use a spoon to break up the yolks and briefly stir the eggs into the tomato mixture.  (I recommend only partially stirring in the eggs, so that they are nice and swirly on top.)  Continue cooking until the eggs reach your desired level of doneness.  Traditionally the eggs are cooked until just barely set, yet still soft, about 3 to 4 minutes total.</p>
                        <span>Step 4</span>
                        <p>Serve immediately with your desired garnishes, along with a few slices of toasted bread to scoop up the menemen, and dive in!</p>',
            'vegetarian' => 'no',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('recipes')->insert([
            'name' => 'Shrimp Tempura',
            'image' => 'tempura.jpg',
            'prep_time' => 60,
            'description' => 'Japanese-Style Deep-Fried Shrimp. Shrimp are seasoned and coated with crispy panko crumbs to make the easiest, tastiest deep-fried shrimp ever!',
            'ingredients' => '1 pound medium shrimp, peeled (tails left on) and deveined; ½ teaspoon salt; ½ teaspoon ground black pepper; ½ teaspoon garlic powder; 1 cup all-purpose flour; 1 teaspoon paprika; 2 eggs, beaten; 1 cup panko crumbs; 1 quart vegetable oil for frying',
            'recipe' => '<span>Step 1</span>
                        <p>Place the shrimp in a bowl and season with salt, pepper and garlic powder. In a small bowl, stir together the flour and paprika. Place eggs and panko crumbs into separate bowls.</p>
                        <span>Step 2</span>
                        <p>Heat the oil in a deep-fryer or deep skillet to 375 degrees F (190 degrees C). Dip each shrimp into the flour mixture, then into the egg, and finally into the panko crumbs to coat.</p>
                        <span> Step 3</span>
                        <p> Fry a few at a time until golden brown. This should take no longer than 5 minutes. Remove with a slotted spoon and drain on paper towels before serving.</p>',
            'vegetarian' => 'no',
            'category_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
