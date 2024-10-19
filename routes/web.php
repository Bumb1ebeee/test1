<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MessageController::class, 'index']);
Route::post('/message', [MessageController::class, 'send']);

Route::get('/all_message', [MessageController::class, 'show']);

Route::post('/complaint', [MessageController::class, 'complaint']);
