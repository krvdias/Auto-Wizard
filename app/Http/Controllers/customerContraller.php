<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer; // Customer model

class customerContraller extends Controller
{
    public function AddCustomer() {
        return view('registration');
    }

    public function save(Request $request){

        customer::create([
            'first_name' => $request-> first_name,
            'last_name' =>$request-> last_name,
            'address' =>$request-> combinedAddress,
            'cus_mobile' =>$request-> cus_mobile,
            'cus_email' =>$request-> cus_email,
            'cus_dob' =>$request-> cus_dob
        ]);

        $notification = [
            "message" => "Customer has been added"
        ];

        return redirect()->back()->with($notification);

    }

}
