<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $this->authorize('view-any', User::class);
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
