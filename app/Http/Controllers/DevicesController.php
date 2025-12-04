<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevicesController extends Controller
{
    
    public function indexDevices()
    {
        if(!Auth::check()) return redirect()->route('users');

        return view('dashboard.devices');
    
    }
}
