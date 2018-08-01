<?php

namespace Inicia;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Inicia\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'password', 'confirmed', 'avatar'];
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->hasMany('Inicia\Propierty','id_user');
    }
    
    public function photos()
    {
        return $this->hasMany('Inicia\Gallery', 'user_id');
    }

    public function socials()
    {
        return $this->hasMany('Inicia\Social', 'user_id');
    }

    public function clients()
    {
        return $this->hasMany('Inicia\client', 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany('Inicia\Notification', 'user_id');
    }

    //Notificación
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
