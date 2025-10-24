<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    protected $fillable = [
        'origin',
        'destination',
        'duration',
    ];

    public function flights()
    {
        return $this->hasMany(FlightSchedule::class, 'route_id');
    }

    public function getRouteNameAttribute()
    {
        return "{$this->origin} to {$this->destination}";
    }
}