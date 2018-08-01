<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\AvatarValidate;
use Inicia\User;
use Inicia\Propierty;
use Inicia\Owner;
use Exception;
use Storage;
use Image;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.modules.perfil.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        return view('dashboard.modules.perfil.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AvatarValidate $request, User $id)
    {
        $file = $request->file('avatar');

        $message = ['Datos actualizados correctamente', 'Ha ocurrido un error al validar, el avatar.'];

        if (is_null($file)) {
            $id->update(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone]);
            return redirect()->route('perfil.index')->with('success', $message[0]);
        }

        if (!is_null($file)) {
           $img = Image::make($file->getRealPath())->resize(130, 130);

           $filename = str_random(20).'_'.md5($file->getClientOriginalName());

           $id->update(['avatar' => $filename]);

           Storage::disk('avatars')->put($filename, $img->encode());

           Storage::disk('avatars')->delete($request->old_avatar); 

           return redirect()->route('perfil.index')->with('success', $message[0]);
        }
        
        return redirect()->route('perfil.index')->with('error', $message[1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function google_maps()
    {
        $propierty = Propierty::select('id', 'property_address')->paginate(10);

        return view(path_propierty('google-maps', 'index'), compact('propierty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function google_maps_find($id_propierty)
    {
        $propierty = Propierty::where('id', $id_propierty)->select('property_address')->first();

        return view(path_propierty('google-maps', 'show'), compact('propierty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function query_owner($id)
    {
        $owner = Owner::find($id);
        
        return $owner;
    }
}
