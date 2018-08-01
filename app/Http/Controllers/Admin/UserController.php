<?php

namespace Inicia\Http\Controllers\Admin;

use Inicia\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Inicia\Notifications\UserActive;
use Illuminate\Http\Request;
use Notification;
use Inicia\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('id', 'DESC')->paginate(10);
        $roles = Role::orderBy('id', 'DESC')->get();

        return view('dashboard.modules.users.index', compact('data', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('dashboard.modules.users.edit', compact('user', 'roles'));
    }

    /**
     * confirmed active user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmed(Request $request, User $id)
    {   
        $confirmed = $id->update(['confirmed' => 1]);
        
        if ($confirmed) {
            Notification::send($id, new UserActive($id->name));
            return redirect()->route('users.index')->with('info', 'Usuario activado y notificado con éxito.');
        }

        return back()->with('error', 'Ha ocurrido un error, Usuario no activado.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, ['roles' => 'required']);
        
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')->with('info', 'Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
