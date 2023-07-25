<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//首頁
Route::get('/', [App\Http\Controllers\HomeController::class , 'indexPage']);

Route::group(['prefix' => 'user'], function(){
    //使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        Route::get('/sign-up', [App\Http\Controllers\UserAuthController::class, 'signUpPage']);
        Route::post('/sign-up', [App\Http\Controllers\UserAuthController::class, 'signUpProcess']);
        // Route::get('/sign-in', 'UserAuthController@signInPage');
        // Route::post('/sign-in', 'UserAuthController@signInProcess');
        // Route::get('/sign-out', 'UserAuthController@signOut');
    });
});
