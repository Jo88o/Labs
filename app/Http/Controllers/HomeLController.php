<?php

namespace App\Http\Controllers;

use Image;
use App\Models\HomeL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = HomeL::all();
        return view ('backend.homeBB', compact('datas')); 
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
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function show(HomeL $homeL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function edit($homeL)
    {
        $datas = HomeL::find($homeL);
        return view ('backend/homeMB', compact('datas'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $homeL)
    {
        $update = HomeL::find($homeL); 

        $update->lien1 = $request->lien1;
        $update->lien2 = $request->lien2;
        $update->lien3 = $request->lien3;
        $update->lien4 = $request->lien4;

        $update->save(); 

        return redirect()->back();
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function editImg($id)
    {
        $editimg = HomeL::find($id);
        return view ('backend/homeBB', compact('editimg'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function updateImg(Request $request, $id)
    {
        $modif = HomeL::find($id); 

        Storage::disk('public')->delete('img/'.$modif->src);
        $modif->src = $request->file('src')->hashName();

        $modif->save(); 

        $request->file('src')->storePublicly('img', 'public'); 

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeL  $homeL
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeL $homeL)
    {
        //
    }
}