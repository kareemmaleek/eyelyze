<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function indexUsers(Request $request)
    {
        if (Auth::check()) {

            // dd($request->ajax());

            // if($request->ajax()){
            //     $users = User::query();

            //     // dd($users);

            //     return DataTables::eloquent($users)->addColumn('created_at', function($user) {
            //         return Carbon::parse($user->created_at)->format("d-m-Y h:i A");
            //     })->make(true);
            // }

            return view('dashboard.users', ['data' => User::latest()->paginate(15)]);
        } else {
            return redirect()->route('access.layout');
        }
    }

    public function indexAccess()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('access.layout');
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
