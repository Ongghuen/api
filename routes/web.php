<?php

use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', [UserController::class, 'show']);
Route::get('/listings', function (){
  return view('listings', [
    "listings" => Listing::all()
  ]);
});
Route::get('/listing/{id}', function ($id){
  return view('listing', [
    "listing" => Listing::find($id)
  ]);
});

/* Route parameters are always encased within {} braces and should consist of alphabetic characters. Underscores (_) are also acceptable within route parameter names. Route parameters are injected into route callbacks / controllers based on their order - the names of the route callback / controller arguments do not matter. */

Route::get('/user/{name?}', function (Request $req, $name = null) {
  if ($name == null) {
    return redirect(route('something'));
  }

  return response()->json(['User' => $name, 'idk' => $req, 'msg' => 'success']);
});

/* Route::get('/kontol', function () { */
/*   return 'something'; */
/* })->name('something'); */

Route::get('/welcome/{id}', [UserController::class, 'show']);

// view route
// Route::view('/welcome', 'welcome', [ "nama" => "Raihan" ]);
