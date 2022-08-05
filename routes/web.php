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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'pagCreate']);
Route::get('/events/edit/{id}', [EventController::class, 'pagEdit']);
Route::get('/events/{id}', [EventController::class, 'pagShowOne']);
Route::get('/events/delete/{id}', [EventController::class, 'actionDelete']);

Route::post('/events', [EventController::class, 'actionStore']);

Route::put('/events/update/{id}', [EventController::class, 'actionUpdate']);
