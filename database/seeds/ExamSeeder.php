<?php

use App\Exam;
use App\Question;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exams = [
            'scientific' => [
                'questions' => [
                    [
                        'question' => 'How Are You',
                        'collage_id' => 1,
                        'answers' => json_encode([
                            'fine' => '',
                            'good' => '',
                            'verygood' => '',
                            'sad'  => 'true'
                        ])
                    ],
                    [
                        'question' => 'How old are you',
                        'collage_id' => 2,
                        'answers' => json_encode([
                            '15' => '',
                            '20' => '',
                            '25' => '',
                            '30'  => 'true'
                        ])
                    ],
                ]
            ],
            'literary'   => [
                'questions' => [
                    [
                        'question' => 'How Are You',
                        'collage_id' => 1,
                        'answers' => json_encode([
                            'fine' => '',
                            'good' => '',
                            'verygood' => '',
                            'sad'  => 'true'
                        ])
                    ],
                    [
                        'question' => 'How old are you',
                        'collage_id' => 2,
                        'answers' => json_encode([
                            '15' => '',
                            '20' => '',
                            '25' => '',
                            '30'  => 'true'
                        ])
                    ],
                ]
            ]
        ];
        foreach ($exams as $department =>  $exam) {
            $create_exam = Exam::create(['department' => $department]);
            if ($create_exam) {
                $final_questions = [];
                foreach ($exam as $questions) {
                    foreach($questions as $question){
                        $question['exam_id'] = $create_exam->id;
                        $final_questions[] = $question;
                    }
                }
                Question::insert($final_questions);
            }
        }
    }
}
