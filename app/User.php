<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;
    protected $fillable = [
        'id','familyname','firstname','postal',
        'address','tel','email','birthday','password',
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', '',
    ];

    /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static $rules = array(
        'familyname' => 'required',
        'firstname' => 'required',
        'postal' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'email' => 'required|email',
        'birthday' => 'required|date',
        'password' => 'required'
    );

    public static $message = array(
        'familyname.required'=>'苗字は必ず入力してください',
        'firstname.required'=>'名前は必ず入力してください',
        'postal.required'=>'郵便局は必ず入力してください',
        'address.required'=>'住所は必ず入力してください',
        'tel.required'=>'電話番号は必ず入力してください',
        'email.required'=>'メールは必ず入力してください',
        'email.email'=>'メールアドレスが正しくありません',
        'birthday.required'=>'誕生日を必ず入力してください',
        'password.required'=>'パスワードを必ず入力してください'
    );
}
