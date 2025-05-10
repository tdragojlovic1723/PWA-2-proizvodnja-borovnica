<?php

namespace Database\Seeders;

use App\Models\Berba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerbaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: dodaj summary tekst

        Berba::create([
            'date_harvested' => '2024-06-15',
            'summary' => '...',
            'grade' => 9,
            'kilos_harvested' => 1250,
            'sorta_id' => 3,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2024-07-02',
            'summary' => '...',
            'grade' => 7,
            'kilos_harvested' => 980,
            'sorta_id' => 1,
            'plantaza_id' => 5,
        ]);

        Berba::create([
            'date_harvested' => '2024-07-18',
            'summary' => '...',
            'grade' => 8,
            'kilos_harvested' => 870,
            'sorta_id' => 3,
            'plantaza_id' => 2,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-05',
            'summary' => '...',
            'grade' => 10,
            'kilos_harvested' => 1500,
            'sorta_id' => 2,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-20',
            'summary' => '...',
            'grade' => 6,
            'kilos_harvested' => 730,
            'sorta_id' => 1,
            'plantaza_id' => 3,
        ]);

        Berba::create([
            'date_harvested' => '2024-06-10',
            'summary' => '...',
            'grade' => 9.2,
            'kilos_harvested' => 1340,
            'sorta_id' => 7,
            'plantaza_id' => 7,
        ]);

        Berba::create([
            'date_harvested' => '2023-10-18',
            'summary' => '...',
            'grade' => 7.8,
            'kilos_harvested' => 980,
            'sorta_id' => 5,
            'plantaza_id' => 8,
        ]);

        Berba::create([
            'date_harvested' => '2025-03-05',
            'summary' => '...',
            'grade' => 8.5,
            'kilos_harvested' => 870,
            'sorta_id' => 8,
            'plantaza_id' => 3,
        ]);

        Berba::create([
            'date_harvested' => '2023-06-13',
            'summary' => '...',
            'grade' => 9.9,
            'kilos_harvested' => 1550,
            'sorta_id' => 3,
            'plantaza_id' => 2,
        ]);

        Berba::create([
            'date_harvested' => '2024-10-01',
            'summary' => '...',
            'grade' => 6.5,
            'kilos_harvested' => 720,
            'sorta_id' => 6,
            'plantaza_id' => 6,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-07',
            'summary' => '...',
            'grade' => 8,
            'kilos_harvested' => 1120,
            'sorta_id' => 2,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2023-09-01',
            'summary' => '...',
            'grade' => 7.2,
            'kilos_harvested' => 650,
            'sorta_id' => 1,
            'plantaza_id' => 6,
        ]);

        Berba::create([
            'date_harvested' => '2022-07-30',
            'summary' => '...',
            'grade' => 7.9,
            'kilos_harvested' => 890,
            'sorta_id' => 1,
            'plantaza_id' => 2,
        ]);
    }
}
