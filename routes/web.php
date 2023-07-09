<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;

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
    return view('pages/title');
});

Route::get('/title', function () {
    return view('pages/title');
})->name('title');

Route::get('/enter', function () {
    return view('pages/enter');
})->name('enter');

Route::get('/list', [HistoryController::class, 'display']) -> name('list');

Route::get('/show', function () {
    return view('pages/show');
})->name('show');

Route::post('/save', [HistoryController::class, 'save']) -> name('save');


