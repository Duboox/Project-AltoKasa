<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\TypePropertyValidate;
use Inicia\TypeProperty;

class TypePropertyController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_propertys = TypeProperty::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.propierty.type-propierty.index', compact('type_propertys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.propierty.type-propierty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypePropertyValidate $request)
    {
        $type_property = TypeProperty::create($request->all());
        return response_request($type_property, 'type-propierty', 'index', 0, 2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_property = TypeProperty::find($id);
        return view('dashboard.modules.propierty.type-propierty.edit', compact('type_property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypePropertyValidate $request, $id)
    {
        $type_propertys = TypeProperty::find($id);
        $type_propertys->update($request->all());
        return response_request($type_propertys, 'type-propierty', 'index', 1, 3);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_propertys = TypeProperty::find($id);
        $type_propertys->delete();
        return response_request_back($type_propertys, 0, 1);
    }
}
