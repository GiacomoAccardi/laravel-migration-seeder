<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\TrainController as TrainController;

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
    return view('layouts.app');
});

Route::get('/trains', [TrainController::class, 'index'])->name('show_trains');
