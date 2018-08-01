<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Permission;
use Carbon\Carbon;
use Inicia\User;

class PermissionController extends Controller
{
    /**
     * __construct
     *
     * @return Idioma seleccionado
     */

    public function __construct()
    {
        Carbon::setlocale(config('app.locale'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.modules.roles.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('dashboard.modules.roles.permission.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name, 
            'slug' => $request->slug, 
            'description' => $request->description
        ];

        $role = Permission::create($data);

        return redirect()->route('permissions.index')->with('success', 'Permiso guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('dashboard.modules.roles.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('dashboard.modules.roles.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $data = [
            'name' => $request->name, 
            'slug' => str_slug($request->slug), 
            'description' => $request->description
        ];
        
        $permission->update($data);

        return redirect()->route('roles.index')->with('success', 'Permiso modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return back()->with('success', 'Eliminado correctamente');
    }
}
