<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name'=> "muzair",
            'phone'=> "23423423",
            'email'=> "muzair",
            'city'=> "muzair",
            'password'=> Hash::make('123'),
        ]);
    }
}