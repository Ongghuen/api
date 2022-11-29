<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'image',
    'name',
    'categories',
    'harga',
    'desc'
  ];

  public function scopeFilter($query, array $filters)
  {
    # code...
    if ($filters['categories'] ?? false) {
      $query->where('categories', 'like', "%" . $filters['categories'] . "%");
    }

    if ($filters['name'] ?? false) {
      $query->where('name', 'like', "%" . $filters['name'] . "%")
        ->orWhere('desc', 'like', "%" . $filters['name'] . "%");
    }


    /* dd($filters); */

  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function transactions()
  {
    return $this->belongsToMany(
      Transaction::class,
      'transaction_details',
      'product_id',
      'transaction_id'
    );
  }

  /* public function users() */
  /* { */
  /*   return $this->belongsToMany( */
  /*     User::class, */
  /*     'wishlists', */
  /*     'product_id', */
  /*     'user_id' */
  /*   ); */
  /* } */
}
