<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = [
        'user_id',
        'total_harga',
        'tgl_transaksi',
        'tgl_selesai',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'transaction_details', 'transaction_id',
        'product_id');
    }

    public function customs()
    {
        return $this->belongsToMany(Custom::class, 'custom_details', 'transaction_id',
        'custom_id');
    }
}
