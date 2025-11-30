<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{


    public function indexUsers(Request $request)
    {
        if (Auth::check()) {

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

    public function createUser(Request $req, AuditController $log){


        if (!Auth::check()) {
            return redirect()->route('access.layout');
        }

        $roleRule = Auth::user()->role === 1 ? 'required|integer|in:0,1' : '';
        
        $validate = $req->validate([
            'fullname' => 'required|string|max:50',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[@$!%*#?&]/|regex:/[0-9]/',
            'password_confirmation' => 'required',
            'role' => $roleRule
        ]);
            

           User::create([
                'uid' => Uuid::uuid4()->getHex(),
                'name' => $req->fullname,
                'email' => $req->email,
                'username' => $req->username,
                'password' => Hash::make($req->password),
                'role' => Auth::user()->role === 1 ? (int) $req->input('role') : 0,
                'status' => 1,
                'email_verified_at' => now(),
           ]);


           $log->createLog('created user with email ' . $req->email, $req->path(), $req->method(), $req->ip());

           return redirect()->route('users')
        ->with('success', 'Created new user successfully!');

        
    }

    public function updateUser(Request $req, $uid, AuditController $log){
        if(!Auth::check()){
            return view('access.layout');
        }

        $user = User::where('uid', $uid)->firstOrFail();

        $req->validate([
            'fullname' => 'nullable|string|max:50',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'username' => 'nullable|string|unique:users,username,' . $user->id,
            'password' => 'nullable|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[@$!%*#?&]/|regex:/[0-9]/',
            'password_confirmation' => 'nullable',
            'role' => 'nullable|integer',
        ]);

        if($req->filled('fullname')){
            $user->name = $req->fullname;
        }

        if($req->filled('email')){
            $user->email = $req->email;
        }

        if($req->filled('username')){
            $user->username = $req->username;
        }

        if($req->filled('password')){
            $user->password = Hash::make($req->password);
        }

        if($req->filled('role') && Auth::user()->role === 1){
            $user->role = $req->role;
        }

        
        $user->save();
        $log->createLog('edited user with email ' . $user->email, $req->path(), $req->method(), $req->ip());

        return redirect()->route('users')->with('success', 'Update user data successfully!');

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
