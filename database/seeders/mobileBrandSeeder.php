<?php

namespace Database\Seeders;

use App\Models\MobileBrand;
use Illuminate\Database\Seeder;

class mobileBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobilebrand = [
            "Popular Brand",
            "Apple iPhone",
            "Samsung Mobile",
            "Vivo",
            "OPPO",
            "Infinix",
            "Others",
            "Acer",
            "Alcatel",
            "Apple iPhone",
            "Asus",
            "BlackBerry",
            "Calme",
            "Club",
            "G'Five",
            "Google",
            "Gright",
            "Haier",
            "Honor",
            "HTC",
            "Huawei",
            "iNew",
            "Infinix",
            "Lava",
            "Lenovo",
            "LG",
            "Meizu",
            "Mobilink JazzX",
            "Motorola",
            "Nokia",
            "One Plus",
            "OPPO",
            "Panasonic",
            "QMobile",
            "Realme",
            "RIVO",
            "Samsung Mobile",
            "Sony",
            "Sony Ericsson",
            "Tecno",
            "Vivo",
            "VOICE",
            "Xiaomi",
            "Zte",
            "Other Mobiles",
        ];
        foreach ($mobilebrand as $getMobilebrand) {
            MobileBrand::create([
                "name" => $getMobilebrand
            ]);
        };
        
    }
}