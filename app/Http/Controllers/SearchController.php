<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\FlightRoute;

class SearchController extends Controller
{
    public function index()
    {
        $routes = FlightRoute::all();
        return view('search', ['title' => 'Search Flights', 'routes' => $routes]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'origin' => 'required',
            'destination' => 'required',
        ]);

        $origin = $request->origin;
        $destination = $request->destination;

        $flights = FlightSchedule::join('flight_routes', 'flight_schedules.route_id', '=', 'flight_routes.id')
            ->where('flight_routes.origin', $origin)
            ->where('flight_routes.destination', $destination)
            ->select(
                'flight_schedules.*',
                'flight_routes.origin',
                'flight_routes.destination'
            )
            ->get();

        return view('search-result', [
            'flights' => $flights,
            'origin' => $origin,
            'destination' => $destination,
        ]);
    }
}