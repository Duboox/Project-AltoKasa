<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Relations
    public function tags()
    {
        return $this->hasMany('Inicia\Tag', 'id_category');
    }

    public function propierty()
    {
        return $this->hasMany('Inicia\Propierty', 'id_category');
    }
}
