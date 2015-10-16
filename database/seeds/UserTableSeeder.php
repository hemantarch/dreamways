<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'email' => 'hemant.adsl@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 1,
            'provider'=> '0',
            'provider_id'=> '0',
            'avatar' => 'null',
            'name' =>'Admin'
        ]);
    }
}
