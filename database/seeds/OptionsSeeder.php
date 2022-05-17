<?php
use App\Options;
use App\User;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Options::create([

            'value'=>'Yes',
            'is_correct'=>'1',
            'question_id'=>'1'

        ]);

        Options::create([

            'value'=>'No',
            'is_correct'=>'0',
            'question_id'=>'1'

        ]);

        /////////////////////////

        Options::create([

            'value'=>'Yes',
            'is_correct'=>'1',
            'question_id'=>'2'

        ]);

        Options::create([

            'value'=>'No',
            'is_correct'=>'0',
            'question_id'=>'2'

        ]);

        /////////////////////////////////

        Options::create([

            'value'=>'Yes',
            'is_correct'=>'1',
            'question_id'=>'3'

        ]);

        Options::create([

            'value'=>'No',
            'is_correct'=>'0',
            'question_id'=>'3'

        ]);

        ////////////////////////////////////


        
        Options::create([

            'value'=>'Put ice on it',
            'is_correct'=>'0',
            'question_id'=>'4'

        ]);

        Options::create([

            'value'=>'put it under running water',
            'is_correct'=>'1',
            'question_id'=>'4'

        ]);

        
        Options::create([

            'value'=>'wrap it in cotton',
            'is_correct'=>'0',
            'question_id'=>'4'

        ]);

        Options::create([

            'value'=>'leave it in the open air',
            'is_correct'=>'0',
            'question_id'=>'4'

        ]);

        //////////////////////////////////////////
        
    }
}
