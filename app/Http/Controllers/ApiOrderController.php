<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ApiOrderController extends Controller
{
    public function index()
    {
        $keyword = request()->keyword;
  
        $ongoing = auth()->user();
        $orders = Transaction::with(['users', 'products'])
                    ->where(function ($query) use($keyword){
                        $query->where('status', $keyword)
                            ->orWhereHas('users', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', $keyword)
                            ->orWhere('tgl_selesai', $keyword);
                    })
                    ->where('categories', 'Product')
                    ->sortable()
                    ->paginate(10);

        $orders = Transaction::with(['users', 'products'])
                    ->where(function ($query) use($keyword){
                        $query->where('status', $keyword)
                            ->orWhereHas('users', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', $keyword)
                            ->orWhere('tgl_selesai', $keyword);
                    })
                    ->where('categories', 'Product')
                    ->sortable()
                    ->paginate(10);

        // $custom = Transaction::with(['users', 'customs'])
        //             ->where(function ($query) use($keyword){
        //                 $query->where('status', $keyword)
        //                     ->orWhereHas('users', function($query) use($keyword){
        //                         $query->where('name', 'LIKE', '%'.$keyword.'%');
        //                     })
        //                     ->orWhere('total_harga', $keyword)
        //                     ->orWhere('tgl_transaksi', $keyword)
        //                     ->orWhere('tgl_selesai', $keyword);
        //             })
        //             ->where('categories', 'Custom')
        //             ->sortable()
        //             ->paginate(10);

        return response()->json(['ongoing' => $ongoing,'orders' => $orders]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

}
