<?php

namespace App\Http\Controllers;

use App\Models\sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return sports::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return sports::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function show(sports $sports)
    {
        return $sports;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sports $sports)
    {
        $sports->update($request->all());
        return $sports;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function destroy(sports $sports)
    {
        $sports->delete();
    }
}
