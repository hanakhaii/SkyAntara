<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class FlightSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'route_id',
        'flight_code',
        'departure_time',
        'arrival_time',
        'price',
        'total_seats',
        'available_seats',
    ];

    protected function casts(): array
    {
        return [
            'departure_time' => 'datetime',
            'arrival_time' => 'datetime',
        ];
    }

    public function route()
    {
        return $this->belongsTo(FlightRoute::class, 'route_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'schedule_id');
    }
}
