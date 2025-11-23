<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackingController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('dashboard.tracking');
        }else{
            return redirect()->route('access');
        }
    }
}
