<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactMap;
use Illuminate\Http\Request;

class ContactMapController extends Controller
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
        $datas = ContactMap::all(); 
        $contact = Contact::all(); 
        return view ('backend.contactMB', compact('datas', 'contact')); 
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
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMap $contactMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMap $contactMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $update = Contact::find($id); 
        
        $update->map =$request->map; 

        $update->save(); 

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactMap  $contactMap
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMap $contactMap)
    {
        //
    }
}
