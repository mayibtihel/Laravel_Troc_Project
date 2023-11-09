<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'shiftStart',
        'shiftEnd',
        'repetition',
        'specificDate',

    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
