<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevicesController extends Controller
{


    public function indexDevices()
    {
        if (!Auth::check()) return redirect()->route('users');

        $query = Devices::query();

        $devices = $query->paginate(5)->withQueryString();

        return view('dashboard.devices', compact('devices'));
    }
}
