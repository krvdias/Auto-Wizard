<?php

namespace App\Http\Controllers;

use App\Models\login_detail;
use Illuminate\Http\Request;

class login_detailContraller extends Controller
{
    public function AddCustomer() {
        return view('registration');
    }

    public function save(Request $request){

        login_detail::create([
            'user_name' => $request-> user_name,
            'password' => $request-> password
        ]);

        return redirect()->back();

    }

}
