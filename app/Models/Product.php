<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'price',
        'image',
        'description'


    ];



    public function category()
    {
        return $this->hasOne(CategoryProduct::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class,'cart_products', 'product_id', 'cart_id');
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }


}

