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
    'desc',
    'qty'
  ];

  public function scopeFilter($query, array $filters)
  {
    # code...
    if ($filters['categories'] ?? false) {
      $query->where('categories', 'like', "%" . $filters['categories'] . "%");
    }

    if ($filters['search'] ?? false) {
      $query->where('name', 'like', "%" . $filters['search'] . "%")
        ->orWhere('desc', 'like', "%" . $filters['search'] . "%");
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
    )->withPivot(['qty','sub_total']);
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
