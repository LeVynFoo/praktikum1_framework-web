<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
     public function index()
    {
        $users = User::where('role', 'kasir')->get();

        return view('users.users', compact('users'));
    }
}
