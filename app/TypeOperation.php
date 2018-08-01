<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class TypeOperation extends Model
{
	protected $fillable = ['name', 'status'];
    
    public function propiertys()
    {
        return $this->hasMany('Inicia\Propierty','id_type_operation');
    }
}
