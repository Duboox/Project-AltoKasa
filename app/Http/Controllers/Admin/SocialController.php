<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\SocialValidate;
use Inicia\Social;
use Exception;
use Storage;
use Image;


class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials_data = Social::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.social.index', compact('socials_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialValidate $request)
    {
        $response = Social::create([
            'id_user' => id_user(), 
            'name'  => $request->name,
            'use'   => $request->use,
            'link'  => $request->link,
            'icon'  => $request->icon,
            'extras' => $request->extras,
            'title' => $request->title
        ]);

        if ($response) {
            return redirect()->route('social.index')->with('success', 'Guardado correctamente');
        }

        return redirect()->route('social.index')->with('success', 'No fue Guardado, correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social = Social::find($id);

        return view('dashboard.modules.social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialValidate $request, $id)
    {
        $social = Social::find($id);

        $social->update([
            'id_user' => id_user(), 
            'name'  => $request->name,
            'use'   => $request->use,
            'link'  => $request->link,
            'icon'  => $request->icon,
            'extras' => $request->extras,
            'title' => $request->title
        ]);

        if ($social) {
            return redirect()->route('social.index')->with('success', 'Guardado correctamente');
        }

        return redirect()->route('social.index')->with('success', 'No fue Guardado, correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = Social::find($id);

        $social->delete();

        if ($social) {
            return redirect()->route('social.index')->with('success', 'Eliminado correctamente');
        }

        return redirect()->route('social.index')->with('success', 'No fue Eliminado, correctamente.');
    }
}
