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
    return view('welcome');
});

Route::get('/product', function () {

    $busca = request('search');

    return view('product', ['busca' => $busca] );
});


Route::get('/produtos/{id}', function ($id) {
    return view('produtos', ['id' => $id]);
});
