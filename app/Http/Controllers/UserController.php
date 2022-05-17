<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
{


    function register(Request $req)

    {

        $req -> validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
        ]);

        $user = new User();

        // $user -> college_id = $req -> input('college_id');
        // $user -> uni_id = $req -> input('uni_id');
        $user -> name = $req -> input('name');
        $user -> email = $req -> input('email');
        $user -> password =Hash::make($req -> input('password'));
        $user -> img = $req -> input('img');
        $user -> location = $req -> input('location');
        $user -> birth = $req -> input('birth');
        $user -> department = $req -> input('department');
        $user -> arabicMark = $req -> input('arabicMark');
        $user -> physicsMark = $req -> input('physicsMark');
        $user -> mathMark = $req -> input('mathMark');
        $user -> chemistryMark = $req -> input('chemistryMark');
        $user -> englishMark = $req -> input('englishMark');
        $user -> totalPercentage = $req -> input('totalPercentage');
        $user -> save();
        
        return response()->json(['Message' => 'User has been registerd']);
    }




    function login(Request $req)
    {
        $req -> validate([
            'email' => 'required',
            'password' => 'required|string|'
        ]);

        $credentials = request(['email','password']);
        if(!Auth::attempt($credentials))
        {
            return response()->json(['Message' => 'Email or Password is Not Matched'], 401);
        }
        else
        
        {
            return response()->json( ['data' => [
                'user' => Auth::user(),
            ]],200);
    
        }
    

    }

}
