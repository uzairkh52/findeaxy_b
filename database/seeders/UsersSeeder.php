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
            'first_name'=> "uzair2",
            'last_name'=> "uzair2",
            'email'=> "uzair2",
            'phone'=> "222",
            'password'=> Hash::make('555'),
        ]);
        DB::table('users')->insert([
            'first_name'=> "uzair3",
            'last_name'=> "uzair3",
            'email'=> "uzair3",
            'phone'=> "333",
            'password'=> Hash::make('333'),
        ]);
    }
}