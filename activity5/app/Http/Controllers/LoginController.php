<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
{
    // Validate the login request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed...
        return redirect()->intended('/dashboard');
    }

    // Authentication failed...
    return back()->withInput()->withErrors(['email' => 'Invalid login credentials']);
}

}
