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

Route::get('/pages/title', function () {
    return view('pages/title');
})->name('title');

Route::get('/pages/enter', function () {
    return view('pages/enter');
})->name('enter');

Route::get('/pages/index', [HistoryController::class, 'index']) -> name('index');

Route::get('/pages/show', function () {
    return view('pages/show');
})->name('show');

Route::get('/pages/{history}', [HistoryController::class ,'show']);

Route::post('/pages/save', [HistoryController::class, 'save']) -> name('save');


