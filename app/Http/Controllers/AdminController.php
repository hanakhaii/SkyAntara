<?php

namespace App\Http\Controllers;

use App\Models\FlightSchedule;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalFlightsToday = FlightSchedule::whereDate('departure_time', now()->toDateString())->count();
        $ticketsSold = Reservation::count();
        $totalRevenue = Reservation::sum('total_price');
        $activePassengers = Reservation::distinct('passenger_name')->count('passenger_name');

        $flights = FlightSchedule::with('route')->latest()->take(5)->get();
        $reservations = Reservation::latest()->take(5)->get();

        return view('admin.index', [
            'title' => 'Dashboard Admin',
            'totalFlightsToday' => $totalFlightsToday,
            'ticketsSold' => $ticketsSold,
            'totalRevenue' => $totalRevenue,
            'activePassengers' => $activePassengers,
            'flights' => $flights,
            'reservations' => $reservations,
        ]);
    }
}
