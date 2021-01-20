<?php

namespace App\Http\Controllers;

use App\Models\HomeI;
use Illuminate\Http\Request;

class HomeIController extends Controller
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
        $datas = HomeI::all(); 
        return view ('backend.homeIB', compact('datas'));
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
     * @param  \App\Models\HomeI  $homeI
     * @return \Illuminate\Http\Response
     */
    public function show(HomeI $homeI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeI  $homeI
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeI $homeI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeI  $homeI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = HomeI::find($id); 

        $update->name =$request->name; 
        $update->mail =$request->mail; 
        $update->subject =$request->subject; 
        $update->message =$request->message; 
        $update->button =$request->button; 
        $update->titre1 =$request->titre1; 
        $update->texte =$request->texte; 
        $update->titre2 =$request->titre2;
        $update->adresse =$request->adresse; 
        $update->phone =$request->phone; 
        $update->email =$request->email;  

        $update->save(); 

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeI  $homeI
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeI $homeI)
    {
        //
    }
}
