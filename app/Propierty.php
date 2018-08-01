<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propierty extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        
        // Caracteristicas
        'id_category',
        'title',
        'property_description',
        'slug',
        'id_type_operation',
        'auxiliary_zone',
        'plant',
        'id_type_property',
        'type_street',
        'door',
        'id_city',
        'city_name',
        'property_address',
        'id_area',
        'number',
        'building',
        'anticretico',

        // Distribución - Otros Datos
        'n_simple_rooms',
        'n_rooms',
        'years_construction',
        'n_bathrooms',
        'n_parking',
        'community',
        'n_toilets',
        'n_plants',
        'suite',

        // Datos Internos  ↓

        /* Datos Inmobiliarios */
        'key_chain', 
        'priority',
        'created_by',
        'contact_by',
        'important_announcement',
        
        /* Datos Catastrales */
        'c_number', 
        'c_ref',
        'folio',
        'register_of',
        'property_observation',
        
        /* Datos de Venta */
        'real_estate_price', 
        'owner_price', 
        'avaluo', 
        'commission_value',
        'price_open_mode',
        'calculation', 
        'in_exclusive_from', 
        'in_exclusive_to', 
        
        /* Datos de Alquiler */
        'rental_price', 
        'rental_month', 
        'honorarium',
        'm_included', 
        'option_to_buy', 
        'heating_included', 

        /* Preferencias del arrendador */
        'minimum_period', 
        'admits_foreigners', 
        'max_tenants', 
        'pets_allowed', 
        'maximum_period', 
        'students', 
        'preferences',
        
        /* Superficie */
        'useful_meters',
        'kitchen_meter',
        'meters_built',
        'hall_metro',
        'meters_lot',
        'front_metro',

        /* Datos de la Propiedad */
        'type_floor', 
        'hot_water', 
        'kitchen', 

        /* Propietario */
        'first_name',
        'last_name',
        'phone',
        'cell_phone',
        'work_phone',
        'description',
        'id_user',
        'status'
    ];

    protected $dates = ['deleted_at'];

    // Relations
    public function user()
    {
        return $this->belongsTo('Inicia\User', 'id_user');
    }

    public function operation()
    {
        return $this->belongsTo('Inicia\TypeOperation', 'id_type_operation');
    }

    public function type()
    {
        return $this->belongsTo('Inicia\TypeProperty', 'id_type_property');
    }	

    public function city()
    {
        return $this->belongsTo('Inicia\City', 'id_city');
    }

    public function photos()
    {
        return $this->hasMany('Inicia\Photo', 'id_property');
    }

    public function hits()
    {
        return $this->hasMany('Inicia\Tracker', 'id_property');
    }

    public function tags()
    {
        return $this->belongsToMany('Inicia\Tag');
    }

    public function categories()
    {
        return $this->belongsTo('Inicia\Category', 'id_category');
    }

    // Query Scope
    public function scopeType_property($query, $id_type_property)
    {
        if ($id_type_property) {
            return $query->where('id_type_property', $id_type_property);
        }
    } 

    public function scopeCity($query, $id_city)
    {
        if ($id_city) {
            return $query->where('id_city', $id_city);
        }
    }

    public function scopeArea($query, $id_area)
    {
        if ($id_area) {
            return $query->where('id_area', $id_area);
        }
    } 

    // public function scopePrice_min_max($query, $min_price, $max_price)
    // {
    //     if ($min_price && $max_price) {
    //         return $query->whereBetween('real_estate_price', [$min_price, $max_price]);
    //     }
    // } 
    
    public function scopeType_operation($query, $type_operation)
    {
        if ($type_operation) {
            return $query->where('id_type_operation', $type_operation);
        }
    } 

}
