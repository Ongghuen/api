<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
  // function untuk menampilkan produk
  public function index()
  {
    try {
      $topProduct = Product::withSum(
        ['transactions' => fn ($query) => $query
          ->where('status', 'Selesai')],
        'transaction_details.qty'
      )
        ->orderBy('transactions_sum_transaction_detailsqty', 'DESC')
        ->limit(5)
        ->get();
      //
      return response()->json([
        'results' => Product::all(),
        'topProduct' => $topProduct
      ]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during showing product'
      ], 500);
    }
  }

  // function untuk menyimpan produk
  public function store(Request $request)
  {
    try {
      $formField = $request->validate([
        'name' => 'required',
        'desc' => 'required',
        'harga' => 'required',
        'qty' => 'required',
        'categories' => 'required',
      ]);
  
      if ($request->hasFile('image')) {
        $formField['image'] = $request->file('image')->store('image', 'public');
      }
  
      return Product::create($formField);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during save product'
      ], 500);
    }
  }

  // function untuk update produk
  public function update(Request $request, $id)
  {
    try {
      $product = Product::find($id);
  
      $product->update($request->validate([
        'name' => 'required',
        'desc' => 'required',
        'harga' => 'required',
        'categories' => 'required',
      ]));
  
      return $product;
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during update product'
      ], 500);
    }
  }

  // function untuk delete produk
  public function destroy($id)
  {
    try {
      return Product::destroy($id);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during delete product'
      ], 500);
    }
  }

  // function untuk search produk
  public function search()
  {
    try {
      return Product::latest()->filter(request(['search', 'categories']))->get();
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during search product'
      ], 500);
    }
  }
}
