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
    $orders = auth()->user()->transactions()->get();
    return response()->json(['ongoing' => $ongoing, 'orders' => $orders]);
  }

  public function store(Request $request)
  {
    //
    $new = Transaction::create([
      'user_id' => auth()->user()->id,
    ]);
    return response()->json(['results' => $new]);
  }
}
