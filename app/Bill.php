<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;

class Bill extends Model
{
    protected $guarded = [];

    public function product(){
      return $this->belongsTo(Product::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
