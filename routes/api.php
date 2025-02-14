<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PondokController;
use App\Http\Controllers\PrayerServicesController;


// > /api/prayer-times/jakarta/2024-05-27

// tambahan
// Route::post('user',function (Resquest $request){
    //     $user = User::create([
        //         'name'=>$request->name,
        //         'email'=>$request->email,
        //         'password'=> Hash::make($request->password),
        //     ]);
        
        Route::get('prayer-times/{location}/{date}',[PrayerServicesController::class, 'index']);
        //     return response()->json($user,201);
        // });
        
        // Route::post('/post',[AuthController::class,'store']);
        Route::post('login', [AuthController::class, 'login'])->name('api.login');
        
        // tambahan
        // Route::post('posts', [PostController::class, 'store']);
        
        Route::middleware(['auth:sanctum'])->group(function () {
            
            Route::get('/user', function (Request $request) {
            return $request->user();
        });
        
        Route::apiResource('pondok', PondokController::class);
        Route::apiResource('user', UserController::class);
        Route::post('logout', [AuthController::class, 'logout'])->name('api.logout');
    });
    