<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FirstController::class)->group(function () {

    Route::get('/','show')->name('home');

    Route::get('/alluser/{id}','allUser')->name('all-user');
    
    Route::get('/newUser','newUser')->name('newUser');
    Route::POST('/addUser','addUser')->name('addUser');
    
    Route::get('/update/{id}','updateField')->name('updateField');
    Route::POST('/updateUser/{id}','updateUserData')->name('updateUserData');
    
    Route::get('/deleteUser/{id}','deleteUser')->name('deleteUser');
    
    Route::get('/deleteAllUser','deleteAllUser')->name('deleteAllUser');
    
    
});
// Route::view('/newUser','addUser');


Route::fallback(function () {
    return " <h1>This is wrong route you have declared,</h1>"; // You can customize this view as needed
});