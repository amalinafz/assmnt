<?php

namespace App\Http\Controllers;

use App\DataTwo;
use Illuminate\Http\Request;
use database;

class DataTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = file_get_contents(base_path('./opr.json'));
        // '/database/data/opr.json';
        $content = json_decode(file_get_contents($path), true);
        print_r($content);
        // dd($content);
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
     * @param  \App\DataTwo  $dataTwo
     * @return \Illuminate\Http\Response
     */
    public function show(DataTwo $dataTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataTwo  $dataTwo
     * @return \Illuminate\Http\Response
     */
    public function edit(DataTwo $dataTwo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataTwo  $dataTwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataTwo $dataTwo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataTwo  $dataTwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTwo $dataTwo)
    {
        //
    }
}
