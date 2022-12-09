<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Custom;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

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
                            ->orWhereHas('products', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('tgl_selesai', 'LIKE', '%'.$keyword.'%');
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
                            ->orWhereHas('customs', function($query) use($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('total_harga', $keyword)
                            ->orWhere('tgl_transaksi', 'LIKE', '%'.$keyword.'%')
                            ->orWhere('tgl_selesai', 'LIKE', '%'.$keyword.'%');
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

    public function date(Request $request){
        $date1 = $request->date1;
        $date2 = $request->date2;

        if($date1<=$date2){
            $order = Transaction::with(['users', 'products'])
                        ->whereBetween('tgl_selesai', [$date1, $date2])
                        ->where('categories', 'Product')
                        ->where('Status', 'Selesai')
                        ->sortable()
                        ->paginate(10);

            $custom = Transaction::with(['users', 'customs'])
                        ->whereBetween('tgl_selesai', [$date1, $date2])
                        ->where('categories', 'Custom')
                        ->where('Status', 'Selesai')
                        ->sortable()    
                        ->paginate(10);

            return view('dashboard.report', ['orderList' => $order, 'customList' => $custom]);
        } else{
            Session::flash('status','failed');
            Session::flash('message', 'Tanggal awal tidak boleh lebih besar dari tanggal akhir!');

            return redirect('/report');
        }
    }

    public function pdf(Request $request){
        $date1 = '1976-03-20';
        $date2 = '2022-03-20';

        if($date1<=$date2){
            $order = Transaction::with(['users', 'products'])
                        ->whereBetween('tgl_selesai', [$date1, $date2])
                        ->where('categories', 'Product')
                        ->where('Status', 'Selesai')
                        ->sortable()
                        ->paginate(10);

            $custom = Transaction::with(['users', 'customs'])
                        ->whereBetween('tgl_selesai', [$date1, $date2])
                        ->where('categories', 'Custom')
                        ->where('Status', 'Selesai')
                        ->sortable()    
                        ->paginate(10);

            view()->share(['orderList' => $order, 'customList' => $custom, 'date1' => $date1, 'date2' => $date2]);
            $pdf = PDF::loadview('dashboard.pdf')->setPaper('a4', 'landscape');
            return $pdf->download('report '. date('Y-m-d') .'.pdf');
        } else{
            Session::flash('status','failed');
            Session::flash('message', 'Tanggal awal tidak boleh lebih besar dari tanggal akhir!');

            return redirect('/report');
        }
    }
}
