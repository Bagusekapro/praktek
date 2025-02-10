<?php

use Illuminate\Support\Facades\Route;


// eror
// Route::get('/login',function(){
//     return view('pages.login');
// });



// inti
Route::middleware(['auth'])->group(function(){
    Route::get('/',function(){
        return view('pages.dashboard');
    });
    
    
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/login', function () {
//     return view('login');
// });
// Route::middleware(['auth:sanctum'])->group(function () {

//     Route::get('/contacts', function () {
//         return view('contact');
//     });
// });



// Route::get('/',function(){
//             return view('pages.dashboard');
//         });
        
        
// Route::get('/login',function(){
//             return view('pages.login'); 
// });