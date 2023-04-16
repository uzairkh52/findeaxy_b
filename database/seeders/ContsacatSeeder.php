<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            "name" => "uzair",
            "phone" => "034343",
            "email" => "uzairkh52@gmail.com",
            "address" => "karachi",
        ]);
    }
}
