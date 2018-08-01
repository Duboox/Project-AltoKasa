<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_property', 'img', 'status', 'primary'
    ];
    
    public function propierty()
    {
        return $this->belongsTo('Inicia\Propierty', 'id_propierty');
    }
}
