<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Http\Requests\StoreTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimoniRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        return view('layout.dashboard.admin.memberdetail', [
            'data'=>$testimoni
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('layout.dashboard.admin.memberdetailedit', [
            'data'=>$testimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimoniRequest $request, Testimoni $testimoni)
    {
        $validateD =[
            'tilte' => 'require|max:255',
            'body' => 'require',
        ];

        if($request->sluq != $testimoni->slug){
            $validateD['slug'] = 'require|unique:posts';
        }
        $validateData = $request->validate($validateD); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
    
}
