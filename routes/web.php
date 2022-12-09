<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
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
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

# ========================== DASHBOARD =========================
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

# ========================== ORDER =========================
Route::get('/order', [OrderController::class, 'index'])->middleware('auth');

# ========================== PRODUCT =========================
Route::get('/product', [ProductController::class, 'index'])->middleware('auth');
Route::put('/product/{id}', [ProductController::class, 'update'])->middleware('auth');
Route::post('/product', [ProductController::class, 'store'])->middleware('auth');
Route::delete('/product-destroy/{id}', [ProductController::class, 'destroy'])->middleware('auth');

# ========================== USER =========================
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::put('/user/{id}', [UserController::class, 'update'])->middleware('auth');
Route::post('/user', [UserController::class, 'store'])->middleware('auth');
Route::delete('/user-destroy/{id}', [UserController::class, 'destroy'])->middleware('auth');
Route::put('/profile/{id}', [UserController::class, 'profile'])->middleware('auth');

# ========================== CUSTOM =========================
Route::get('/custom', [CustomController::class, 'index'])->middleware('auth');

# ======================== REPORT ========================
Route::get('/report', [ReportController::class, 'index'])->middleware('auth');
Route::get('/report-date', [ReportController::class, 'date'])->middleware('auth');
Route::get('/report-pdf', [ReportController::class, 'pdf'])->middleware('auth');

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
