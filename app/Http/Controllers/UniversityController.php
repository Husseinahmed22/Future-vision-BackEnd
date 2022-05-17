<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\universities;
use App\Model\Collage;


class UniversityController extends Controller
{
    public function list()
    {
        return universities::all();
    }

}
