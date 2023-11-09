<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'creation_date',
        'status'

    ];



public function product()
{
    return $this->hasOne(Product::class,'id');
}


    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }


    public function user()
    {
        return $this->hasOne(User::class,'id');
    }



    public function cart()
    {
        return $this->hasOne(Cart::class);
    }



}
