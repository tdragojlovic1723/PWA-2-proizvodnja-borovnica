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
        Berba::create([
            'date_harvested' => '2024-06-15',
            'summary' => 'Berba je bila izuzetno uspešna. Plodovi su bili zdravi, krupni i ravnomerno sazreli. Vremenski uslovi su išli u prilog, pa je prinos premašio očekivanja.',
            'grade' => 9,
            'kilos_harvested' => 1250,
            'sorta_id' => 3,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2024-07-02',
            'summary' => 'Berba je prošla solidno, iako su određene sorte imale neujednačeno sazrevanje. Prinos je bio prosečan, ali kvalitet većine plodova zadovoljava.',
            'grade' => 7,
            'kilos_harvested' => 980,
            'sorta_id' => 1,
            'plantaza_id' => 5,
        ]);

        Berba::create([
            'date_harvested' => '2024-07-18',
            'summary' => 'Veoma dobra berba sa zrelim i sočnim plodovima. Iako je bilo nešto manjih oštećenja, ukupna ocena kvaliteta je visoka. Organizacija rada je bila efikasna.',
            'grade' => 8,
            'kilos_harvested' => 870,
            'sorta_id' => 3,
            'plantaza_id' => 2,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-05',
            'summary' => 'Izvanredna berba! Kvalitet plodova je vrhunski, bez ikakvih problema na terenu. Sve je teklo glatko i završeno u rekordnom roku.',
            'grade' => 10,
            'kilos_harvested' => 1500,
            'sorta_id' => 2,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-20',
            'summary' => 'Berba je naišla na poteškoće zbog nestabilnih vremenskih uslova. Deo roda je pretrpeo štetu, ali se ipak uspelo spasiti većinu plodova.',
            'grade' => 6,
            'kilos_harvested' => 730,
            'sorta_id' => 1,
            'plantaza_id' => 3,
        ]);

        Berba::create([
            'date_harvested' => '2024-06-10',
            'summary' => 'Uspešna berba uz izuzetnu saradnju tima. Plodovi su kvalitetni, sa minimalnim otpadom. Sve sorte su pokazale stabilan prinos.',
            'grade' => 9,
            'kilos_harvested' => 1340,
            'sorta_id' => 7,
            'plantaza_id' => 7,
        ]);

        Berba::create([
            'date_harvested' => '2023-10-18',
            'summary' => 'Berba je bila korektna. Iako su radnici bili angažovani maksimalno, deo plodova nije bio potpuno zreo, što je umanjilo ukupni utisak.',
            'grade' => 7,
            'kilos_harvested' => 980,
            'sorta_id' => 5,
            'plantaza_id' => 8,
        ]);

        Berba::create([
            'date_harvested' => '2025-03-05',
            'summary' => 'Kvalitetan urod i dobar balans između kvantiteta i kvaliteta. Berba je protekla bez većih problema i u skladu sa planom.',
            'grade' => 8,
            'kilos_harvested' => 870,
            'sorta_id' => 8,
            'plantaza_id' => 3,
        ]);

        Berba::create([
            'date_harvested' => '2023-06-13',
            'summary' => 'Berba je prošla skoro bez greške. Prinos je bio iznad proseka, a kvalitet plodova odličan. Tim je odradio posao veoma profesionalno.',
            'grade' => 9,
            'kilos_harvested' => 1550,
            'sorta_id' => 3,
            'plantaza_id' => 2,
        ]);

        Berba::create([
            'date_harvested' => '2024-10-01',
            'summary' => 'Problemi sa vremenskim uslovima i delimičnim kašnjenjem u branju doveli su do smanjenog kvaliteta. Ipak, deo roda je sačuvan.',
            'grade' => 6,
            'kilos_harvested' => 720,
            'sorta_id' => 6,
            'plantaza_id' => 6,
        ]);

        Berba::create([
            'date_harvested' => '2024-08-07',
            'summary' => 'Plodovi su bili u dobrom stanju, a berba organizovana efikasno. Iako je bilo sitnih poteškoća, krajnji rezultat je veoma dobar.',
            'grade' => 8,
            'kilos_harvested' => 1120,
            'sorta_id' => 2,
            'plantaza_id' => 4,
        ]);

        Berba::create([
            'date_harvested' => '2023-09-01',
            'summary' => 'Berba je bila prosečna, uz nešto slabiji prinos na određenim parcelama. Kvalitet plodova varira, ali je većina bila upotrebljiva.',
            'grade' => 7,
            'kilos_harvested' => 650,
            'sorta_id' => 1,
            'plantaza_id' => 6,
        ]);

        Berba::create([
            'date_harvested' => '2022-07-30',
            'summary' => 'Organizacija je bila na nivou, ali neujednačeno sazrevanje i manji broj radnika su usporili proces. Prinos i kvalitet su bili zadovoljavajući.',
            'grade' => 7,
            'kilos_harvested' => 890,
            'sorta_id' => 1,
            'plantaza_id' => 2,
        ]);
    }
}
