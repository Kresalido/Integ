<?php
// UserController.php

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }
}

