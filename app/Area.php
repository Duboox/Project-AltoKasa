<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_city', 'name'];
    
    public function city()
    {
        return $this->belongsTo('Inicia\City', 'id_city');
    }
}
