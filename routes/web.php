<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\TestimoniController;
use App\Models\Testi;
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

Route::get('/',[TestiController::class, 'index'] );
//=============Login Route
Route::get('/Login',[LoginController::class, 'loginstd'] )->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/superadmin/login',[LoginController::class, 'loginadm'] )->middleware('guest');
Route::post('/loginadmin', [LoginController::class, 'authenticate']);
//=============Login Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/member', DashboardPostController::class);
Route::resource('/dashboard/testimoni', TestimoniController::class)->middleware('auth');
Route::get('/ceo', function() {
    return view('layout\dashboard\admin\HomeInfo');
});
Route::get('/Profile', function () {
    return view('layout\std_web\profile',
        [
            "title" => "Profile"
        ]
    );
});
Route::get('/Legalitas', function () {
    return view('layout\std_web\legal',
        [
            "title" => "Legal"
        ]    
    );
});
Route::get('/Produk', function () {
    return view('layout\std_web\product',
    [
        "title" => "Produk"
    ]    
);
});
Route::get('/System', function () {
    return view('layout\std_web\system',
    [
        "title" => "System"
    ]    
);
});
Route::get('/Kontak', function () {
    return view('layout\std_web\contact',
    [
        "title" => "Kontak"
    ]    
);
});
Route::get('/{testimoni:slug}', [TestiController::class, 'show']);
