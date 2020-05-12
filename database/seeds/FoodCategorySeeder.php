<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'wings',
            'description' => 'An order of our classic, crispy bone-in wings is sure to hit the spot. All wings come with your choice of sauce Teriyaki, Honey BBQ, or our new Nashville Hot!',
            'image_url' => 'img/wings.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'pizza',
            'description' => 'This gourmet pizza is ideal for easy late night delivery, complete with mozzarella cheese and pepperoni. Order pizza online now.',
            'image_url' => 'img/pizzamay.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'salads',
            'description' => 'Tomatoes, red onions, cucumbers, shredded cheese, garlic croutons with your choice of dressing.',
            'image_url' => 'img/salad.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'pastas',
            'description' => 'Grilled chicken breast? Check. Creamy alfredo sauce? Check.Order this delicious pasta meal for takeout now. Serves 2.',
            'image_url' => 'img/pasta.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'sweets',
            'description' => 'Do You Feel Like A Little Sumthum’ Sumthum’? Try one of our personal mini desserts. (The Best You’ll Ever Have!)',
            'image_url' => 'img/cheesecake.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
