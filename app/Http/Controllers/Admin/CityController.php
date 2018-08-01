<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\CityValidate;
use Inicia\City;

class CityController extends Controller
{
    /**
     * index
     *
     * @return Retorna vista en orden descendente con páginación de 10 datos
     */
    public function index()
    {
        $citys = City::orderBy('id', 'DESC')->paginate(10);
        
        return view(path_propierty('city', 'index'), compact('citys'));
    }

    /**
     * create
     *
     * @return Formulario
     */
    public function create()
    {
        return view(path_propierty('city', 'create'));
    }

    /**
     * store
     *
     * @return Realiza el almacenamiento de los datos introducido en el Formulario
     */
    public function store(CityValidate $request)
    {   
        $city = City::create($request->all());

        return response_request($city, 'city', 'index', 1, 3);
        
    }

    /**
     * edit
     *
     * @param  int $id
     * @return Consultamos la data según el id que viene por GET y pasamos la data a la vista
     */
    public function edit($id)
    {
        $city = City::find($id);
        
        return view(path_propierty('city', 'edit'), compact('city'));
    }

    /**
     * update
     *
     * @param  int  $id
     * @return Recibimos la data según su ID y la nueva data del request y la actualizamos
     */
    public function update(CityValidate $request, $id)
    {
        $city = City::find($id);

        $city->update($request->all());

        return response_request($city, 'city', 'index', 0, 2);
    }

    /**
     * destroy
     *
     * @param  int  $id
     * @return Recibimos la data según su ID y eliminamos ese registro físico...
     */
    public function destroy($id)
    {
        $city = City::find($id);
        
        $city->delete();

        return response_request_back($city, 0, 1);
    }
}
