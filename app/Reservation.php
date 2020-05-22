<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');


    public function inn()
    {
            return $this->belongsTo('App\Inn');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getInn()
    {
        return $this->inn->name;
    }
}
