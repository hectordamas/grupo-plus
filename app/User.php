<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Bill;
use App\Product;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'companyName', 'telephoneNumber', 'cellphoneNumber', 'city', 'listen', 'status', 'address_fact', 'address_send','rif','role', 'date_expiration', 'email_seller', 'name_seller'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function products(){
      return $this->hasMany(Product::class);
    }
    public function bills(){
      return $this->hasMany(Bill::class);
    }
}
