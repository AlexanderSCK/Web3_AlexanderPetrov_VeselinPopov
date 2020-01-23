<?php

namespace App\Http\Controllers;

use App\Enter;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('app');
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
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function show(Enter $enter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function edit(Enter $enter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enter $enter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enter  $enter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enter $enter)
    {
        //
    }
    
}
