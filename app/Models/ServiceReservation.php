<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceReservation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'date',
        'status',
        'note',
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

  public function user()
    {
        return $this->belongsTo(User::class);
    }



}
