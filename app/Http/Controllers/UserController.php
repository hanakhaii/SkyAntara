<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function index()
    {
        $user = Auth::user();

        $isProfileIncomplete = empty($user->date_of_birth) ||
                               empty($user->address) ||
                               empty($user->national_id);

        return view('dashboard', compact('user', 'isProfileIncomplete'));
    }
}