<?php

namespace App\Http\Controllers;

use App\DataTwo;
use Illuminate\Http\Request;
use database;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client; 
use GuzzleHttp\Psr7;

class DataTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $result = $client->get('https://raw.githubusercontent.com/amalinafz/assmnt/master/database/data/opr.json');
        if ($result->getStatusCode() == 200) { // 200 OK
        $data = $result->getBody()->getContents();
        }
        dd($data);
        return view('Data3', compact('data'));
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
