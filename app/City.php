<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_city', 'name'];

    public function areas()
    {
        return $this->hasMany('Inicia\Area', 'id_city');
    }
}
