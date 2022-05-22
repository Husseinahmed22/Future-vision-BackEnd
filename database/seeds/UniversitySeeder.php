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
            'name'  => 'Nahda',
            'location' => 'Beni Suef',
            'university_image'=> 'Nahda-University.jpg',
        ]);

        universities::create([
            'name'  => 'French',
            'location' => 'El-Sherouk city',
            'university_image'=> 'French-University.jpg',
        ]);

        universities::create([
            'name'  => 'Nile',
            'location' => 'Giza',
            'university_image'=> 'Nile-University.jpg',

        ]);

        universities::create([
            'name'  => 'New Mansoura',
            'location' => 'New Mansoura',
            'university_image'=> '../UniPics/New-Mansoura-University.png',
        ]);

        universities::create([
            'name'  => 'Pharos',
            'location' => 'Alexandria',
            'university_image'=> '../UniPics/Pharos-University.jpg',
        ]);

        universities::create([
            'name'  => 'Sinai',
            'location' => 'Sinai',
            'university_image'=> '../UniPics/Sinai-University.jpg',

        ]);


        universities::create([
            'name'  => 'MTI',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/MTI-University.jpg',
        ]);


        universities::create([
            'name'  => 'BUE',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/BUE-University.jpg',

        ]);


        universities::create([
            'name'  => 'ACU',
            'location' => 'October City',
            'university_image'=> '../UniPics/ACU-University.jpg',

        ]);


        universities::create([
            'name'  => 'Misr',
            'location' => 'October City',
            'university_image'=> '../UniPics/Misr-University.jpg',

        ]);


        universities::create([
            'name'  => 'MSA',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/MSA-University.jpg',
        ]);


        universities::create([
            'name'  => 'October 6',
            'location' => 'October City',
            'university_image'=> '../UniPics/October-6-University.jpg',

        ]);


        universities::create([
            'name'  => 'Delta',
            'location' => 'Mansoura',
            'university_image'=> '../UniPics/Delta-University.png',

        ]);


        universities::create([
            'name'  => 'Egyptian',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Egyptian-Chinese.jpg',

        ]);


        universities::create([
            'name'  => 'Horus',
            'location' => 'New Damietta',
            'university_image'=> '../UniPics/Horus-University.jpg',

        ]);


        universities::create([
            'name'  => 'Egyptian Russian',
            'location' => ' Badr City',
            'university_image'=> '../UniPics/Egyptian-Russian.jpg',

        ]);


        universities::create([
            'name'  => 'Future',
            'location' => 'New Cairo',
            'university_image'=> '../UniPics/Future-University.jpg',

        ]);


        universities::create([
            'name'  => 'Heliopolis',
            'location' => 'El Salam City',
            'university_image'=> '../UniPics/Heliopolis-University.jpg',

        ]);


        universities::create([
            'name'  => 'Egyptian E-learning',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Egyptian-E-learning.jpg',

        ]);


        universities::create([
            'name'  => 'Badr',
            'location' => 'Cairo',
            'university_image'=> '../UniPics/Badr-University.jpg',

        ]);

        universities::create([
            'name'  => 'Galala',
            'location' => 'Suez',
            'university_image'=> '../UniPics/Galala-University.png',

        ]);

        universities::create([
            'name'  => 'Al-Alamein',
            'location' => 'New Mansoura',
            'university_image'=> '../UniPics/Al-Alamein-International.jpeg',

        ]);

        universities::create([
            'name'  => 'King',
            'location' => 'Sinai',
            'university_image'=> '../UniPics/King-Salman.jpg',

        ]);

        universities::create([
            'name'  => 'Sphinx',
            'location' => 'New Assiut City',
            'university_image'=> '../UniPics/Sphinx.jpg',

        ]);

        universities::create([
            'name'  => 'Merit',
            'location' => 'Sohag',
            'university_image'=> '../UniPics/merit.jpeg',

        ]);

        universities::create([
            'name'  => 'Al-Salam',
            'location' => 'Gharbia',
            'university_image'=> '../UniPics/Al-Salam.jpg',

        ]);

        universities::create([
            'name'  => 'New Giza',
            'location' => 'New Giza',
            'university_image'=> '../UniPics/New-Giza-University.jpg',

        ]);

        universities::create([
            'name'  => 'Deraya',
            'location' => 'New Minya',
            'university_image'=> '../UniPics/Deraya-University.jpg',

        ]);

        universities::create([
            'name'  => 'MIU',
            'location' => 'Qalyubiyya',
            'university_image'=> '../UniPics/MIU-University.jpg',

        ]);

        universities::create([
            'name'  => 'GUC',
            'location' => 'New Cairo',
            'university_image'=> '../UniPics/GUC-University.jpg',

        ]);


        
    }
}
