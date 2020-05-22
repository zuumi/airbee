<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    protected $rules =[
        'user_id'=>'required',
        'inn_id'=>'required',
        'firstday'=>'date|required',
        'endday'=>'date|required',
        'guestscount'=>'interger|min:2|max:5'
    ];

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
