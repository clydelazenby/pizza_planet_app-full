<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => "www.facebook.com",
            'twitter_url' => "www.twitter.com",
            'instagram_url' => "www.instagram.com",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
