<?php

namespace Inicia\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inicia\Http\Controllers\Controller;
use Inicia\Http\Requests\PropiertyValidate;
use Inicia\Propierty;
use Inicia\City;
use Inicia\TypeOperation;
use Inicia\TypeProperty;
use Inicia\Owner;
use Inicia\Photo;
use Inicia\Tag;
use Inicia\User;
use Inicia\Area;
use Carbon\Carbon;
use Image;
use Storage;

class PropiertyController extends Controller
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
        $propiertys_data = Propierty::type_property($request->type_property)
             ->city($request->city)
        ->area($request->area)
        ->type_operation($request->type_operation)
            ->with(['photos' => function($query){
                $query->where('status', 1);
            }])->orderBy('id', 'DESC')->paginate(50);

            $type_property = TypeProperty::all(); 
            $city = City::all(); 
            
            $data = [$type_property, $city];

        return view('dashboard.modules.propierty.index', compact('propiertys_data', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city_areas = City::with(['areas'])->get();
        $type_operation = TypeOperation::all();
        $type_property = TypeProperty::all();
        $owner = Owner::all();
        $propierty = Propierty::get();
        
        $tags = [
            Tag::where('id_category', 1)->get(), 
            Tag::where('id_category', 2)->get(),
            Tag::where('id_category', 3)->get(),
        ];

        $all_users = User::all();

        $data = [$city_areas, $type_operation, $type_property, $owner, $propierty, $tags, $all_users];
        
        return view('dashboard.modules.propierty.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropiertyValidate $request)
    {
        $data = [

            // Caracteristicas
            'id_category' => $request->id_category,
            'title' => $request->property_title,
            'property_description' => $request->property_description,
            'slug' => str_slug($request->property_title),
            'id_type_operation' => $request->id_type_operation,
            'auxiliary_zone' => $request->auxiliary_zone,
            'plant' => $request->plant,
            'id_type_property' => $request->id_type_property,
            'type_street' => $request->type_street,
            'door' => $request->door,
            'id_city' => $request->id_city,
            'city_name' => $request->city_name,
            'property_address' => $request->property_address,
            'id_area' => $request->id_area,
            'number' => $request->number,
            'building' => $request->building,
            'anticretico' => $request->anticretico,

            // Distribución - Otros Datos
            'n_simple_rooms' => $request->n_simple_rooms,
            'n_rooms' => $request->n_rooms,
            'years_construction' => $request->years_construction,
            'n_bathrooms' => $request->n_bathrooms,
            'n_parking' => $request->n_parking,
            'community' => $request->community,
            'n_toilets' => $request->n_toilets,
            'n_plants' => $request->n_plants,
            'suite' => $request->suite,

            // Datos Internos  ↓

            /* Datos Inmobiliarios */
            'key_chain' => $request->key_chain, 
            'priority' => $request->priority,
            'created_by' => $request->created_by,
            'contact_by' => $request->contact_by,
            'important_announcement' => $request->important_announcement,
            
            /* Datos Catastrales */
            'c_number' => $request->c_number, 
            'c_ref' => $request->c_ref,
            'folio' => $request->folio,
            'register_of' => $request->register_of,
            'property_observation' => $request->property_observation,
            
            /* Datos de Venta */
            'real_estate_price' => $request->real_estate_price, 
            'owner_price' => $request->owner_price, 
            'avaluo' => $request->avaluo,
            'price_open_mode' => $request->price_open_mode,
            'commission_value' => $request->commission_value, 
            'calculation' => $request->calculation, 
            'in_exclusive_from' => $request->in_exclusive_from, 
            'in_exclusive_to' => $request->in_exclusive_to, 
            
            /* Datos de Alquiler */
            'rental_price' => $request->rental_price, 
            'rental_month' => $request->rental_month, 
            'honorarium' => $request->honorarium,
            'm_included' => $request->m_included, 
            'option_to_buy' => $request->option_to_buy, 
            'heating_included' => $request->heating_included, 

            /* Preferencias del arrendador */
            'minimum_period' => $request->minimum_period, 
            'admits_foreigners' => $request->admits_foreigners, 
            'max_tenants' => $request->max_tenants, 
            'pets_allowed' => $request->pets_allowed, 
            'maximum_period' => $request->maximum_period, 
            'students' => $request->students, 
            'preferences' => $request->preferences,
            
            /* Superficie */
            'useful_meters' => $request->useful_meters,
            'kitchen_meter' => $request->kitchen_meter,
            'meters_built' => $request->meters_built,
            'hall_metro' => $request->hall_metro,
            'meters_lot' => $request->meters_lot,
            'front_metro' => $request->front_metro,

            /* Datos de la Propiedad */
            'type_floor' => $request->type_floor, 
            'hot_water' => $request->hot_water, 
            'kitchen' => $request->kitchen, 

            /* Propietario */
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'cell_phone' => $request->cell_phone,
            'work_phone' => $request->work_phone,
            'description' => $request->description,
            'id_user' => id_user(),
            'status' => 1
        ];
        // dd($data);
        $propierty = Propierty::create($data);

        // tags
        $propierty->tags()->attach($request->tags);

        return response_request($propierty, 'propierty', 'index', 0, 2);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $propierty = Propierty::with(['user', 'tags', 'operation', 'type', 'city' => function($query){
            $query->with('areas');
        }])->find($id);
        
        // Todas la data
        $all_users = User::all();
        $cities = City::all();
        $areas = Area::all();
        $type_operation = TypeOperation::all();
        $type_property = TypeProperty::all();

        $data = [$propierty, $all_users, $cities, $areas, $type_operation, $type_property];

        return view('dashboard.modules.propierty.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propierty = Propierty::with(['user', 'tags', 'operation', 'type', 'city' => function($query){
            $query->with('areas');
        }])->find($id);
        
        // Todas la data
        $all_users = User::all();
        $cities = City::all();
        $areas = Area::all();
        $type_operation = TypeOperation::all();
        $type_property = TypeProperty::all();

        $data = [$propierty, $all_users, $cities, $areas, $type_operation, $type_property];

        return view('dashboard.modules.propierty.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropiertyValidate $request, $id)
    {
        $propierty = Propierty::find($id);

        $data = [

            // Caracteristicas
            'id_category' => $request->id_category,
            'title' => $request->property_title,
            'property_description' => $request->property_description,
            'slug' => str_slug($request->property_title),
            'id_type_operation' => $request->id_type_operation,
            'auxiliary_zone' => $request->auxiliary_zone,
            'plant' => $request->plant,
            'id_type_property' => $request->id_type_property,
            'type_street' => $request->type_street,
            'door' => $request->door,
            'id_city' => $request->id_city,
            'city_name' => $request->city_name,
            'property_address' => $request->property_address,
            'id_area' => $request->id_area,
            'number' => $request->number,
            'building' => $request->building,
            'anticretico' => $request->anticretico,

            // Distribución - Otros Datos
            'n_simple_rooms' => $request->n_simple_rooms,
            'n_rooms' => $request->n_rooms,
            'years_construction' => $request->years_construction,
            'n_bathrooms' => $request->n_bathrooms,
            'n_parking' => $request->n_parking,
            'community' => $request->community,
            'n_toilets' => $request->n_toilets,
            'n_plants' => $request->n_plants,
            'suite' => $request->suite,

            // Datos Internos  ↓

            /* Datos Inmobiliarios */
            'key_chain' => $request->key_chain, 
            'priority' => $request->priority,
            'created_by' => $request->created_by,
            'contact_by' => $request->contact_by,
            'important_announcement' => $request->important_announcement,
            
            /* Datos Catastrales */
            'c_number' => $request->c_number, 
            'c_ref' => $request->c_ref,
            'folio' => $request->folio,
            'register_of' => $request->register_of,
            'property_observation' => $request->property_observation,
            
            /* Datos de Venta */
            'real_estate_price' => $request->real_estate_price, 
            'owner_price' => $request->owner_price, 
            'avaluo' => $request->avaluo,
            'commission_value' => $request->commission_value, 
            'price_open_mode' => $request->price_open_mode,
            'calculation' => $request->calculation, 
            'in_exclusive_from' => $request->in_exclusive_from, 
            'in_exclusive_to' => $request->in_exclusive_to,  
            
            /* Datos de Alquiler */
            'rental_price' => $request->rental_price, 
            'rental_month' => $request->rental_month, 
            'honorarium' => $request->honorarium,
            'm_included' => $request->m_included, 
            'option_to_buy' => $request->option_to_buy, 
            'heating_included' => $request->heating_included, 

            /* Preferencias del arrendador */
            'minimum_period' => $request->minimum_period, 
            'admits_foreigners' => $request->admits_foreigners, 
            'max_tenants' => $request->max_tenants, 
            'pets_allowed' => $request->pets_allowed, 
            'maximum_period' => $request->maximum_period, 
            'students' => $request->students, 
            'preferences' => $request->preferences,
            
            /* Superficie */
            'useful_meters' => $request->useful_meters,
            'kitchen_meter' => $request->kitchen_meter,
            'meters_built' => $request->meters_built,
            'hall_metro' => $request->hall_metro,
            'meters_lot' => $request->meters_lot,
            'front_metro' => $request->front_metro,

            /* Datos de la Propiedad */
            'type_floor' => $request->type_floor, 
            'hot_water' => $request->hot_water, 
            'kitchen' => $request->kitchen, 

            /* Propietario */
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'cell_phone' => $request->cell_phone,
            'work_phone' => $request->work_phone,
            'description' => $request->description,
            'id_user' => id_user(),
            'status' => 1
        ];

        $propierty->update($data);

        return response_request($propierty, 'propierty', 'index', 0, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propierty = Propierty::find($id);

        $propierty->delete();

        return response_request_back($propierty, 0, 1);
    }
}
