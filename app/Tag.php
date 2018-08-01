<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'id_category', 'id_property'];

    // Relations
    public function category()
    {
        return $this->belongsTo('Inicia\Category', 'id_category');
    }

    public function propiertys()
    {
        return $this->belongsToMany('Inicia\Tag');
    }
}
