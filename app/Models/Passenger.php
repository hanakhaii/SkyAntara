<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'reservation_id',
        'full_name',
        'gender',
        'birth_date',
        'national_id',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
