<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
    $orders->alamat = auth()->user()->address;
    $orders->save();

    // buat "transaksi" baru buat keranjang
    $new = Transaction::create([
      'user_id' => auth()->user()->id,
    ]);
    return response()->json(['results' => $new]);
  }
  public function upload(Request $request, $id)
  {
    $transaction = Transaction::find($id);

    // update stuff di transaksi
    if ($request->bukti_bayar) {
      File::delete(storage_path('app/public/' . $transaction->image));
      $transaction['bukti_bayar'] = $request->bukti_bayar->store('bukti_pembayaran', 'public');
    }

    return response()->json(['results' => $transaction->update()]);
  }
}
