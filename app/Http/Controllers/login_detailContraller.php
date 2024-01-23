<?php

namespace App\Http\Controllers;

use App\Models\login_detail;
use App\Http\Controllers\customerContraller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class login_detailContraller extends Controller
{
    public function AddCustomer() {
        return view('registration');
    }

    public function save(Request $request, $customerId){

        login_detail::create([
            'user_name' => $request-> user_name,
            'password' => Hash::make($request->input('password')),
            'cus_id' =>$customerId
        ]);

        return redirect()->back();

    }

}
