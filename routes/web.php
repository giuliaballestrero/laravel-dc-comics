<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Guest\PageController as PageController;
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

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/', function() {
    return redirect('/home');
});

//Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
//Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

Route::resource('comics', ComicController::class);

