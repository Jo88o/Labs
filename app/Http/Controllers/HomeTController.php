<?php

namespace App\Http\Controllers;

use App\Models\HomeT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeTController extends Controller
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
        $create = HomeT::all(); 
        return view ('backend.homeTB', compact('create')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTesti = new HomeT; 
        $newTesti->temoignage = $request->temoignage; 
        $newTesti->titre = $request->titre;
        $newTesti->src = $request->file('src')->hashName();
        $newTesti->nom = $request->nom; 
        $newTesti->prenom = $request->prenom; 
        $newTesti->fonction = $request->fonction; 
        $newTesti->save(); 
        $request->file('src')->storePublicly('img/avatar', 'public');
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeT  $homeT
     * @return \Illuminate\Http\Response
     */
    public function show(HomeT $homeT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeT  $homeT
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $edit = HomeT::find($id); 
        return view ('backend.homeTEB', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeT  $homeT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeT::find($id); 
        Storage::disk('public')->delete('img/avatar/'.$update->src);
       $update->src = $request->file('src')->hashName();
       $update->temoignage = $request->temoignage; 
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
     * @param  \App\Models\HomeT  $homeT
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = HomeT::find($id); 
        $delete->delete(); 
        Storage::disk('public')->delete('img/avatar/'.$delete->src);
        return redirect()->back(); 
    }
}
