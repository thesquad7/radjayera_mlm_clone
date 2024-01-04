<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('layout.dashboard.admin.Homeinfo');
    }
    public function AdmMember(){
        return view('layout.dashboard.admin.memberlist',[
            'testi' => Testimoni::all()
        ]);
    }
}
