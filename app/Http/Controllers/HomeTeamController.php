<?php

namespace App\Http\Controllers;

use App\Models\HomeTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create = HomeTeam::all(); 
        return view('backend.homeTeamB', compact('create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTeam = new HomeTeam; 
        $newTeam->src = $request->file('src')->hashName();
        $newTeam->nom = $request->nom; 
        $newTeam->prenom = $request->prenom; 
        $newTeam->fonction = $request->fonction; 
        $newTeam->save(); 
        $request->file('src')->storePublicly('img/team/', 'public');
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeTeam  $homeTeam
     * @return \Illuminate\Http\Response
     */
    public function show(HomeTeam $homeTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeTeam  $homeTeam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeTeam::find($id); 
        return view ('backend.homeTeamEB', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeTeam  $homeTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeTeam::find($id); 
        Storage::disk('public')->delete('img/team/'.$update->src);
       $update->src = $request->file('src')->hashName();
       $update->nom = $request->nom; 
       $update->prenom = $request->prenom; 
       $update->fonction = $request->fonction; 

       $update->save(); 
       $request->file('src')->storePublicly('img/avatar/', 'public');

       return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeTeam  $homeTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = HomeTeam::find($id); 
        $delete->delete(); 
        Storage::disk('public')->delete('img/team/'.$delete->src);
        return redirect()->back(); 
    }
}
