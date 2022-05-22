<?php

namespace App\Http\Controllers;

use App\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OptionsController extends Controller
{
    // public function GetOptions(Request $req)
    // {
    //     $options = Options::all();

    //     return $options;
    // }

    public function GetOptions(Request $req)
    {

        $options = DB::table('options')->where('question_id' , '4')->pluck('value');
 
            return response()->json($options);
        
    }
}
