<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'category_id',
    'desc'
  ];

  public function scopeFilter($query, array $filters)
  {
    # code...
    /* dd($filters['tag']); */
    if ($filters['tag'] ?? false) {
      $query->where('tags', 'like', "%" . $filters['tag'] . "%");
    }

    if ($filters['search'] ?? false) {
      $query->where('title', 'like', "%" . $filters['search'] . "%")
        ->orWhere('company', 'like', "%" . $filters['search'] . "%")
        ->orWhere('tags', 'like', "%" . $filters['search'] . "%");
    }
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
