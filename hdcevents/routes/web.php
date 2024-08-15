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

use App\Http\Controllers\EvenController;

Route::get('/', [EvenController::class, 'index']);
Route::get('/events/create', [EvenController::class, 'create']);
Route::get('/events/{id}', [EvenController::class, 'show']);
route::post('/events', [EvenController::class, 'store']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [EvenController::class, 'dashboard'])->middleware('auth');

