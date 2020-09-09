<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'name'     => 'Feisal',
            'email'    => 'feisalmombo29@gmail.com',
            'password' => Hash::make('feisal'),
            'mobile'=>'0684456287',
            'isVerified'=>0
        ]);
    }
}
