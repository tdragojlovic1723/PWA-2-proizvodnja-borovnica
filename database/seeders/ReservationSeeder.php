<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            "user_id" => 4,
            "sorta_id" => 1,
            "kilos_reserved" => 120,
            "date_reserved" => "2024-05-15",
        ]);

        Reservation::create([
            "user_id" => 4,
            "sorta_id" => 5,
            "kilos_reserved" => 40,
            "date_reserved" => "2024-05-15",
        ]);

        Reservation::create([
            "user_id" => 5,
            "sorta_id" => 9,
            "kilos_reserved" => 20,
            "date_reserved" => "2023-09-20",
        ]);

        Reservation::create([
            "user_id" => 5,
            "sorta_id" => 7,
            "kilos_reserved" => 20,
            "date_reserved" => "2023-04-23",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 2,
            "kilos_reserved" => 90,
            "date_reserved" => "2023-02-02",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 7,
            "kilos_reserved" => 190,
            "date_reserved" => "2023-05-02",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 5,
            "kilos_reserved" => 270,
            "date_reserved" => "2024-02-05",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 1,
            "kilos_reserved" => 500,
            "date_reserved" => "2022-01-14",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 6,
            "kilos_reserved" => 250,
            "date_reserved" => "2024-05-23",
        ]);

        Reservation::create([
            "user_id" => 4,
            "sorta_id" => 9,
            "kilos_reserved" => 333,
            "date_reserved" => "2024-08-23",
        ]);

        Reservation::create([
            "user_id" => 5,
            "sorta_id" => 9,
            "kilos_reserved" => 550,
            "date_reserved" => "2024-08-23",
        ]);

        Reservation::create([
            "user_id" => 3,
            "sorta_id" => 2,
            "kilos_reserved" => 50,
            "date_reserved" => "2024-11-23",
        ]);
    }
}
