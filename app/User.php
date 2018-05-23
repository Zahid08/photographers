<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'users_id';
    protected $guraded = ['users_id'];
    protected $fillable = [
        'users_name',
        'email',
        'mobile_number',
        'address',
        'image',
        'users_veryfication_status',
        'users_track_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

}
