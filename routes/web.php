<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/books')
    ->name('books.')
    ->controller(BookController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/{id}', 'show')->name('detail');
        Route::get('/edit/{id}', 'edit')->name('edit');
    });
