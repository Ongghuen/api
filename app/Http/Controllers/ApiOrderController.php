<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApiOrderController extends Controller
{
  // function untuk menampilkan keranjang belanja
  public function index()
  {
    try {
      $ongoing = auth()->user()->transactions()->where('status', "Pending")
        ->where('categories', "Product")
        ->latest('id')->first();
      $ongoingCustom = auth()->user()->transactions()->where('status', "Pending")
        ->where('categories', "Custom")
        ->latest('id')->first();
      $orders = auth()->user()->transactions()->where('categories', "Product")->latest('id')->get();
      $customs = auth()->user()->transactions()->where('categories', "Custom")->latest('id')->get();
      return response()->json(['ongoing' => $ongoing, 'ongoingCustom' => $ongoingCustom, 'orders' => $orders, 'customs' => $customs]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during showing cart'
      ], 500);
    }
  }

  // function untuk checkout keranjang belanja
  public function store(Request $request)
  {
    try {
      // anggep aja checkout
      // check latest transaksi -> update ke belum bayar
      $orders = auth()->user()->transactions()->where('status', "Pending")
        ->where('categories', "Product")
        ->latest('id')->first();
      $orders->status = "Belum_Bayar";
      $orders->alamat = auth()->user()->address;
      $orders->total_harga = $request->total_harga;
      $orders->tgl_transaksi = Carbon::now()->toDateTimeString();
      $orders->save();
  
      // buat "transaksi" baru buat keranjang
      $new = Transaction::create([
        'user_id' => auth()->user()->id,
      ]);
      return response()->json(['results' => $new]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during checkout cart'
      ], 500);
    }
  }

  // function untuk upload bukti pembayaran
  public function upload(Request $request, $id)
  {
    try {
      $transaction = Transaction::find($id);
  
      // update stuff di transaksi
      if ($request->image) {
        File::delete(storage_path('app/public/' . $transaction->image));
        $transaction['bukti_bayar'] = $request->image->store('bukti_pembayaran', 'public');
      }
      if ($request->alamat) {
        $transaction->address = $request->alamat;
      }
  
      return response()->json(['results' => $transaction->update()]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during upload proof of payment'
      ], 500);
    }
  }

  // function untuk update status transaksi after pembayaran
  public function changeStatus(Request $req, $id)
  {
    try {
      $transaction = Transaction::find($id);
  
      // update stuff di transaksi
      if ($req->status) {
        $transaction['status'] = $req->status;
      }
  
      if ($req->status == "Selesai") {
        $transaction->tgl_selesai = Carbon::now()->toDateTimeString();
      }
  
      return response()->json(['results' => $transaction->update()]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during update status'
      ], 500);
    }
  }
}
