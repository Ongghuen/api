<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TransactionsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $date1;
    protected $date2;

    function __construct($date1, $date2) {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $order = Transaction::with(['users', 'products'])
        ->whereBetween('tgl_selesai', [$this->date1, $this->date2])
        ->where('categories', 'Product')
        ->where('Status', 'Selesai')
        ->get();

        return $order;
    }

    public function map($order): array
    {
        $items = [];
        $qty = [];
        $subtotal = [];
        $i = 1;

        foreach($order->products as $item){
            array_push($subtotal, $item->pivot->subtotal);
        }

        foreach($order->products as $item){
            array_push($qty, $item->pivot->qty);
        }

        foreach($order->products as $item){
            array_push($items, $item->name);
        }


        return [
            [
                $order->i++,
                $order->users->name,
                $order->tgl_transaksi,
                $order->tgl_selesai,
                join(',', $items),
                join(',', $qty),
                join(',', $subtotal),
                $order->total_harga
            ],

        ];
    }

    public function headings(): array
    {
        return [
            'Order No.',
            'Customer',
            'Tgl. Transaksi',
            'tgl. Selesai',
            'Produk',
            'Qty',
            'Subtotal',
            'Total Harga'
        ];
    }
}
