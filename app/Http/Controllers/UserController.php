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
        $user = User::where('nickname', $request->input('nickname'))->first();
        $request->session()->put("loggedInUser", $user);
        return redirect('/advertisements');
    }

    public function logout(Request $request)
    {
        $request->session()->forget("loggedInUser");
        return $this->index();
    }
}
