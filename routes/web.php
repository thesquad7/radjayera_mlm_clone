<?php

use App\Http\Controllers\TestiController;
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
Route::get('/Login', function() {
    return view('layout.login.login');
});

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
Route::get('/superadmin/login', function() {
    return view('layout\login\adminlogin');
});
