<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;
use Illuminate\Support\Facades\DB;


class QuestionsController extends Controller
{

    public function GetQuestion(Request $req)
    {
        $quiz = Questions::all();

        return $quiz;
    }

    public function index()
    {
        $users = DB::table('users')->get();
 
    }


}
