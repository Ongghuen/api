<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'desc',
        'jenis_custom',
        'bahan',
        'desc',
        'desc',
        'dp',
        'total_harga'
    ];

    public function transactions()
  {
    return $this->belongsToMany(
      Transaction::class,
      'custom_details',
      'custom_id',
      'transaction_id'
    );
  }
}
