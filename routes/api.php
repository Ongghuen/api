<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\ApiWishlistController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/login', function () {
  return response()->json(["results" => User::all(), "msg" => "success"]);
});

/* Route::resource('products', ApiProductController::class); */

Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/register', [ApiAuthController::class, 'register']);
Route::get('/products', [ApiProductController::class, 'index']);
Route::get('/products/search', [ApiProductController::class, 'search']);
Route::get('/products/{id}', [ApiProductController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {

  Route::post('/products', [ApiProductController::class, 'store']);
  Route::put('/products/{id}', [ApiProductController::class, 'update']);
  Route::delete('/products/{id}', [ApiProductController::class, 'destroy']);


  Route::get('/wishlists', [ApiWishlistController::class, 'index']);
  Route::post('/wishlists', [ApiWishlistController::class, 'store']);
  Route::delete('/wishlists/{product_id}', [ApiWishlistController::class, 'destroy']);

  Route::post('/logout', [ApiAuthController::class, 'logout']);
});
