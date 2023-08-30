<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $messages = [
            'username.not_regex' => 'Username cannot contain spaces.'
        ];

        $credentials = $request->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:2|max:50|unique:users,username|not_regex:/\s/',
            'phone_number' => 'required|min_digits:9,20|numeric|unique:users,phone_number',
            'password' => 'required|min:6|max:255',
        ], $messages);

        $credentials['password'] = Hash::make($request->password);

        User::create($credentials);

        return redirect('/login');
    }
}
