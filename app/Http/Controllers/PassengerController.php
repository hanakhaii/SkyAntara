<?php

namespace App\Http\Controllers;
use App\Models\Passenger;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        $reservations = Reservation::all();
        return view('admin.passengers.index', ['title' => 'All Passengers', 'passengers' => $passengers, 'reservations' => $reservations]);
    }

    public function create()
    {
        $passengers = Passenger::all();
        return view('admin.passengers.create', ['title' => 'Create Passenger', 'passenger' => $passengers]);
    }

    public function store(Request $request)
    {
        Passenger::create([
            'reservation_id' => $request->reservation_id,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'national_id' => $request->national_id,
        ]);
        return redirect()->route('admin.passengers.index')->with('success', 'Passenger created successfully.');
    }

    public function edit($id)
    {
        $passenger = Passenger::find($id);
        return view('admin.passengers.edit', ['title' => 'Edit Passenger', 'passenger' => $passenger]);
    }

    public function update(Request $request, $id)
    {
        $passenger = Passenger::find($id);
        $passenger->update([
            'reservation_id' => $request->reservation_id,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'national_id' => $request->national_id,
        ]); 
        return redirect()->route('admin.passengers.index')->with('success', 'Passenger updated successfully.');
    }

    public function destroy($id)
    {
        $passenger = Passenger::find($id);
        if ($passenger) {
            $passenger->delete();
            return redirect()->route('admin.passengers.index')->with('success', 'Passenger deleted successfully.');
        } else {
            return redirect()->route('admin.passengers.index')->with('error', 'Passenger not found.');
        }
    }
}
