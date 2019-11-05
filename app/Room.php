<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
      'type_id', 'name', 'description', 'price', 'available','total'
    ];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
