<?php

namespace Database\Seeders;

use App\Models\BikeMake;
use Illuminate\Database\Seeder;

class BikeMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bikemakeName = [
            "Popular Make",
            "Honda",
            "Yamaha",
            "United",
            "Suzuki",
            "Road Prince",
            "Others",
            "Benelli",
            "BMW",
            "Classic",
            "Crown",
            "Ducati",
            "Eagle",
            "Excel",
            "Ghani",
            "Habib",
            "Harley Davidson",
            "Hi Speed",
            "Honda",
            "Kawasaki",
            "Loncin",
            "Metro",
            "Pak Hero",
            "Power",
            "Ravi",
            "Road Prince",
            "Sohrab",
            "Sports & Heavy Bikes",
            "Super Asia",
            "Super Power",
            "Super Star",
            "Suzuki",
            "Tekken",
            "Union Star",
            "Unique",
            "United",
            "VESPA",
            "Yamaha",
            "Zongshen",
            "ZXMCO",
            "Other Brands",
        ];
        foreach ($bikemakeName as $getbikemakeName) {
            BikeMake::create(
              [
                  "name"=> $getbikemakeName,
              ]
            );
        }
    }
}