<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Pizza Planet',
            'logo_image_url' => 'https://cdn.clipart.email/e07e234760ce1954118f8fc00f0239a8_toy-story-pizza-planet-logos_900-900.jpeg',
            'address_1' => '3691 New Bern Ave Tower Shopping Center',
            'address_2' => '',
            'city' => 'Raleigh',
            'state' => 'NC',
            'zipcode' => '27610',
            'phone_number' => '704-867-5309',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
