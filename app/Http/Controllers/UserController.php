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
            return view('access');
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
            return redirect()->intended('dashboard');
        }

        $notification = [
            'message' => 'Incorrect Credentials',
            'alert-type' => 'danger'
        ];

        return back()->with($notification);
    }

    public function proceedLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('access');
    }
}
