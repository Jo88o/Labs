<?php

namespace App\Http\Controllers;

use App\Models\ServiceSP;
use Illuminate\Http\Request;

class ServiceSPController extends Controller
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
        $datas = ServiceSP::all(); 
        return view ('backend.servicesSPB', compact('datas'));
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
     * @param  \App\Models\ServiceSP  $serviceSP
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSP $serviceSP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceSP  $serviceSP
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSP $serviceSP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceSP  $serviceSP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceSP $serviceSP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceSP  $serviceSP
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceSP $serviceSP)
    {
        //
    }
}
