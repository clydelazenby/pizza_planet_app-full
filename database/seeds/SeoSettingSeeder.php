<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Pizza Planet is a food chain based in Raleigh, Nc",
            'keywords' => "Pizza, Local Pizza, Pizza Planet, Wings, Salads, Pasta",
        
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
