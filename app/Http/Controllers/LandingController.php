<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function userLoginSection(Request $request){
        $viewData = [
            'section' => 'Login',
        ];
        return view('client.login',$viewData);
    }

    public function processLogin(Request $request){

        // dd($request);

        $email = $request->post('email');
        $password = $request->post('password');

        // dd($request->all());
        // dd($email);

        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => '1'])) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            // dd('good');
            return redirect()->route('dashboard.index'); 
        }else{
            dd('failed');
        }
    }
}
