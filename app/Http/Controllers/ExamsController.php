<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Exam;
use App\Http\Resources\ExamResource;
use App\Model\Collage;
use App\Question;
use App\Result;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return response()->json($exams);
    }
    public function show($id)
    {
        $exam = Exam::find($id);
        if ($exam) {
            $questions = Question::where('exam_id', $id)->get();
            return response()->json(ExamResource::collection($questions));
        }
        return response()->json('This Exam Is Not Available Yet!');
    }
    public function examAnswers(Request $request)
    {
        $user = auth('sanctum')->user();
        $answers = $request->answers;
        $results  = 0;
        $final_collage = '';
        if ($user) {
            foreach ($answers as $answer) {
                if (!empty($answer['question_id']) && !empty($answer['answer'])) {
                    Answer::insert([
                        'user_id'     => $user->id,
                        'question_id' => $answer['question_id'],
                        'answer'      => $answer['answer']
                    ]);
                    $question = Question::find($answer['question_id']);
                    if ($question) {
                        $correct_answer = '';
                        foreach (json_decode($question->answers) as $key => $data) {
                            if ($data) $correct_answer = $key;
                        }
                        if ($answer['answer'] == $correct_answer) {
                            Result::insert([
                                'user_id'    => $user->id,
                                'exam_id'    => $question->exam_id,
                                'collage_id' => $question->collage_id,
                                'result'     => 1,
                            ]);
                        }
                    }
                }
            }
            $collages = Collage::get();
            $results_infos = [];
            foreach ($collages as $collage) {
                $result = Result::where([
                    'result' => 1,
                    'user_id' => $user->id,
                    'collage_id' => $collage->id
                ])->sum('result');

                $results_infos[$collage->name] = $result;
            }
            $final_collage = [
                max($results_infos), 
                array_search(max($results_infos), $results_infos)
            ];
            return response()->json($final_collage);
        }
    }
}
