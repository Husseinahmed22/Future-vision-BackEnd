<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UploadProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Dotenv\Validator;
use App\User;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

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
            'password' => 'required|string|',
            'img' => 'nullable|image',
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

    public function UploadProfilePic(UploadProfileRequest $req)
    {
        if (auth('sanctum')->user()) {
            $user = User::find(auth('sanctum')->user()->id);
            if ($req->img) {
                $file_name = time() . '.' . $req->img->extension();
                $req->img->move(public_path('UniPics/' . $user->id . '/'),$file_name);
                $user->img = $file_name;
                $user['img'] = asset("UniPics/{$user->id}/{$user['img']}");
                return response()->json(['Status' => 'True', 'Message' => 'Profile Updated!', 'data' => $user]);
            }
            return response()->json(['Status' => 'False', 'Message' => 'Something Wants Wrong!', 'data' => []], 500);
        }
    }
}
