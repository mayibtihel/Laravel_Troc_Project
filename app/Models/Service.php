<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
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
        'description',
        'duration',

    ];


    public function category_service()
    {
        return $this->belongsTo(CategoryService::class);
    }

    public function reservations()
    {
        return $this->hasMany(ServiceReservation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function timeTables()
    {
        return $this->hasMany(TimeTable::class);
    }



}

