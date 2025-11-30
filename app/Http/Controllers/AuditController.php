<?php

namespace App\Http\Controllers;

use App\Models\AuditLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuditController extends Controller
{

    public function index(){
        if(!Auth::check()){
            return redirect()->route('access');
        }

        return view('dashboard.system-log', ['data' => AuditLogs::latest()->paginate(5)]);
    }

    public function createLog($desc, $route, $method, $ipAddr){
        if(!Auth::check()){
            return redirect()->route('access');
        }

        return AuditLogs::create([
            'user_id' => Auth::user()->id,
            'description' => $desc,
            'route' => $route,
            'method' => $method,
            'ip_address' => $ipAddr,
        ]);

        
    }
}
