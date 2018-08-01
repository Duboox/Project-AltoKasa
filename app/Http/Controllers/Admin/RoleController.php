<?php

namespace Inicia\Http\Controllers\Admin;

use Inicia\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Inicia\Http\Requests\RoleValidate;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RoleController extends Controller
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
        $roles = Role::orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.modules.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('dashboard.modules.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleValidate $request)
    {
        $data = [
            'name' => $request->name, 
            'slug' => str_slug($request->slug), 
            'description' => $request->description
        ];

        $role = Role::create($data);

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index')->with('success', 'Rol guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('dashboard.modules.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::get();

        return view('dashboard.modules.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $data = [
            'name' => $request->name, 
            'slug' => str_slug($request->slug), 
            'description' => $request->description
        ];
        
        $role->update($data);

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index')->with('success', 'Rol modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('success', 'Eliminado correctamente');
    }
}
