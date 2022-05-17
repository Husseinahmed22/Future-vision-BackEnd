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
            'university_image'=> '../UniPics/Nahda-University.jpg',
        ]);

        universities::create([
            'name'  => 'French University',
            'location' => 'El-Sherouk city',
            'university_image'=> '../UniPics/French-University.jpg',
        ]);

        universities::create([
            'name'  => 'Nile University',
            'location' => 'Giza',
            'university_image'=> '../UniPics/Nile-University.jpg',

        ]);

        universities::create([
            'name'  => 'New Mansoura University',
            'location' => 'New Mansoura',
            'university_image'=> '../UniPics/New-Mansoura-University.png',
        ]);

        universities::create([
            'name'  => 'Pharos University',
            'location' => 'Alexandria',
            'university_image'=> '../UniPics/Pharos-University.jpg',
        ]);

        universities::create([
            'name'  => 'Sinai University',
            'location' => 'Sinai',
            'university_image'=> '../UniPics/Sinai-University.jpg',

        ]);


        universities::create([
            'name'  => 'MTI University',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/MTI-University.jpg',
        ]);


        universities::create([
            'name'  => 'BUE University',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/BUE-University.jpg',

        ]);


        universities::create([
            'name'  => 'ACU University',
            'location' => 'October City',
            'university_image'=> '../UniPics/ACU-University.jpg',

        ]);


        universities::create([
            'name'  => 'Misr University',
            'location' => 'October City',
            'university_image'=> '../UniPics/Misr-University.jpg',

        ]);


        universities::create([
            'name'  => 'MSA University',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/MSA-University.jpg',
        ]);


        universities::create([
            'name'  => 'October 6 University',
            'location' => 'October City',
            'university_image'=> '../UniPics/October-6-University.jpg',

        ]);


        universities::create([
            'name'  => 'Delta University',
            'location' => 'Mansoura',
            'university_image'=> '../UniPics/Delta-University.png',

        ]);


        universities::create([
            'name'  => 'Egyptian Chinese',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Egyptian-Chinese.jpg',

        ]);


        universities::create([
            'name'  => 'Horus University',
            'location' => 'New Damietta',
            'university_image'=> '../UniPics/Horus-University.jpg',

        ]);


        universities::create([
            'name'  => 'Egyptian Russian',
            'location' => ' Badr City',
            'university_image'=> '../UniPics/Egyptian-Russian.jpg',

        ]);


        universities::create([
            'name'  => 'Future University',
            'location' => 'New Cairo',
            'university_image'=> '../UniPics/Future-University.jpg',

        ]);


        universities::create([
            'name'  => 'Heliopolis University',
            'location' => 'El Salam City',
            'university_image'=> '../UniPics/Heliopolis-University.jpg',

        ]);


        universities::create([
            'name'  => 'Egyptian E-learning',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Egyptian-E-learning.jpg',

        ]);


        universities::create([
            'name'  => 'Badr University',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Badr-University.jpg',

        ]);

        universities::create([
            'name'  => 'Galala University',
            'location' => 'Suez',
            'university_image'=> '../UniPics/Galala-University.png',

        ]);

        universities::create([
            'name'  => 'Al-Alamein International',
            'location' => 'New Mansoura',
            'university_image'=> '../UniPics/Al-Alamein-International.jpeg',

        ]);

        universities::create([
            'name'  => 'King Salman',
            'location' => 'Sinai',
            'university_image'=> '../UniPics/King-Salman.jpg',

        ]);

        universities::create([
            'name'  => 'Sphinx University',
            'location' => 'New Assiut City',
            'university_image'=> '../UniPics/Sphinx.jpg',

        ]);

        universities::create([
            'name'  => 'Merit University',
            'location' => 'Sohag',
            'university_image'=> '../UniPics/merit.jpeg',

        ]);

        universities::create([
            'name'  => 'Al-Salam University',
            'location' => 'Gharbia',
            'university_image'=> '../UniPics/Al-Salam.jpg',

        ]);

        universities::create([
            'name'  => 'New Giza University',
            'location' => 'New Giza',
            'university_image'=> '../UniPics/New-Giza-University.jpg',

        ]);

        universities::create([
            'name'  => 'Deraya University',
            'location' => 'New Minya',
            'university_image'=> '../UniPics/Deraya-University.jpg',

        ]);

        universities::create([
            'name'  => 'MIU University',
            'location' => 'Qalyubiyya',
            'university_image'=> '../UniPics/MIU-University.jpg',

        ]);

        universities::create([
            'name'  => 'GUC University',
            'location' => 'New Cairo',
            'university_image'=> '../UniPics/GUC-University.jpg',

        ]);


        
    }
}
