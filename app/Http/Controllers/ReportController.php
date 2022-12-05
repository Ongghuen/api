<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Custom;

class ReportController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;

        $order = Transaction::with(['users', 'products'])
                    ->where(function ($query) use($keyword){
                        $query
                            ->WhereHas('users', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', $keyword)
                            ->orWhere('tgl_selesai', $keyword);
                    })
                    ->where(function ($query){
                        $query
                            ->where('categories', 'Product');
                    })
                    ->where('Status', 'Selesai')
                    ->sortable()
                    ->paginate(10);

        $custom = Transaction::with(['users', 'customs'])
                    ->where(function ($query) use($keyword){
                        $query
                            ->WhereHas('users', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', $keyword)
                            ->orWhere('tgl_selesai', $keyword);
                    })
                    ->where(function ($query){
                        $query
                            ->where('categories', 'Custom');
                    })
                    ->where('Status', 'Selesai')
                    ->sortable()
                    ->paginate(10);

        return view('dashboard.report', ['orderList' => $order, 'customList' => $custom]);
    }
}
