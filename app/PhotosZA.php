<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PhotosZA extends Model
{
    use Notifiable;

    protected $table = 'Photos';
    protected $primaryKey = 'photo_id';
    protected $guraded = ['photo_id'];
    protected $fillable = [
        'users_track_id',
        'phototrack_id',
        'photo_title',
        'photo_description',
        'image',
        'visisbility',
        'users_email',
    ];


}
