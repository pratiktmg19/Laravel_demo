<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HtmlForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{name}', function ($name) { 

//     //return view("view name", "data")
//     return view("welcome", ['name' => $name]);
    
//     // return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });
Route::view('/', 'welcome');

// Or 
// Route::view("login", 'login');
    // Route for Controllers
// Route::get("path", "Conroller file");
// Route::view("users", 'users');

// Route::get("users", "Users@index");
// Route::get("users/{name}", [Users::class, 'index']);

// Route::get("users",[UsersController::class,'viewLoad']);

Route::post("users", [HtmlForm::class, 'getData']);

Route::view('login', 'htmlForm');

