<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\FlightSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with(['schedule.route'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user_reservations.index', [
            'title' => 'Pemesanan Saya',
            'reservations' => $reservations
        ]);
    }

    public function create(Request $request)
    {
        $schedule = FlightSchedule::with('route')->find($request->schedule_id);

        if (!$schedule) {
            return redirect()->back()->with('error', 'Jadwal penerbangan tidak ditemukan.');
        }

        $user = Auth::user();

        return view('user_reservations.create', [
            'title' => 'Pesan Tiket',
            'schedule' => $schedule,
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:flight_schedules,id',
            'ticket_quantity' => 'required|integer|min:1'
        ]);

        $schedule = FlightSchedule::find($request->schedule_id);
        $totalPrice = $schedule->price * $request->ticket_quantity;

        Reservation::create([
            'user_id' => Auth::id(),
            'schedule_id' => $request->schedule_id,
            'ticket_quantity' => $request->ticket_quantity,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dibuat.');
    }

    public function edit($id)
    {
        $reservation = Reservation::with(['schedule.route'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('user_reservations.edit', [
            'title' => 'Edit Reservasi',
            'reservation' => $reservation
        ]);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'ticket_quantity' => 'required|integer|min:1',
        ]);

        $newTotal = $reservation->flight->price * $request->ticket_quantity;
        $reservation->update([
            'ticket_quantity' => $request->ticket_quantity,
            'total_price' => $newTotal,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::where('user_id', Auth::id())->find($id);

        if ($reservation) {
            $reservation->delete();
            return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dihapus.');
        } else {
            return redirect()->route('reservations.index')->with('error', 'Reservasi tidak ditemukan.');
        }
    }
}