<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Bill;

class Product extends Model
{
  protected $guarded = [];

  public function user(){
    return $this->belongsTo(User::class);
  }
  public function bills(){
    return $this->hasMany(Bill::class);
  }
}
