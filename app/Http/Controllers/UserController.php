<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Dotenv\Validator;
use App\User;

class UserController extends Controller
{
    public function register(RegisterRequest $req)
    {
        $data = $req;
        $data['birth'] = implode('-', array_reverse(explode('/', $req->birth)));
        $data['password'] = bcrypt($req->password);
        $user = User::create($req->toArray());
        if ($user)
            return (['Message' => 'User has been registerd']);
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required|string|'
        ]);

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json(['Message' => 'Email or Password is Not Matched'], 401);
        return response()->json([
            'user' => $req->user(),
            'token' => $req->user()->createToken('test')->plainTextToken
        ], 200);
    }


    public function logout(Request $req)
    {
        $token = $req->user()->token();
        $token->revoke();
        $response = ['Message' => 'You Have successfully logout!!'];

        return response($response, 200);
    }
}
