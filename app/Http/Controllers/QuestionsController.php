<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    function Questionlist()
    {
        return Questions::all();
    }
}
