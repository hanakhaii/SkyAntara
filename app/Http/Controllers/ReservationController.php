<?php

namespace App\Http\Controllers;
use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', ['title' => 'All Reservations', 'reservations' => $reservations]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,cancelled,pending'
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->status;
        $reservation->save();

        return redirect()->route('admin.reservations.index')->with('success', 'Status reservasi berhasil diubah.');
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.reservations.show', ['title' => 'Reservation Details', 'reservation' => $reservation]);
    }

    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->id);
        if ($reservation) {
            $reservation->delete();
            return redirect()->route('admin.reservations.index')->with('success', 'Reservation deleted successfully.');
        } else {
            return redirect()->route('admin.reservations.index')->with('error', 'Reservation not found.');
        }
    }
}
