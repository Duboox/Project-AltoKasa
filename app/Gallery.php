<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'title', 'brief_description', 'filename'];

    public function photos()
    {
        return $this->belongsTo('Inicia\User', 'user_id');
    }
}
