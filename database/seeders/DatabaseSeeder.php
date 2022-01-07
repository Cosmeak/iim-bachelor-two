<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Sector;
use App\Models\Country;
use App\Models\Diploma;
use App\Models\Softskill;
use App\Models\CompanySize;
use App\Models\ContractType;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Softskill::create(['label' => 'La prise de décision']);
        Softskill::create(['label' => 'La délégation']);
        Softskill::create(['label' => 'La facilitation']);
        Softskill::create(['label' => 'La supervision']);
        Softskill::create(['label' => 'Savoir écouter']);
        Softskill::create(['label' => 'Convaincre']);
        Softskill::create(['label' => 'Persuader']);
        Softskill::create(['label' => 'Négocier']);
        Softskill::create(['label' => 'Argumenter']);
        Softskill::create(['label' => 'Présenter']);

        Sector::create(['label' => 'Agriculture']);
        Sector::create(['label' => 'Animation']);
        Sector::create(['label' => 'Animation 2D/3D']);
        Sector::create(['label' => 'Art']);
        Sector::create(['label' => 'Beauté']);
        Sector::create(['label' => 'Bien-être']);
        Sector::create(['label' => 'Commerce']);
        Sector::create(['label' => 'Communication']);
        Sector::create(['label' => 'Comptabilité']);
        Sector::create(['label' => 'Culture']);
        Sector::create(['label' => 'Design']);
        Sector::create(['label' => 'Droit']);
        Sector::create(['label' => 'Environnement']);
        Sector::create(['label' => 'Finance']);
        Sector::create(['label' => 'Fonction publique']);
        Sector::create(['label' => 'Hôtellerie']);
        Sector::create(['label' => 'Image']);
        Sector::create(['label' => 'Informatique']);
        Sector::create(['label' => 'Ingénierie']);
        Sector::create(['label' => 'Langues']);
        Sector::create(['label' => 'Management']);
        Sector::create(['label' => 'Marketing']);
        Sector::create(['label' => 'Mode']);
        Sector::create(['label' => 'Santé']);
        Sector::create(['label' => 'Sciences']);
        Sector::create(['label' => 'Sc. Humaines']);
        Sector::create(['label' => 'Sc. Politique']);
        Sector::create(['label' => 'Sport']);
        Sector::create(['label' => 'Social']);
        Sector::create(['label' => 'Son']);
        Sector::create(['label' => 'Tourisme']);

        CompanySize::create(['label' => 'Micro']);
        CompanySize::create(['label' => 'TPE']);
        CompanySize::create(['label' => 'PE']);
        CompanySize::create(['label' => 'ME']);
        CompanySize::create(['label' => 'ETI']);
        CompanySize::create(['label' => 'GE']);
        CompanySize::create(['label' => 'TGE']);

        ContractType::create(['label' => 'CDI']);
        ContractType::create(['label' => 'CDD']);
        ContractType::create(['label' => 'ETT']);
        ContractType::create(['label' => 'Intérim']);
        ContractType::create(['label' => 'Stage']);
        ContractType::create(['label' => 'Alternance']);
        ContractType::create(['label' => 'Apprentissage']);

        Diploma::create(['label' => 'Bac']);
        Diploma::create(['label' => 'Bac +1']);
        Diploma::create(['label' => 'Bac +2']);
        Diploma::create(['label' => 'Bac +3']);
        Diploma::create(['label' => 'Bac +4']);
        Diploma::create(['label' => 'Master']);
        Diploma::create(['label' => 'Doctorat']);
        Diploma::create(['label' => 'CAP']);
        Diploma::create(['label' => 'BTS']);
        Diploma::create(['label' => 'DUT']);
        Diploma::create(['label' => 'BEP']);
        Diploma::create(['label' => 'BUST']);
        Diploma::create(['label' => 'DEUG']);

        Country::create(['label' => 'France']);
        Country::create(['label' => 'Espagne']);

        City::create(['label' => 'Paris']);
        City::create(['label' => 'Madrid']);

        
    }
}
