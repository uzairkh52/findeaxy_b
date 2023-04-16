<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_name = [
            "car",
            "bike",
            "mobile",
            "laptop",
            "tablet",
        ];
        foreach ($category_name as $get_category_name) {
            # code...
            Category::create (
                ["name" => $get_category_name]
            );
        }
    }
}