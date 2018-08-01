<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\TypeOperationValidate;
use Inicia\TypeOperation;

class TypeOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_operations = TypeOperation::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.propierty.type-operation.index', compact('type_operations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.propierty.type-operation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeOperationValidate $request)
    {
        $type_operation = TypeOperation::create($request->all());
        return response_request($type_operation, 'type-operation', 'index', 0, 2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_operation = TypeOperation::find($id);
        return view('dashboard.modules.propierty.type-operation.edit', compact('type_operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeOperationValidate $request, $id)
    {
        $type_operation = TypeOperation::find($id);
        $type_operation->update($request->all());
        return response_request($type_operation, 'type-operation', 'index', 1, 3);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_operation = TypeOperation::find($id);
        $type_operation->delete();
        return response_request_back($type_operation, 0, 1);
    }
}
