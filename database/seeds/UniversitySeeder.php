<?php
use App\Model\universities;
use App\User;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        universities::create([
            'name'  => 'Nahda University',
            'location' => 'Beni Suef',
        ]);

        universities::create([
            'name'  => 'French University',
            'location' => 'El-Sherouk city',
        ]);

        universities::create([
            'name'  => 'Nile University',
            'location' => 'Giza',
        ]);

        universities::create([
            'name'  => 'New Mansoura University',
            'location' => 'New Mansoura',
        ]);

        universities::create([
            'name'  => 'Pharos University',
            'location' => 'Alexandria',
        ]);

        universities::create([
            'name'  => 'Sinai University',
            'location' => 'Sinai',
        ]);


        universities::create([
            'name'  => 'MTI University',
            'location' => 'Cairo',
        ]);


        universities::create([
            'name'  => 'BUE University',
            'location' => 'Cairo',
        ]);


        universities::create([
            'name'  => 'ACU University',
            'location' => 'October City',
        ]);


        universities::create([
            'name'  => 'Misr University',
            'location' => 'October City',
        ]);


        universities::create([
            'name'  => 'MSA University',
            'location' => 'Cairo',
        ]);


        universities::create([
            'name'  => 'October 6 University',
            'location' => 'October City',
        ]);


        universities::create([
            'name'  => 'Delta University',
            'location' => 'Mansoura',
        ]);


        universities::create([
            'name'  => 'Egyptian Chinese',
            'location' => 'Cairo',
        ]);


        universities::create([
            'name'  => 'Horus University',
            'location' => 'New Damietta',
        ]);


        universities::create([
            'name'  => 'Egyptian Russian',
            'location' => ' Badr City',
        ]);


        universities::create([
            'name'  => 'Future University',
            'location' => 'New Cairo',
        ]);


        universities::create([
            'name'  => 'Heliopolis University',
            'location' => 'El Salam City',
        ]);


        universities::create([
            'name'  => 'Egyptian E-learning',
            'location' => 'Cairo',
        ]);


        universities::create([
            'name'  => 'Badr University',
            'location' => 'Cairo',
        ]);

        universities::create([
            'name'  => 'Galala University',
            'location' => 'Suez',
        ]);

        universities::create([
            'name'  => 'Al-Alamein International',
            'location' => 'New Mansoura',
        ]);

        universities::create([
            'name'  => 'King Salman',
            'location' => 'Sinai',
        ]);

        universities::create([
            'name'  => 'Sphinx University',
            'location' => 'New Assiut City',
        ]);

        universities::create([
            'name'  => 'Merit University',
            'location' => 'Sohag',
        ]);

        universities::create([
            'name'  => 'Al-Salam University',
            'location' => 'Gharbia',
        ]);

        universities::create([
            'name'  => 'New Giza University',
            'location' => 'New Giza',
        ]);

        universities::create([
            'name'  => 'Deraya University',
            'location' => 'New Minya',
        ]);

        universities::create([
            'name'  => 'MIU University',
            'location' => 'Qalyubiyya',
        ]);

        universities::create([
            'name'  => 'GUC University',
            'location' => 'New Cairo',
        ]);


        
    }
}
