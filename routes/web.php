<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExampleController;
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

Route::get('/', [UserController::class, "showCorrectHomepage"]);

Route::get('/about', [ExampleController::class, "aboutPage"]);

Route::get('/contact', [ExampleController::class, "contact"]);

Route::get('/links', [ExampleController::class, "links"]);

Route::post('/register', [UserController::class, "register"]);
Route::post('/login', [UserController::class, "login"]);