<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function myProfileSection(Request $request){

        $user = Auth::user();

        $viewData = [
            'section' => 'My Account',
            'user_details' => $user
        ];

        return view('client.my_profile',$viewData);
    }
}
