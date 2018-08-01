<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;

class LocalNotification extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'result', 'subject', 'email', 'message'
    ];


    public function user()
    {
        return $this->belongsTo('Inicia\user', 'id_user');
    }

}
