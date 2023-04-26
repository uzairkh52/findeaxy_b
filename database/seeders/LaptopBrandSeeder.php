<?php

namespace Database\Seeders;

use App\Models\Laptop;
use App\Models\LaptopBrand;
use Illuminate\Database\Seeder;

class LaptopBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Major brands",
            "Dell",
            "HP",
            "Lenovo",
            "Apple",
            "Acer",
            "Microsoft Surface",
            "Asus",
            "Other brands",
            "AGB Supreme TechnologyAlienware",
            "Axioo",
            "Bitblaze",
            "Bmax",
            "BOXX Technologies",
            "Casper",
            "ja",
            "Corsair",
            "Clevo",
            "CyberPowerPC",
            "Digital Storm",
            "Durabook",
            "Dynabook",
            "Eluktronics",
            "Eurocom",
            "Evoo",
            "Falcon Northwest",
            "Framework Computer",
            "Fujitsu",
            "Gateway",
            "Geo",
            "Getac",
            "Gigabyte",
            "Google",
            "Hasee",
            "Honor",
            "Huawei",
            "Hyundai Technology",
            "Lava International",
            "LG",
            "Machenike",
            "MALIBAL",
            "ro",
            "Medion",
            "Micro-Star International</a> (MSi)",
            "Microsoft",
            "tr",
            "Multilaser",
            "NEC",
            "Nokia",
            "Obsidian-PC",
            "Optima",
            "Origin PC",
            "OverPowered",
            "Panasonic",
            "Packard Bell",
            "Positivo",
            "Purism",
            "Razer",
            "Realme",
            "Clevo",
            "Samsung",
            "System76",
            "Tsinghua Tongfang",
            "UMAX",
            "VAIO",
            "Vastking",
            "Velocity Micro",
            "VIT",
            "Walmart",
            "Walton",
            "Xiaomi",
            "Xolo",
            "Zeuslap",
            "Zyrex",
        ];
        foreach ($data as $getdata) {
            LaptopBrand::create([
                "name"=> $getdata
            ]);
        }
    }
}