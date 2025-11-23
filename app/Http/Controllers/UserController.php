<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('access/layout');
        }
    }

    public function proceedLogin(Request $request)
    {

        // dd($request->all());

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'))->with('success', 'Authenticate Sucessfully!');
        }

        

        return back()->with('error', 'Incorrect Credentials!');
    }

    public function proceedLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('access')->with('success', 'Logout Sucessfully!');;
    }
}
