<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all(); // Mengambil semua data user dari model User

        return view('user-management', compact('users'));
    }
}
