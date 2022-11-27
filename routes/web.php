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

// Route::get('/', function () {
//   return redirect('/listings');
// });

Route::get('/', function () {
  return view('dashboard.dashboard');
});

Route::get('/dashboard', function () {
  return view('dashboard.dashboard');
});

Route::get('/custom', function () {
  return view('dashboard.custom');
});

Route::get('/order', function () {
  return view('dashboard.order');
});

Route::get('/product', function () {
  return view('dashboard.product');
});

Route::get('/report', function () {
  return view('dashboard.report');
});

Route::get('/transaction', function () {
  return view('dashboard.transaction');
});

Route::get('/user', function () {
  return view('dashboard.user');
});

Route::get('/login', function () {
  return view('login');
});

Route::get('/landing', function () {
  return view('index');
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
