<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\AreaValidate;
use Inicia\Area;
use Inicia\City;

class AreaController extends Controller
{
    /**
     * index
     *
     * @return Retorna vista en orden descendente con páginación de 10 datos
     */
    public function index()
    {
        $areas = Area::orderBy('id', 'DESC')->paginate(10);
        
        return view(path_propierty('area', 'index'), compact('areas'));
    }

    /**
     * create
     *
     * @return Formulario dinamico que recibe las ciudades
     */
    public function create()
    {
        $citys = City::all();
        
        return view(path_propierty('area', 'create'), compact('citys'));
    }

    /**
     * store
     *
     * @return Realiza el almacenamiento de los datos introducido en el Formulario
     */
    public function store(AreaValidate $request)
    {
        $area = Area::create($request->all());
        
        return response_request($area, 'area', 'index', 0, 2);
    }

    /**
     * edit
     *
     * @param  int $id
     * @return Consultamos la data según el id que viene por GET y pasamos la data a la vista
     */
    public function edit($id)
    {
        $areas = Area::find($id);
        
        $city = City::all();
       
        $data = [$areas, $city];
        
        return view(path_propierty('area', 'edit'), compact('data'));
    }

    /**
     * update
     *
     * @param  int  $id
     * @return Recibimos la data según su ID y la nueva data del request y la actualizamos
     */
    public function update(Request $request, $id)
    {
        $area = Area::find($id);
        
        $area->update($request->all());
        
        return response_request($area, 'area', 'index', 1, 3);
    }

    /**
     * destroy
     *
     * @param  int  $id
     * @return Recibimos la data según su ID y eliminamos ese registro físico...
     */
    public function destroy($id)
    {
        $area = Area::find($id);

        $area->delete();
        
        return response_request_back($area, 0, 1);
    }
}
