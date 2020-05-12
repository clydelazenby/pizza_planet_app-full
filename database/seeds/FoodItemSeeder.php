<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'BBQ Wings',
            'description' => 'Crispy or grilled',
            'image_url' => 'img/wings.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Teriyaki',
            'description' => 'Crispy or grilled',
            'image_url' => 'img/wings.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Nashville Hot',
            'description' => 'Crispy or grilled',
            'image_url' => 'img/wings.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'House Hot Sauce',
            'description' => 'Crispy or grilled',
            'image_url' => 'img/wings.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
