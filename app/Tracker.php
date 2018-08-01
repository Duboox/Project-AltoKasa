<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_property', 'ip_address'];

    // query scope

    public function scopeTracker_count($query)
    {
    	return $query->where('ip_address', request()->ip())->count();
    }

    public function scopeTracker_get($query)
    {
    	return $query->where('ip_address', request()->ip())->get();
    }

    // Relation
    public function propierty()
    {
        return $this->belongsTo('Inicia\Propierty', 'id_propierty');
    }

}
