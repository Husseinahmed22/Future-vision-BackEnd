<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\universities;

class UniversityController extends Controller
{
    function list()
    {
        return universities::all();
    }
}
