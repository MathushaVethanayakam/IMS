<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('Home.register');
    }

    // Register a new user
    // Register a new user
    public function register(Request $request)
    {
        // Validation
        //dd($request->all());
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|string|min:3|confirmed',

        ]);

        // Create a new user
        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect to login form with success message
        return redirect()->action([loginController::class, 'showLoginForm'])->with('success', 'Registration successful. Please log in.');
    }


    // Show login form
    public function showLoginForm()
    {
        return view('Home.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate request
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate user
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/home'); // Redirect to intended URL or home
        }

        // Authentication failed, redirect back with error
        return back()->withErrors(['username' => 'Invalid username or password.'])->withInput();
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
   
}

