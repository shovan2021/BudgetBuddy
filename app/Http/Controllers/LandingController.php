<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function userLoginSection(Request $request){
        $viewData = [
            'section' => 'Login',
        ];
        return view('client.login',$viewData);
    }
}
