<?php

use App\Http\Controllers\CastController;
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
    return view('templates.master');
});

Route::get('/table', function () {
    return view('tables/table');
});

Route::get('/datatable', function () {
    return view('tables/datatables');
});


Route::resource('cast', CastController::class);