<?php

use App\Models\History1;
use App\Models\History2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;


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

// Main Menu
Route::get('/', function() {
    return view('/home');
});


// Profile Vico Lomar (USER 2)
Route::get('/vico-lomar/profile', function () {
    return view('/vico-lomar/profile',[
        "title" => "Profile",
        "username" => "Mr. Vico Lomar"
    ]);
});

Route::get('/vico-lomar/coffee', function () {
    return view('/vico-lomar/coffee',[
        "title" => "Coffee",
        "username" => "Mr. Vico Lomar"
    ]);
});

Route::get('/vico-lomar/transaction', [TransactionController::class, 'index2']);

// Profile Fei - Fei (USER 1)
Route::get('/fei-fei/profile2', function () {
    return view('/fei-fei/profile2',[
        "title" => "Profile",
        "username" => "Ms. Fei Fei Li"
    ]);
});

Route::get('/fei-fei/coffee2', function () {
    return view('/fei-fei/coffee2',[
        "title" => "Coffee",
        "username" => "Ms. Fei Fei Li"
    ]);
});

Route::get('/fei-fei/transaction2', [TransactionController::class, 'index']);