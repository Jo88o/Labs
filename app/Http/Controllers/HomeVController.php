<?php

namespace App\Http\Controllers;

use App\Models\HomeV;
use Illuminate\Http\Request;

class HomeVController extends Controller
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
        $datas = HomeV::all(); 
        return view ('backend.homeVB', compact('datas'));
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
     * @param  \App\Models\HomeV  $homeV
     * @return \Illuminate\Http\Response
     */
    public function show(HomeV $homeV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeV  $homeV
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeV $homeV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeV  $homeV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeV::find($id); 
        
        $update->src =$request->src;

        $update->save(); 

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeV  $homeV
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeV $homeV)
    {
        //
    }
}
