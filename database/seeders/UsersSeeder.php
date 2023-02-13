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
        //DB::table('users')->insert([
        DB::table('users')->insert([
            'name'=> "muzair",
            'phone'=> "23423423",
            'email'=> "muzair",
            'city'=> "muzair",
            'password'=> Hash::make('123'),
        ]);
        
    }
}