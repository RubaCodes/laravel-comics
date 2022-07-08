<?php

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
    $comics = config('comics');
    return view('homepage', compact('comics'));
});

Route::get('comic/{id}', function ($id) {
    //prendo comics
    $comics = config('comics');

    if ($id >= count($comics)) {
        abort('404');
    }
    //seleziono il comic specifico
    $prodotto = $comics[$id];
    // ritorno il template comic e passo il comic
    return view('comic', compact('prodotto'));
})->name('comic');
