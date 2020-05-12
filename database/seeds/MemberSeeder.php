<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'billy',
            'lname' => 'jones',
            'email' => 'billy@gmail.com',
            'phone_number' => '7045007008',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
