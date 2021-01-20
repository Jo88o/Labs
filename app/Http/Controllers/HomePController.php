<?php

namespace App\Http\Controllers;

use App\Models\HomeP;
use Illuminate\Http\Request;

class HomePController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HomeP::all(); 

        

        return view ('backend.homePB', compact('datas'));
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
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function show(HomeP $homeP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeP $homeP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeP::find($id); 
        
        $update->titre =$request->titre; 
        $update->texte1 =$request->texte1; 
        $update->texte2 =$request->texte2; 
        $update->button =$request->button; 

        $update->save(); 

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeP $homeP)
    {
        //
    }
}
