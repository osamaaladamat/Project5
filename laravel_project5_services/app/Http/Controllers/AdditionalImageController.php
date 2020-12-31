<?php

namespace App\Http\Controllers;

use App\Additional_image;
use Illuminate\Http\Request;

class AdditionalImageController extends Controller
{

    public function __construct()
    {
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
     * @param  \App\Additional_image  $additional_image
     * @return \Illuminate\Http\Response
     */
    public function show(Additional_image $additional_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Additional_image  $additional_image
     * @return \Illuminate\Http\Response
     */
    public function edit(Additional_image $additional_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Additional_image  $additional_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Additional_image $additional_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Additional_image  $additional_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Additional_image $additional_image)
    {
        //
    }
}
