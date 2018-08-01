<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
	protected $fillable = [
        'id_user', 'name', 'use', 'link', 'icon', 'extras', 'title' 
    ];

	public function social()
    {
        return $this->belongsTo('Inicia\Social', 'user_id');
    }
}
