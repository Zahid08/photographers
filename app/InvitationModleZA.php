<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InvitationModleZA extends Model
{
    use Notifiable;
    protected $table = 'invitions';
    protected $primaryKey = 'id';
    protected $guraded = ['id'];
    protected $fillable = [
        'users_track_id',
        'another_usertrack_id',
        'image',
        'invitaiton_status',
    ];
}
