<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);


        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect('/');

    }

}
