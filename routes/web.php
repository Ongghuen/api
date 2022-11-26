<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

# ======================== LISTING ========================
# semua listing
Route::get('/listings', [ListingController::class, 'index'])->name('home');
# show form create
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
# store data buat listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
# show edit form 
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
# manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
# update listing
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');
# delete listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
# single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

# ========================== USER =========================
# show user create
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
# show user login
Route::get('/login', [UserController::class, 'show'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/users/create', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

