<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'room_id','address'
    ];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
