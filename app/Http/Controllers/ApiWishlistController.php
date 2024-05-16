<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ApiWishlistController extends Controller
{
  // function untuk menampilkan wishlist
  public function index()
  {
    try {
      return response()->json(['results' => auth()->user()->wishlists()->get()]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during showing wishlist'
      ], 500);
    }
  }

  // function untuk menambahkan wishlist
  public function store(Request $request)
  {
    try {
      return auth()->user()->wishlists()->attach($request->product_id);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during create wishlist'
      ], 500);
    }
  }

  // function untuk menghapus wishlist
  public function destroy(Request $request)
  {
    try {
      return auth()->user()->wishlists()->detach($request->product_id);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during delete wishlist'
      ], 500);
    }
  }
}
