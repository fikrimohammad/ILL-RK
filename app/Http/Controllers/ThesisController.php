<?php

namespace App\Http\Controllers;

use App\Thesis;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('thesis.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('thesis.create');
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
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function show(Thesis $thesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function edit(Thesis $thesis)
    {
        //
        return view('thesis.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thesis $thesis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thesis  $thesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thesis $thesis)
    {
        //
    }
}
