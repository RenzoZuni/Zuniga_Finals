<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Add this
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('user');
            }
        }
    }

    public function signup(Request $request)
    {
        $user = new User;
        $user->name = $request->txt;
        $user->email = $request->email;
        $user->password = Hash::make($request->pswd);
        $user->role = $request->role; // Save the user role
        $user->save();
    
        // Redirect to the login route
        return redirect('/login');
    }

    public function index()
    {
        $users = User::all(); // Fetch all users from the database
    
        return view('admin', ['users' => $users]);
    }
}