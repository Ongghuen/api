<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Custom;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->keyword;

    $order = Transaction::with(['users', 'products'])
      ->where(function ($query) use ($keyword) {
        $query->where('status', $keyword)
          ->orWhereHas('users', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%' . $keyword . '%');
          })
          ->orWhere('total_harga', $keyword)
          ->orWhere('tgl_transaksi', $keyword)
          ->orWhere('tgl_selesai', $keyword);
      })
      ->where('categories', 'Product')
      ->sortable()
      ->paginate(10);

    $custom = Transaction::with(['users', 'customs'])
      ->where(function ($query) use ($keyword) {
        $query->where('status', $keyword)
          ->orWhereHas('users', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%' . $keyword . '%');
          })
          ->orWhere('total_harga', $keyword)
          ->orWhere('tgl_transaksi', $keyword)
          ->orWhere('tgl_selesai', $keyword);
      })
      ->where('categories', 'Custom')
      ->sortable()
      ->paginate(10);

    return view('dashboard.order', ['orderList' => $order, 'customList' => $custom]);
  }

  public function confirm($id){
    $order = Transaction::findOrFail($id);

    $order->status = 'Terkonfirmasi';
    $order->update();
    if ($order) {
      Session::flash('statusOrder', 'success');
      Session::flash('message', 'konfirmasi pembayaran berhasil!');
    }
    return redirect('/order');
  }

  public function send($id){
    $order = Transaction::findOrFail($id);

    $order->status = 'Dikirim';
    $order->update();
    if ($order) {
      Session::flash('statusOrder', 'success');
      Session::flash('message', 'update status transaksi menjadi Dikirim berhasil');
    }
    return redirect('/order');
  }

  public function confirmCustom(Request $request, $id){
    $order = Transaction::findOrFail($id);
    $custom = Custom::where('transaction_id', $id)->first();

    $order->total_harga = $request->total_harga;
    $order->update();

    $custom->DP = $request->DP;
    $custom->total_harga = $request->total_harga;
    $custom->update();

    if ($custom) {
      Session::flash('statusCustom', 'success');
      Session::flash('message', 'order custom berhasil disetujui!');
    }
    return redirect('/order');
  }

  public function tolakCustom($id){
    $order = Transaction::findOrFail($id);

    $order->status = 'Gagal';
    $order->update();

    if ($order) {
      Session::flash('statusCustom', 'success');
      Session::flash('message', 'order custom berhasil ditolak!');
    }
    return redirect('/order');
  }

  public function customConfirm($id){
    $order = Transaction::findOrFail($id);
    $custom = Custom::where('transaction_id', $id)->first();

    $order->status = 'Terkonfirmasi';
    $order->update();

    $custom->status = 'Pengerjaan';
    $custom->update();

    if ($custom) {
      Session::flash('statusCustom', 'success');
      Session::flash('message', 'konfirmasi pembayaran berhasil!');
    }
    return redirect('/order');
  }

  public function customSend($id){
    $order = Transaction::findOrFail($id);
    $custom = Custom::where('transaction_id', $id)->first();

    $order->status = 'Dikirim';
    $order->update();

    $custom->status = 'Selesai';
    $custom->update();

    if ($custom) {
      Session::flash('statusCustom', 'success');
      Session::flash('message', 'update status transaksi menjadi Dikirim berhasil.');
    }
    return redirect('/order');
  }

  public function customDelete($id){
    $order = Transaction::findOrFail($id);
    $order->delete();

    if ($order) {
      Session::flash('statusCustom', 'success');
      Session::flash('message', 'Order custom berhasil dihapus');
    }
    return redirect('/order');
  }
}
