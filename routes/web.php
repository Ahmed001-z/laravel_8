<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test2Controller;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix'=>'dashboard'],function (){
        Route::get('/', [test2Controller::class, 'index'])->name('dashboard');
        Route::get('/users/create', [UserController::class, 'create']);
        Route::get('/users/save', [UserController::class, 'store']);
    });
});



require __DIR__.'/auth.php';
