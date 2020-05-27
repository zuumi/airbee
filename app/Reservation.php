<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'firstday' => 'required|date|after:yesterday',
        'endday' => 'required|date|after:yesterday',
        'guestscount' => 'required',
    );

    public static $messages = array(
        'firstday.required' => '予約日付は必須項目です。',
        'firstday.after' => '予約日付は今日以降にしてください。',
        'endday.required' => '予約日付は必須項目です。',
        'endday.after' => '予約日付は今日以降にしてください。',
        'guestscount.required' => '宿泊人数は必須です。',
    );


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
