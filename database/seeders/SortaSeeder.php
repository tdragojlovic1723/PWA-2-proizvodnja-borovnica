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
        Sorta::create([
            'kind' => 'Bluecrop',
            'description' => 'Bluecrop je jedna od najpoznatijih i najčešće uzgajanih sorti visokožbunaste borovnice. Plodovi su krupni, svetloplavi i veoma ukusni, sa blagom kiselošću. Biljka je izuzetno otporna i prilagođena raznim klimatskim uslovima. Daje visok prinos i sazreva sredinom sezone. Pogodna je i za komercijalnu proizvodnju i za amaterske voćnjake.',
            'average_fruit_size' => 1.8,
            'average_fertility' => 8,
            'image' => 'bluecrop.jpg',
        ]);

        Sorta::create([
            'kind' => 'Duke',
            'description' => 'Duke je rana sorta borovnice poznata po svom ranom sazrevanju i visokom prinosu. Plodovi su čvrsti, ujednačene veličine i imaju blag, prijatan ukus. Biljka je snažnog rasta i dobro podnosi niske temperature. Zbog ranog sazrevanja, idealna je za tržišta koja traže borovnicu na početku sezone. Pogodna je i za ručnu i za mehaničku berbu.',
            'average_fruit_size' => 1.75,
            'average_fertility' => 7,
            'image' => 'duke.jpg',
        ]);

        Sorta::create([
            'kind' => 'Legacy',
            'description' => 'Legacy je kasna sorta borovnice koja daje kvalitetne i slatke plodove čak i krajem sezone. Plodovi su srednje do krupne veličine, izuzetno aromatični i pogodni za sveže konzumiranje. Biljka ima snažan rast i odličnu otpornost na bolesti. Poznata je po dugom periodu berbe i produženoj svežini plodova nakon branja. Dobro uspeva u toplijim krajevima.',
            'average_fruit_size' => 2,
            'average_fertility' => 10,
            'image' => 'legacy.jpg',
        ]);

        Sorta::create([
            'kind' => 'Chandler',
            'description' => 'Chandler je sorta poznata po izuzetno krupnim plodovima, koji mogu biti najveći među borovnicama. Sazreva tokom dužeg vremenskog perioda, što omogućava produženu berbu. Plodovi su slatki, blago aromatični i pogodni za konzumaciju u svežem stanju. Biljka je bujna, ali traži dobru negu i pravilnu rezidbu. Idealan je izbor za one koji žele impresivne plodove.',
            'average_fruit_size' => 2.5,
            'average_fertility' => 6,
            'image' => 'chandler.jpg',
        ]);

        Sorta::create([
            'kind' => 'Elliott',
            'description' => 'Elliott je kasna sorta borovnice, poznata po dugom periodu zrenja i produženoj svežini plodova. Plodovi su srednje veličine, čvrsti i blago kiselkasti. Biljka je otporna na bolesti i hladnoću, što je čini pogodnom za severnije krajeve. Sazreva krajem sezone, produžavajući vreme dostupnosti svežih borovnica. Pogodna je i za skladištenje i transport.',
            'average_fruit_size' => 1.6,
            'average_fertility' => 7.5,
            'image' => 'elliott.jpg',
        ]);

        Sorta::create([
            'kind' => 'Brigitta',
            'description' => 'Brigitta je srednje kasna sorta sa plodovima odličnog kvaliteta i izuzetne čvrstoće. Plodovi su svetloplavi, krupni i pogodni za transport i duže čuvanje. Biljka je snažnog rasta i daje stabilan prinos. Veoma je popularna u komercijalnoj proizvodnji zbog dobrog ukusa i dugotrajnosti ploda. Dobro podnosi različite uslove gajenja.',
            'average_fruit_size' => 2.05,
            'average_fertility' => 1.4,
            'image' => 'brigitta.jpg',
        ]);

        Sorta::create([
            'kind' => 'Sunshine Blue',
            'description' => 'Sunshine Blue je kompaktna, niskorastuća sorta pogodna za uzgoj u manjim prostorima i čak u saksijama. Plodovi su sitniji, ali vrlo aromatični i slatki. Biljka je zimzelena i otporna na blage mrazeve, pa je pogodna za toplije klime. Cveta bogato i dekorativna je, što je čini idealnom i kao ukrasna biljka. Ne zahteva mnogo prostora ni održavanja.',
            'average_fruit_size' => 1.4,
            'average_fertility' => 5,
            'image' => 'sunshine_blue.jpg',
        ]);

        Sorta::create([
            'kind' => 'Top Hat',
            'description' => 'Top Hat je patuljasta sorta borovnice, idealna za uzgoj u saksijama i na terasama. Plodovi su sitniji, ali ukusni i slatki. Biljka je vrlo kompaktna i dekorativna, često korišćena u pejzažnoj hortikulturi. Dobro podnosi hladnoću i jednostavna je za održavanje. Idealan je izbor za hobiste i urbane baštovane.',
            'average_fruit_size' => 1.25,
            'average_fertility' => 4,
            'image' => 'top_hat.jpg',
        ]);

        Sorta::create([
            'kind' => 'Aurora',
            'description' => 'Aurora je vrlo kasna sorta koja sazreva krajem avgusta ili početkom septembra, produžavajući sezonu berbe. Plodovi su krupni, čvrsti i aromatični, sa slatkastim ukusom. Biljka je snažna i otporna na bolesti i niske temperature. Pogodna je za uzgoj u krajevima sa kratkim letom i hladnijom klimom. Daje visok i ujednačen prinos.',
            'average_fruit_size' => 2,
            'average_fertility' => 8,
            'image' => 'aurora.jpg',
        ]);
    }
}
