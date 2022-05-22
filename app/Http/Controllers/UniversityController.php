<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\universities;
use App\Model\Collage;
use Illuminate\Support\Facades\DB;


class UniversityController extends Controller
{
    public function list()
    {
        $universities = DB::table('universities')->get();

        return $universities;
    }

    public function Getcollages()
    {
        $collages = DB::table('collage_universities')->get();

             return $collages;
        }
    }


