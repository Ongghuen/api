<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'category_id',
        'desc'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlists', 'product_id',
        'user_id');
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'transaction_details', 'product_id',
        'transaction_id');
    }
}
