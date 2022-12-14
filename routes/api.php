<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TestController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('apis',ApiController::class);

Route::resource('students', ApiController::class);
// Route::get('students/{id}', 'ApiController@getStudent');
// Route::post('students, ApiController::class,'createStudent');
// Route::put('students/{id}', 'ApiController@updateStudent');
// Route::delete('students/{id}','ApiController@deleteStudent');
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/logout',[AuthController::class,'logout']);
Route::get('/index',[AuthController::class,'index']);
// Route::get('/employee',[EmployeeController::class,'employee']);
Route::resource('employees', EmployeeController::class);
Route::resource('student',StudentController::class);
Route::resource('entries',EntryController::class);
Route::resource('sales',SaleController::class);

// Route::post('/post', [PostController::class, 'store']);
Route::resource('posts',PostController::class);
Route::resource('tests',TestController::class);


