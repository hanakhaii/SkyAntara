<?php

namespace App\Http\Controllers;
use App\Models\FlightRoute;

use Illuminate\Http\Request;

class FlightRouteController extends Controller
{
    public function index()
    {
        $routes = FlightRoute::all();
        return view('admin.flightroutes.index', ['title' => 'All Flight Routes', 'routes' => $routes]);
    }

    public function create()
    {
        $routes = FlightRoute::all();
        return view('admin.flightroutes.create', ['title' => 'Create Flight Route', 'routes' => $routes]);
    }

    public function store(Request $request)
    {
        FlightRoute::create([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'duration' => $request->duration,
        ]);

        return redirect()->route('admin.flightroutes.index')->with('success', 'Flight route created successfully.');
    }

    public function edit($id)
    {
        $route = FlightRoute::find($id);
        return view('admin.flightroutes.edit', ['title' => 'Edit Flight Route', 'route' => $route]);
    }

    public function update(Request $request, $id)
    {
        $route = FlightRoute::find($id);
        $route->update([
            'origin' => $request->origin,
            'destination' => $request->destination,
            'duration' => $request->duration,
        ]);

        return redirect()->route('admin.flightroutes.index')->with('success', 'Flight route updated successfully.');
    }

    public function destroy(Request $request)
    {
        $route = FlightRoute::find($request->id);
        if ($route) {
            $route->delete();
            return redirect()->route('admin.flightroutes.index')->with('success', 'Flight route deleted successfully.');
        } else {
            return redirect()->route('admin.flightroutes.index')->with('error', 'Flight route not found.');
        }
    }
}
