<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test', [MyFirstController::class,'showText']);
// Route::get('listvehicles', [MyFirstController::class,'showVehicles']);
Route::get('/vehicles', [MyFirstController::class, 'index']);
Route::get('/vehicles/create', [MyFirstController::class, 'create']);
Route::post('/vehicles', [MyFirstController::class, 'store']);
Route::get('/vehicles/{id}/edit', [MyFirstController::class, 'edit']);
Route::put('/vehicles/{id}', [MyFirstController::class, 'update']);
Route::delete('/vehicles/{id}', [MyFirstController::class, 'destroy']);
Route::get('/vehicles/search', [MyFirstController::class, 'search']) ->name('vehicles.search');




