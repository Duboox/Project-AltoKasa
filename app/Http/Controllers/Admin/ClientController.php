<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\ClientValidate;
use Inicia\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $clients = Client::identy_license($request->identy_license)->orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.client.create');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientValidate $request)
    {   
       $data = [
            'id_user' => id_user(), 
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,
            'identy_license' => $request->identy_license, 
            'email' => $request->email, 
            'phone' => $request->phone, 
            'status' => $request->status, 
            'type' =>  $request->type,
            'addres' => $request->addres
        ];

        $client = Client::create($data);

        return response_request($client, 'client', 'index', 1, 3);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('dashboard.modules.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->update($request->all());

        return response_request($client, 'client', 'index', 0, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        
        $client->delete();

        return response_request_back($client, 0, 1);
    }
}
