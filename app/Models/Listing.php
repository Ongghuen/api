<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'company', 'location', 'email', 'website', 'email', 'description', 'tags', "logo", "user_id"];

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
}
