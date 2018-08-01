<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Photo;
use Inicia\Propierty;
use Exception;
use Storage;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiertys_data = Propierty::with(['photos'])->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.modules.propierty.photo.index', compact('propiertys_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_propierty)
    {
        $propiertys_data = Propierty::select('id')->find($id_propierty);

        return view('dashboard.modules.propierty.photo.create', compact('propiertys_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_property)
    {
        $count = Photo::where('id_property', $id_property)->count();

        if ($count > 9) {
           return response()->json(['message' => 'Has superado el limite permitido de 10 imagenes']);
        }

        $files = $request->file('file');

        try {
            foreach($files as $file){
                $img = Image::make($file->getRealPath());
                $filename = str_random(20).'_'.md5($file->getClientOriginalName()); 
                Storage::disk('propierty')->put($filename, $img->encode());
                Photo::create([
                    'id_property' => $id_property, 
                    'img' => $filename, 
                    'status' => 1, 
                    'primary' => 0
                ]);
            }
            return response()->json(['message' => 'Total de archivos cargados: '.count($files)]);
            
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Photo::where('id_property', $id)->get();

        return view('dashboard.modules.propierty.photo.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('dashboard.modules.propierty.photo.edit', compact('photo'));
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
        $photo = Photo::find($id);

        $file = $request->file('file');

        if (is_null($file)) {
           $photo->update(['status' => $request->status, 'primary' => $request->primary]);
        }else{
            $img = Image::make($file->getRealPath());
            $filename = str_random(20).'_'.md5($file->getClientOriginalName()); 
            Storage::disk('propierty')->delete($photo->img);
            Storage::disk('propierty')->put($filename, $img->encode());
            $photo->update([
                'img' => $filename, 
                'status' => $request->status, 
                'primary' => $request->primary
            ]);
        }

        return response_request($photo, 'photos', 'index', 0, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        $photo->delete();

        return response_request_back($photo, 0, 1);

    }
}
