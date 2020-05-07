<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('users')->insert([
            'fname' => 'Sam',
            'lname' => 'Smith',
            'email' => 'Sam@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'Ashley',
            'lname' => 'Smith',
            'email' => 'Ashley@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
