<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('profile', [
            'user' => $user
        ]);
    }

    public function search(Request $request)
    {
        return view('search', [
            'users' => User::where('name', 'LIKE', '%' . $request->get('query') . '%')->get()
        ]);
    }
}
