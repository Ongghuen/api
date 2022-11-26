<?php

use App\Http\Controllers\ListingController;
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

/* Route::get('/', [UserController::class, 'show']); */

Route::get('/', function () {
  return redirect('/listings');
});

# semua listing
Route::get('/listings', [ListingController::class, 'index']);
# show form create
Route::get('/listings/create', [ListingController::class, 'create']);
# store data buat listing
Route::post('/listings', [ListingController::class, 'store']);
# show edit form 
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);
# update listing
Route::put('/listing/{listing}', [ListingController::class, 'update']);
# single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);
