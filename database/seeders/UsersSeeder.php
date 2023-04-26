<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=> 1,
            'first_name'=> "uzair1",
            'last_name'=> "uzair1",
            'email'=> "uzair1",
            'phone'=> "111",
            'password'=> Hash::make('111'),
        ]);
        DB::table('users')->insert([
            'id'=> 2,
            'first_name'=> "uzair2",
            'last_name'=> "uzair2",
            'email'=> "uzair2",
            'phone'=> "222",
            'password'=> Hash::make('222'),
        ]);
    }
}