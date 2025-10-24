<?php

namespace App\Http\Controllers;

use App\Models\FlightSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $isProfileIncomplete = empty($user->date_of_birth) ||
            empty($user->address) ||
            empty($user->national_id);

        $reservations = Reservation::with(['schedule.route', 'passengers'])
            ->where('user_id', $user->id)
            ->where('status', 'selesai')
            ->latest()
            ->get();

        return view('dashboard', [
            'title' => 'Dashboard',
            'isProfileIncomplete' => $isProfileIncomplete,
            'reservations' => $reservations,
        ]);
    }
}