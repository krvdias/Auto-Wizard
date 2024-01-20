<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer; // Customer model
use App\Models\login_detail;
use App\Models\vehicle;

class customerContraller extends Controller
{
    public function AddCustomer() {
        return view('registration');
    }

    public function save(Request $request){

        $customer = customer::create([
            'first_name' => $request-> first_name,
            'last_name' =>$request-> last_name,
            'address' =>$request-> combinedAddress,
            'cus_mobile' =>$request-> cus_mobile,
            'cus_email' =>$request-> cus_email,
            'cus_dob' =>$request-> cus_dob
        ]);

        login_detail::create([
            'user_name' => $request-> user_name,
            'password' => $request-> password,
            'cus_id' =>$customer-> id
        ]);

        /*vehicle::create([
            'v_type' => $request-> v_type,
            'last_service_date',
            'next_service_date',
            'vehicle_no' => $request-> vehicle_no,
            'cus_id' =>$customer-> id
        ]);*/

        app(login_detailContraller::class)->save($request,$customer->id);
        //app(vehicleContraller::class)->save($request,$customer->id);

        $notification = [
            "message" => "Customer has been added"
        ];

        return redirect()->back()->with($notification);

    }

}
