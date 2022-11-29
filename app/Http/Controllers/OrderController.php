<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class OrderController extends Controller
{
    public function index(){
        $order = Transaction::with('users')->paginate(20);
        return view('dashboard.order', ['orderList' => $order]);
    }
}
