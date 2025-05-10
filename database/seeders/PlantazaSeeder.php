<?php

namespace Database\Seeders;

use App\Models\Plantaza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plantaza::create([
            'name' => 'Blueberry Valley',
            'country' => 'Srbija',
            'city' => 'Čačak',
            'surface' => 12.5,
        ]);

        Plantaza::create([
            'name' => 'Fruška Berry Farm',
            'country' => 'Srbija',
            'city' => 'Novi Sad',
            'surface' => 8,
        ]);

        Plantaza::create([
            'name' => 'Zlatarska Borovnica',
            'country' => 'Srbija',
            'city' => 'Nova Varoš',
            'surface' => 15.2,
        ]);

        Plantaza::create([
            'name' => 'Dunav Blue Farm',
            'country' => 'Srbija',
            'city' => 'Sremska Mitrovica',
            'surface' => 10,
        ]);

        Plantaza::create([
            'name' => 'Berry Bliss',
            'country' => 'BiH',
            'city' => 'Banja Luka',
            'surface' => 15.7,
        ]);

        Plantaza::create([
            'name' => 'Sunny Berries Farm',
            'country' => 'Hrvatska',
            'city' => 'Rijeka',
            'surface' => 7.8,
        ]);

        Plantaza::create([
            'name' => 'Northern Harvest',
            'country' => 'Slovenija',
            'city' => 'Ljubljana',
            'surface' => 12.2,
        ]);

        Plantaza::create([
            'name' => 'FreshBerry Fields',
            'country' => 'Srbija',
            'city' => 'Niš',
            'surface' => 6.3,
        ]);
    }
}
