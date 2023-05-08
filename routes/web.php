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

    $colori = [
        'rosso',
        'blu',
        'giallo',
        'verde',
        'arancione',
        'porpora',
    ];

    $links = [
        'pagina1',
        'pagina2',
        'pagina3',

    ];

    return view('home', compact('colori', 'links'));
});


Route::get('/pagina1', function () {

    return view('pagina1');

})->name('pagina1');

Route::get('/pagina2', function () {

    return view('pagina2');

})->name('pagina2');

Route::get('/pagina3', function () {

    return view('pagina3');

})->name('pagina3');