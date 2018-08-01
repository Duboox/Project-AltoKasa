<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\GalleryValidate;
use Inicia\Gallery;
use Exception;
use Storage;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Gallery::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.modules.gallery.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.modules.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryValidate $request)
    {
        $files = $request->file('file');

        try {
            foreach($files as $file){
                $img = Image::make($file->getRealPath())->resize(1920, 665);
                $filename = str_random(20).'_'.md5($file->getClientOriginalName()); 
                Storage::disk('gallery')->put($filename, $img->encode());
                Gallery::create([
                    'id_user' => id_user(), 
                    'title' => $request->title, 
                    'brief_description' => $request->brief_description, 
                    'filename' => $filename
                ]);
            }
            return response()->json(['message' => 'Total de archivos cargados: '.count($files)]);
            
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
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
        $galleries = Gallery::find($id);

        return view('dashboard.modules.gallery.edit', compact('galleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryValidate $request, $id)
    {
        $files = $request->file('file');

        try {
            foreach($files as $file){
                $img = Image::make($file->getRealPath());
                $filename = str_random(20).'_'.md5($file->getClientOriginalName()); 
                Storage::disk('gallery')->put($filename, $img->encode());
                $imagen = Gallery::find($id);
                Storage::disk('gallery')->delete($imagen->filename);
                $imagen->update([
                    'id_user' => id_user(), 
                    'title' => $request->title, 
                    'brief_description' => $request->brief_description, 
                    'filename' => $filename
                ]);
            }
            return response()->json(['message' => 'Total de archivos cargados: '.count($files)]);
            
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries = Gallery::find($id);
        $galleries->delete();

        return back()->with('success', 'Eliminado correctamente');
    }
}
