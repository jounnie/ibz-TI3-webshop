<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('login.index', compact('users'));
    }

    public function login(Request $request)
    {
        $request->session()->put("loggedInUser", $request->input('nickname'));
        return view('advertisement.index');
    }

    public function logout(Request $request)
    {
        $request->session()->forget("loggedInUser");
        return $this->index();
    }
}
