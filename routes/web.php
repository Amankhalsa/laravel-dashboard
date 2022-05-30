<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(["prefix" => "admin", "namespace" => "admin"], function() {
    // admin login routes.
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);
    // admin logout route.
    Route::get('/logout', [LoginController::class, 'logout']);

    // admin authenticated routes routes.
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::prefix('users')->group(function () {
            Route::get('/', [AdminController::class, 'listUsers']);
            Route::get('/add', [AdminController::class, 'getUser']);
            Route::post('/add', [AdminController::class, 'addUser']);
            Route::get('/edit/{id}', [AdminController::class, 'editUser']);
            Route::post('/update', [AdminController::class, 'updateUser']);

            Route::get('/delete/{id}', [AdminController::class, 'deleteUser']);
        });
    });
});

// *******************************************************************************************
// all other users related routes
// *******************************************************************************************

// home page route.
// Route::get('/', 'frontend\HomeController@index');
// authenticated routes.

// Route::group(["namespace" => "frontend"], function() {
//     // user login and register routes.
//     Route::post('/user/login', 'LoginController@login');
//     Route::post('/user/register', 'LoginController@register');
//     // user logout route.
//     Route::get('/logout', 'LoginController@logout');
//     // forget password routes.
//     Route::get('forget/password', 'LoginController@getForget');
//     Route::post('email/password', 'LoginController@forgetPassword');
//     Route::get('reset/password/{token}', 'LoginController@getReset');
//     Route::post('/update/password', 'LoginController@reset');

//     // authenticated routes.
//     Route::group(['middleware' => ['auth']], function () {
//         Route::get('/test', 'HomeController@test');
//     });
// });
