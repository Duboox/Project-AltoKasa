<?php

namespace Inicia\Http\Controllers\Web;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\SearchValidate;
use Inicia\Notifications\ContactMail;
use Inicia\Propierty;
use Inicia\City;
use Inicia\Area;
use Inicia\TypeProperty;
use Inicia\Tracker;
use Carbon\Carbon;
use Notification;
use Exception;
use Cache;
use Inicia\TypeOperation;
use Inicia\Category;

class WebController extends Controller
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
    public function index(Request $request)
    {   
        $propiertys_data = Propierty::with(['photos', 'type', 'city' => function($query){
            $query->with('areas');
        }])->orderBy('id', 'DESC')->paginate(10);

        if ($request->ajax()) {
            $view = view('web.paginate', compact('propiertys_data'))->render();
            return response()->json(['html' => $view]);
        }

        $data = [TypeProperty::all(), City::all(), TypeOperation::all()];

        return view('web.welcome', compact('propiertys_data', 'data'));
    }

    public function bienes(Request $request)
    {   
        $propiertys_data = Propierty::with(['photos', 'type', 'city' => function($query){
            $query->with('areas');
        }])->orderBy('id', 'DESC')->paginate(10);

        if ($request->ajax()) {
            $view = view('web.paginate', compact('propiertys_data'))->render();
            return response()->json(['html' => $view]);
        }

        $data = [TypeProperty::all(), City::all(), TypeOperation::all()];

        return view('web.bienes', compact('propiertys_data', 'data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * ->city($request->city)
     */
    public function search(Request $request)
    {
        $propiertys_data = Propierty::type_property($request->type_property)
        ->area($request->area)
        ->type_operation($request->type_operation)
        ->where('city_name', $request->city_name)
        ->with(['photos' => function($query){
            $query->where('status', 1);
        }])->limit(10)->get();

        if (count($propiertys_data) <= 0) {
            abort(404);
        }

        return view('web.show', compact('propiertys_data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select_dynamic(Request $request)
    {
        $areas = Area::where('id_city', $request->id_city)->pluck('id_city', 'name');

        return $areas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read_more($slug)
    {   
        if (is_numeric($slug)) {
            $propierty = Propierty::where('id', $slug)->with(['photos' => function($query){
                $query->where('status', 1);
            }])->get();

            if (count($propierty) == 0) {
                return abort(404);
            }
        }else{
            $propierty = Propierty::where('slug', $slug)->with(['photos' => function($query){
                $query->where('status', 1);
            }])->get();

            if (count($propierty) == 0) {
                return abort(404);
            }
        }

        return view('web.read_more', compact('propierty'));

        // $id_property = $propierty[0]['id'];
        // $tracker_count = Tracker::tracker_count();
        // $tracker_get = Tracker::tracker_get();  

        // return tracker_validate($propierty, $id_property, $tracker_count, $tracker_get);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read_more_propierty($id)
    {
        $propierty = Propierty::find($id);

        $data = [

            $propierty->city->name ,
            $propierty->city->areas[0]['name'],
            $propierty->operation->name,
            $propierty->type->name,
            IsNullForWebAjax($propierty->street_type),
            IsNullForWebAjax($propierty->surface),
            if_you_have($propierty->living_room),
            IsNullForWebAjax($propierty->parking),
            IsNullForWebAjax($propierty->floors_number),
            IsNullForWebAjax($propierty->toilet),
            IsNullForWebAjax($propierty->room),
            IsNullForWebAjax($propierty->door),
            IsNullForWebAjax($propierty->floor),
            IsNullForWebAjax($propierty->number),
            IsNullForWebAjax($propierty->building),
            IsNullForWebAjax($propierty->extra_area),
            IsNullForWebAjax($propierty->key_chain),              
            IsNullForWebAjax($propierty->notice_important),
            IsNullForWebAjax($propierty->observation),
            IsNullForWebAjax($propierty->description),
            IsNullForWebAjax($propierty->number_cadastral),
            IsNullForWebAjax($propierty->folio),
            IsNullForWebAjax($propierty->ref_cadastral),
            IsNullForWebAjax($propierty->iva),
            inStockAjax($propierty->status),

        ];

        return $data;
    }

    public function contactMail($id)
    {
        $propiertys_data = Propierty::with('photos')->find($id);

        if ($id == 'null') {
            return view('web.contact', ['propiertys_data' => null]);
        }

        return view('web.contact', compact('propiertys_data'));
    }

    public function queryPage($type)
    {
        $sale = Category::where('id', 1)->with(['propierty' => function($query){
            $query->with(['photos'])->get();
        }])->get();

        $rental = Category::where('id', 2)->with(['propierty' => function($query){
            $query->with(['photos'])->get();
        }])->get();

        $anticretico = Category::where('id', 3)->with(['propierty' => function($query){
            $query->with(['photos'])->get();
        }])->get();

        // return $sale[0]['propierty'][0]['title'];

        switch ($type) {
            case 'sale':
                return view('web.sale', compact('sale'));
            break;

            case 'rental':
                return view('web.rental', compact('rental'));
            break;

            case 'anticretico':
                return view('web.anticretico', compact('anticretico'));
            break;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
       $data = $request->all();

       try {
            Notification::route('mail', ['altoskasarealty@gmail.com'])->notify(
                new ContactMail($data)
            );
            return response()->json(['message' => 'Su mensaje fue enviado éxitosamente....']);
           
       } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
       }
    }
}
