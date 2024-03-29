<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {




        if (! auth()->attempt(request(['email', 'password'])))
        {

            return back()->withErrors([
                'message' => 'Your email or password or both is not correct !'
            ]);
        }



        return redirect('/');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
