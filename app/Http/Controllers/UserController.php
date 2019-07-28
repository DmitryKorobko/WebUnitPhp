<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.profile', ['user' => $user]);
    }

    /**
     * Show the list of users.
     *
     * @return View
     */
    public function index()
    {
        $users = User::get();

        return view('user.index', ['users' => $users]);
    }
}
