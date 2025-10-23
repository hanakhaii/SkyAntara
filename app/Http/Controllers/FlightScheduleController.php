<?php

namespace App\Http\Controllers;
use App\Models\FlightRoute;
use App\Models\FlightSchedule;
use Illuminate\Http\Request;

class FlightScheduleController extends Controller
{
    public function index()
    {
        $flights = FlightSchedule::all();
        $routes = FlightRoute::all();
        return view('admin.flights.index', ['title' => 'All Flights Route', 'flights' => $flights, 'routes' => $routes]);
    }

    public function create()
    {
        $routes = FlightRoute::all();
        return view('admin.flights.create', ['title' => 'Create New Flight', 'routes' => $routes]);
    }

    public function store(Request $request)
    {
        FlightSchedule::create([
            'route_id' => $request->route_id,
            'flight_code' => $request->flight_code,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
            'price' => $request->price,
            'total_seats' => $request->total_seats,
            'available_seats' => $request->available_seats,
        ]);

        return redirect()->route('admin.flights.index')->with('success', 'Flight created successfully.');
    }

    public function edit($id)
    {
        $flight = FlightSchedule::find($id);
        $routes = FlightRoute::all();
        return view('admin.flights.edit', ['title' => 'Edit Flight', 'flight' => $flight, 'routes' => $routes]);
    }

    public function update(Request $request, $id)
    {
        $flight = FlightSchedule::find($id);
        $flight->update([
            'route_id' => $request->route_id,
            'flight_code' => $request->flight_code,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
            'price' => $request->price,
            'total_seats' => $request->total_seats,
            'available_seats' => $request->available_seats,
        ]);

        return redirect()->route('admin.flights.index')->with('success', 'Flight updated successfully.');
    }

    public function destroy(Request $request)
    {
        $flight = FlightSchedule::find($request->id);
        if ($flight) {
            $flight->delete();
            return redirect()->route('admin.flights.index')->with('success', 'Flight deleted successfully.');
        } else {
            return redirect()->route('admin.flights.index')->with('error', 'Flight not found.');
        }
        
        return redirect()->route('admin.flights.index')->with('success', 'Flight deleted successfully.');
    }
}
