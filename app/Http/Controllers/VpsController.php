<?php

namespace App\Http\Controllers;

use App\vps;
use Illuminate\Http\Request;

class VpsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('roles:1');
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
     * @param  \App\vps  $vps
     * @return \Illuminate\Http\Response
     */
    public function show(vps $vps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vps  $vps
     * @return \Illuminate\Http\Response
     */
    public function edit(vps $vps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vps  $vps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vps $vps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vps  $vps
     * @return \Illuminate\Http\Response
     */
    public function destroy(vps $vps)
    {
        //
    }
}
