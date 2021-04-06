<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huis')->insert([
            'name' => "Tom's Huis",
            'street' => "Reijerskoop",
            'number' => "34",
            'postal_code' => "2771 BP",
            'place' => "Boskoop"
        ]);

        DB::table('huis')->insert([
            'name' => "Dogukan's Huis",
            'street' => "Salviahof",
            'number' => "14",
            'postal_code' => "3073 JZ",
            'place' => "Rotterdam"
        ]);

        DB::table('huis')->insert([
            'name' => "Dennis's Huis",
            'street' => "Dillenburgdreef",
            'number' => "10",
            'postal_code' => "2224 AC",
            'place' => "Katwijk aan Zee"
        ]);

        DB::table('huis')->insert([
            'name' => "Ebubekir's Huis",
            'street' => "Aleidisstraat",
            'number' => "79E",
            'postal_code' => "3021 SG",
            'place' => "Rotterdam"
        ]);

        DB::table('huis')->insert([
            'name' => "Hasan's Huis",
            'street' => "Pleretstraat",
            'number' => "251",
            'postal_code' => "3034 JH",
            'place' => "Rotterdam"
        ]);

        DB::table('huis')->insert([
            'name' => "Gerrit's Huis",
            'street' => "Sandelingstraat",
            'number' => "88",
            'postal_code' => "3073 AT",
            'place' => "Rotterdam"
        ]);

        DB::table('huis')->insert([
            'name' => "Brenda's Huis",
            'street' => "Gansstraat",
            'number' => "20B",
            'postal_code' => "2802 CW",
            'place' => "Gouda"
        ]);

        DB::table('huis')->insert([
            'name' => "Tijn's Huis",
            'street' => "Poelweg",
            'number' => "11",
            'postal_code' => "2362 LK",
            'place' => "Warmond"
        ]);

        DB::table('huis')->insert([
            'name' => "Remy's Huis",
            'street' => "Kelvinsstraat",
            'number' => "51",
            'postal_code' => "2723 RJ",
            'place' => "Zoetermeer"
        ]);
    }
}