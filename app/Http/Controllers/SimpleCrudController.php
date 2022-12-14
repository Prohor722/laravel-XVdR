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
        $tasks = SimpleCrud::all();

        return view('task.index',['tasks'=>$tasks]);
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
        SimpleCrud::create($request->all());
        return redirect('/task');
    }
    public function show(SimpleCrud $simpleCrud)
    {
        return "show";
        dd($simpleCrud);
        //
    }
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
    public function destroy($id)
    {
        // return $id;
        SimpleCrud::where('id',$id)->delete();
        return redirect('/task');
    }
}
