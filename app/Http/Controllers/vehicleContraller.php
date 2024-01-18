<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;

class vehicleContraller extends Controller
{
    public function AddCustomer() {
        return view('registration');
    }

    public function save(Request $request){

        $request->validate([
            // vehicle validate
            'v_type' => 'required|string',
        ]);

        vehicle::create([
            'v_type' => $request-> v_type,
            'last_service_date',
            'next_service_date',
            'vehicle_no' => $request-> vehicle_no
        ]);

        return redirect()->back();

    }
}
