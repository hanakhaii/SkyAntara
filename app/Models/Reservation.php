<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'schedule_id',
        'ticket_quantity',
        'total_price',
        'status',
    ];


    public function schedule()
    {
        return $this->belongsTo(FlightSchedule::class, 'schedule_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}
