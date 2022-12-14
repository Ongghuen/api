<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Custom;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $dateNow = date('Y-m-d');
        $tm = Transaction::where('status', 'Selesai')
                ->where('tgl_selesai', $dateNow)
                ->sum('total_harga');

        $sales = Transaction::where('status', 'Selesai')
                ->sum('total_harga');

        $users = User::where('role_id', 2)
                ->count();

        $products = Product::count();

        $topProduct = Product::withSum(
                    [ 'transactions' => fn ($query) => $query
                    ->where('status', 'Selesai')],
                    'transaction_details.qty'
                )
                ->orderBy('transactions_sum_transaction_detailsqty','DESC')
                ->limit(5)
                ->get();

        return view('dashboard.dashboard', ['todaysMoney' => $tm, 'sales' => $sales, 
        'todaysUser' => $users, 'todaysProduct' => $products, 'topProducts' => $topProduct]);
    }
}
