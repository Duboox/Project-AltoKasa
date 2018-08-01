<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\OwnerValidate;
use Inicia\PropertyOwner;
use Inicia\Owner;

class PropiertyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.propierty.owner.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.propierty.owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerValidate $request)
    {
        if ($request->ajax()) {
            $owner = Owner::create($request->all());
            return $request->all();
        }else{
            $owner = Owner::create($request->all());
            return response_request($owner, 'owner', 'index', 1, 3);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);

        return view('dashboard.modules.propierty.owner.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerValidate $request, $id)
    {
        $owner = Owner::find($id);

        $owner->update($request->all());

        return response_request($owner, 'owner', 'index', 1, 3);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::find($id);

        $owner->delete();

        return response_request_back($owner, 0, 1);
    }
}
