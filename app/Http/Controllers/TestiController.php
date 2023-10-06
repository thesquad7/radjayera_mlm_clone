<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testi;

class TestiController extends Controller
{
    public function index() {
        return view('layout\std_web\welcome',
        [
            "title" => "Radjayera Jaya Utama",
            "testy" => Testi::all()
        ]
        );
    }
    public function testi($id){
            return view('layout\std_web\testi',
            [
                "title" => "Testimony",
                "data" => Testi::find($id)
            ]    
        );
    }
}
