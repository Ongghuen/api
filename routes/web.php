<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProductController;
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
  return view('index');
});

# ========================== AUTH =========================
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout']);

# ========================== DASHBOARD =========================
Route::get('/dashboard', [DashboardController::class, 'index']);

# ========================== ORDER =========================
Route::get('/order', [OrderController::class, 'index']);

# ========================== PRODUCT =========================
Route::get('/product', [ProductController::class, 'index']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::post('/product', [ProductController::class, 'store']);
Route::delete('/product-destroy/{id}', [ProductController::class, 'destroy']);

# ========================== USER =========================
Route::get('/user', [UserController::class, 'index']);

# ========================== CUSTOM =========================
Route::get('/custom', [CustomController::class, 'index']);

# ======================== LISTING ========================
# to register
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
# register
Route::post('/users/create', [UserController::class, 'store']);
# show all
/* Route::get('/listings', [ListingController::class, 'index'])->name('home'); */
/* # show form create */
/* Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth'); */
/* # store data buat listing */
/* Route::post('/listings', [ListingController::class, 'store'])->middleware('auth'); */
/* # show edit form  */
/* Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth'); */
/* # manage listings */
/* Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth'); */
/* # update listing */
/* Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth'); */
/* # delete listing */
/* Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth'); */
/* # single listing */
/* Route::get('/listing/{listing}', [ListingController::class, 'show']); */
