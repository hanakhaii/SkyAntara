<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserReservationController;
use App\Http\Controllers\FlightScheduleController;
use App\Http\Controllers\FlightRouteController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ---------------------------- authenticated user routes ----------------------------

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/user_reservations', [UserReservationController::class, 'index'])->name('reservations.index');
    Route::get('/user_reservations/{id}', [UserReservationController::class, 'show'])->name('reservations.show');
    Route::get('/user_reservations/reservation/{schedule_id}', [UserReservationController::class, 'create'])->name('reservations.create');
    Route::post('/user_reservations/reservation', [UserReservationController::class, 'store'])->name('reservations.store');
});

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/search-result', [App\Http\Controllers\SearchController::class, 'search'])->name('search.results');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth', 'verified']);

// ---------------------------- authenticated admin routes ----------------------------

Route::prefix('admin/flights')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [FlightScheduleController::class, 'index'])->name('admin.flights.index');
    Route::get('/create', [FlightScheduleController::class, 'create'])->name('admin.flights.create');
    Route::post('/', [FlightScheduleController::class, 'store'])->name('admin.flights.store');
    Route::get('/{flight}/edit', [FlightScheduleController::class, 'edit'])->name('admin.flights.edit');
    Route::put('/{flight}', [FlightScheduleController::class, 'update'])->name('admin.flights.update');
    Route::delete('/{flight}', [FlightScheduleController::class, 'destroy'])->name('admin.flights.destroy');
});

Route::prefix('admin/flightroutes')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [FlightRouteController::class, 'index'])->name('admin.flightroutes.index');
    Route::get('/create', [FlightRouteController::class, 'create'])->name('admin.flightroutes.create');
    Route::post('/', [FlightRouteController::class, 'store'])->name('admin.flightroutes.store');
    Route::get('/{route}/edit', [FlightRouteController::class, 'edit'])->name('admin.flightroutes.edit');
    Route::put('/{route}', [FlightRouteController::class, 'update'])->name('admin.flightroutes.update');
    Route::delete('/{route}', [FlightRouteController::class, 'destroy'])->name('admin.flightroutes.destroy');
});

Route::prefix('admin/reservations')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [App\Http\Controllers\ReservationController::class, 'index'])->name('admin.reservations.index');
    Route::patch('/reservations/{id}/status', [ReservationController::class, 'updateStatus'])->name('admin.reservations.updateStatus');
    Route::delete('/{id}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('admin.reservations.destroy');
});

Route::prefix('admin/passengers')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PassengerController::class, 'index'])->name('admin.passengers.index');
    Route::get('/create', [App\Http\Controllers\PassengerController::class, 'create'])->name('admin.passengers.create');
    Route::post('/', [App\Http\Controllers\PassengerController::class, 'store'])->name('admin.passengers.store');
    Route::get('/{passenger}/edit', [App\Http\Controllers\PassengerController::class, 'edit'])->name('admin.passengers.edit');
    Route::put('/{passenger}', [App\Http\Controllers\PassengerController::class, 'update'])->name('admin.passengers.update');
    Route::delete('/{passenger}', [App\Http\Controllers\PassengerController::class, 'destroy'])->name('admin.passengers.destroy');
});

// ---------------------------- auth routes ----------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';