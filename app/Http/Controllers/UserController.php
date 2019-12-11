<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\User::all();
        
        return view('user.index', compact('users'));
    }
}
