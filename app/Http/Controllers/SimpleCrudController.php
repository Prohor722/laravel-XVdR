<?php

namespace App\Http\Controllers;

use App\Models\SimpleCrud;
use Illuminate\Http\Request;

class SimpleCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "success";
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
     * @param  \App\Models\SimpleCrud  $simpleCrud
     * @return \Illuminate\Http\Response
     */
    public function show(SimpleCrud $simpleCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SimpleCrud  $simpleCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(SimpleCrud $simpleCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SimpleCrud  $simpleCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimpleCrud $simpleCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimpleCrud  $simpleCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimpleCrud $simpleCrud)
    {
        //
    }
}
