<?php

use App\Http\Controllers\AuthorController;
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
        Route::get('/add', 'create')->name('add');
        Route::get('/{id}', 'show')->name('detail');
        Route::get('/edit/{id}', 'edit')->name('edit');

        Route::post('/create', 'store')->name('store');
        Route::post('/update/{id}', 'update')->name('update');
    });

Route::prefix('/penulis')
    ->name('authors.')
    ->controller(AuthorController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });
