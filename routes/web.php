<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function(){
    Route::get('','userLoginSection')->name('landing.user_login_section');
    Route::post('process-login','processLogin')->name('landing.process_login');
    Route::get('dashboard','dashboardSection')->name('dashboard.index');
});
 
