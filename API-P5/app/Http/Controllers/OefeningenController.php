<?php

namespace App\Http\Controllers;

use App\Models\oefeningen;
use Illuminate\Http\Request;

class OefeningenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return oefeningen::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return oefeningen::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function show(oefeningen $oefeningen)
    {
        return $oefeningen;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, oefeningen $oefeningen)
    {
        $oefeningen->update($request->all());
        return $oefeningen;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function destroy(oefeningen $oefeningen)
    {
        $oefeningen->delete();
        return response(['status'=>'success']);
    }
}
