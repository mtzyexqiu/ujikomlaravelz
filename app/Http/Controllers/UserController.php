<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('name', 'email', 'usertype')->get();
        return view('admin.users.user', compact('users'));
    }
}
