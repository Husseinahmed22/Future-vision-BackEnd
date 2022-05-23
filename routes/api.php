<?php

use App\Http\Controllers\ExamsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UniversityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::group([

//         'prefix' => 'auth'

// ], function() {

//     Route::post('login', 'UserController@login');
//     Route::post('register', 'UserController@register');
// });



Route::middleware('_auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('list', [UniversityController::class, 'list']);
Route::get('GetQuestion', 'QuestionsController@GetQuestion');
Route::get('GetOptions', 'OptionsController@GetOptions');
Route::get('create', [UniversityController::class, 'create']);
Route::get('pivotTable', [UniversityController::class, 'pivotTable']);

Route::middleware('auth:api')->post('logout', [UserController::class, 'logout']);

Route::get('Collages' , [UniversityController::class, 'Getcollages']);
Route::post('UploadProfilePic' , [UserController::class, 'UploadProfilePic']);

Route::get('exams',[ExamsController::class,'index']);
Route::get('exams/{id}',[ExamsController::class,'show']);
Route::post('exam-answers',[ExamsController::class,'examAnswers']);