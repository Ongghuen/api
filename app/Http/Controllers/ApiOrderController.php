<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ApiOrderController extends Controller
{
  // index cart
  public function index()
  {
    $ongoing = auth()->user()->transactions()->where('status', "Pending")->latest('id')->first();
    $orders = auth()->user()->transactions()->where('categories', "Product")->latest('id')->get();
    $customs = auth()->user()->transactions()->where('categories', "Custom")->latest('id')->get();
    return response()->json(['ongoing' => $ongoing, 'orders' => $orders, 'customs' => $customs]);
  }

  public function store(Request $request)
  {
    // anggep aja checkout
    // check latest transaksi -> update ke belum bayar
    $orders = auth()->user()->transactions()->where('status', "Pending")->latest('id')->first();
    $orders->status = "Belum_Bayar";
    $orders->save();

    // buat "transaksi" baru buat keranjang
    $new = Transaction::create([
      'user_id' => auth()->user()->id,
    ]);
    return response()->json(['results' => $new]);
  }
}
