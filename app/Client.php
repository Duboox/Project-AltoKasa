<?php

namespace Inicia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'first_name',
        'last_name',
        'identy_license',
        'email',
        'phone',
        'status',
        'type',
        'addres',
    ];

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->belongsTo('Inicia\user', 'id_user');
    }

    // Query Scope
    public function scopeIdenty_license($query, $identy_license)
    {
        if ($identy_license) {
            return $query->where('identy_license', $identy_license);
        }
    }

}

