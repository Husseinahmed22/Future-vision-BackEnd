<?php

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
         $this->call(CollageSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(OptionsSeeder::class);
        $this->call(PivotTableSeeder::class);




    }
}
