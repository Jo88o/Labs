<?php

namespace App\Http\Controllers;

use App\Models\HomeR;
use Illuminate\Http\Request;

class HomeRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HomeR::all(); 
        return view ('backend.homeRB', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeR  $homeR
     * @return \Illuminate\Http\Response
     */
    public function show(HomeR $homeR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeR  $homeR
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeR $homeR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeR  $homeR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeR::find($id); 
        
        $update->titre =$request->titre; 
        $update->soustitre =$request->soustitre; 
        $update->button =$request->button; 

        $update->save(); 

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeR  $homeR
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeR $homeR)
    {
        //
    }
}
