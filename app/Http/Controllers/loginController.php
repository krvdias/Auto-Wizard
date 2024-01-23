<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\login_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function SignInCustomer() {
        return view('signIn');
    }

    public function signIn(Request $request) {
        //validate request data

        $user_name = $request->input('user_name');
        $password = $request->input('password');

        $login_detail = login_detail::where('user_name', $user_name)->first();

        if($login_detail && Hash::check($password, $login_detail->password)) {
            login::create([
                'cus_id' => $login_detail->cus_id,
                'login_time' => now(),
                'login_type' => 'CUS',

            ]);

            $notification = [
                "message" => "You are SignIn"
            ];
    
            return redirect()->back()->with($notification);
        }else{

            $notification = [
                "message" => "User name or Password is Incorrect please check"
            ];
    
            return redirect()->back()->with($notification);
        }

    }

}
