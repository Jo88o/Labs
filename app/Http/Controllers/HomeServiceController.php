<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;

class HomeServiceController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = HomeService::all();
        return view ('backend.homeServiceB', compact('service')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newService = new HomeService; 
        $newService->titre = $request->titre; 
        $newService->icon = $request->icon; 
        $newService->para = $request->para; 
        $newService->save(); 
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function show(HomeService $homeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeService::find($id); 
        return view ('backend.homeServiceEB', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeService::find($id); 

       $update->titre = $request->titre; 
       $update->icon = $request->icon; 
       $update->para = $request->para; 
       

       $update->save(); 

       return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeService  $homeService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = HomeService::find($id); 
        $delete->delete(); 
        return redirect()->back(); 
    }
}
