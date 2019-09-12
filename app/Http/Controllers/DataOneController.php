<?php

namespace App\Http\Controllers;

use App\DataOne;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAPI;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client; 
use GuzzleHttp\Psr7;

class DataOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $url="https://api.bnm.gov.my/public/kijang-emas";
        // $test=$url->header('Accept', 'application/vnd.BNM.API.v1+json');
        // dd($test);
        // $headers = ['Accept' => 'application/vnd.BNM.API.v1+jso'];
        // $request = new Psr7\Request('GET', 'https://api.bnm.gov.my/public/opr', $headers);
        // // dd($request);
        

        // $client = new Client([
        //     'base_uri' =>'https://api.bnm.gov.my/public',
        // ]); 
        // $result = $client->request('GET', '/opr');
        // $body = $result->getBody()->getContents();
        // $data = json_decode($request->getBody()->getContents(), true);
        // // return $result;
        // // $body = $result->getBody();
        // dd($data);
        // echo $result->getBody();
        // $client = new Client();
        // $result = $client->get('https://ghibliapi.herokuapp.com/films', [
        //     'headers' => [
        //         // 'Accept' => 'application/vnd.BNM.API.v1+json',
        //         'Content-Type' => 'application/json',
        //     ],
        // ])->getBody()->getContents();
        // $request = new Psr7\Request('GET', 'https://api.bnm.gov.my/public/opr', [
        //     'headers' => [
        //         'Accept' => 'application/vnd.BNM.API.v1+json',
        //     ],
        // ])
        // echo $request->getStatusCode();
        
        $client = new Client();
        // $client->request('GET', 'https://api.bnm.gov.my/public/kijang-emas', [
        //     'headers' => [
        //         'Accept' => 'application/vnd.BNM.API.v1+json',
        //     ]
        // ]);
        // dd($client->getBody()->getContents());
        $result = $client->get('https://raw.githubusercontent.com/amalinafz/assmnt/master/database/data/kijang_emas.json');
        if ($result->getStatusCode() == 200) { // 200 OK
        $data = $result->getBody()->getContents();
        }

        dd($data);
        // $data=$result->getBody()->getContents();
        // $data = $result->getBody()->getContents();
        // $data = iconv("ISO-8859-1","UTF-8",$data);
        // $data = json_decode((string) $data, true);
        // $data = json_decode($data, true);
        // echo $data;
        // $data = $result->json();
        // dd($data);
        // dd($data);
        // dd($response);
        // $result = $client->get('https://api.bnm.gov.my/public/kijang-emas', [
        //     'headers' => [
        //         'Accept' => 'application/vnd.BNM.API.v1+json',
        //     ],
        // ]);
        
        return view('Data1', compact('data'));
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
     * @param  \App\DataOne  $dataOne
     * @return \Illuminate\Http\Response
     */
    public function show(DataOne $dataOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataOne  $dataOne
     * @return \Illuminate\Http\Response
     */
    public function edit(DataOne $dataOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataOne  $dataOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataOne $dataOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataOne  $dataOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataOne $dataOne)
    {
        //
    }
}
