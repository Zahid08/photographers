<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackModelZA extends Model
{
    public function trackId($min = 5, $max = 15) {
        $length = rand($min, $max);
        $string = '';
        $index = '0123456789abcdefghijklmnopqrstuvwxyzOLIVineLiMiTeDABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($i = 0; $i < $length; $i++) {
            $string .= $index[rand(0, strlen($index) - 1)];
        }
        return $string;
    }

}
