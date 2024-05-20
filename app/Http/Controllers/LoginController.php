<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }

public function create()
{
    // only authenticated users can access this method
}

public function store(Request $request)
{
    // only authenticated users can access this method
}

public function edit($id)
{
    // only authenticated users can access this method
}

public function update(Request $request, $id)
{
    //  only authenticated users can access this method
}

public function destroy($id)
{
    //  only authenticated users can access this method
}


}
