<?php

namespace Database\Seeders;

use App\Models\Sorta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SortaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO: dodaj deskripcije i slike

        Sorta::create([
            'kind' => 'Bluecrop',
            'description' => '...',
            'average_fruit_size' => 1.8,
            'average_fertility' => 8,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Duke',
            'description' => '...',
            'average_fruit_size' => 1.75,
            'average_fertility' => 7,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Legacy',
            'description' => '...',
            'average_fruit_size' => 2,
            'average_fertility' => 10,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Chandler',
            'description' => '...',
            'average_fruit_size' => 2.5,
            'average_fertility' => 6,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Elliott',
            'description' => '...',
            'average_fruit_size' => 1.6,
            'average_fertility' => 7.5,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Brigitta',
            'description' => '...',
            'average_fruit_size' => 2.05,
            'average_fertility' => 1.4,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Sunshine Blue',
            'description' => '...',
            'average_fruit_size' => 1.4,
            'average_fertility' => 5,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Top Hat',
            'description' => '...',
            'average_fruit_size' => 1.25,
            'average_fertility' => 4,
            'image' => 'default.jpg',
        ]);

        Sorta::create([
            'kind' => 'Aurora',
            'description' => '...',
            'average_fruit_size' => 2,
            'average_fertility' => 8,
            'image' => 'default.jpg',
        ]);
    }
}
