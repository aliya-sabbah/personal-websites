<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOneController;

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function () {
        return 'home';
});
    // user, profile
Route::get('/user/profile/{id}',function ($id) {
        return 'user id:'.$id;
});*/
// site1/home , about us , contact us
 Route::prefix('site1')->controller(SiteOneController::class)->group(function (){
        Route::get('/home','home');
        Route::get('/about','about');  
        Route::get('/contact','contact');
        Route::get('/msg/{id}','msg');  
        
});


