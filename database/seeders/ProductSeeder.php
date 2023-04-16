<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create ([
            "category_id" => 1,
            "user_id" => 1 ,
            "title" => "test 1",
            "description" => "test 1",
            "car_make" => "test 1",
            "car_model" => "test 1",
            "car_year" => "test 1",
            "car_drive_km" => "100",
            "car_fuel" => ("test1" . "test2"),
            "registration_city" => "test 1",
            "car_documents" => "test 1",
            "assembly" => "test 1",
            "transmission" => "test 1",
            "features" => "test 1",
            "condition" => "test 1",
            "price" => "test 1",
            "car_images" => "test 1",
            "location" => "test 1"
        ]);
        Product::create ([
            "category_id" => 1,
            "user_id" => 2 ,
            "title" => "test 2",
            "description" => "test 2",
            "car_make" => "test 2",
            "car_model" => "test 2",
            "car_year" => "test 2",
            "car_drive_km" => "200",
            "car_fuel" => ("test2" . "test2"),
            "registration_city" => "test 2",
            "car_documents" => "test 2",
            "assembly" => "test 2",
            "transmission" => "test 2",
            "features" => "test 2",
            "condition" => "test 2",
            "price" => "test 2",
            "car_images" => "test 2",
            "location" => "test 2"
        ]);
    }
}