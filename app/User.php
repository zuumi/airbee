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
         'familyname' => 'required|max:50',
         'firstname' => 'required|max:50',
         'postal' => 'required|regex:/\A\d{3}\-\d{4}\z/',
         'address' => 'required|max:50',
         'tel' => 'required',
         'email' => 'required|email|max:100',
         'birthday' => 'required|date',
         'password' => 'required|max:10',
    );

    public static $message = array(
        'familyname.required'=>'苗字は必ず入力してください',
        'familyname.max' => '苗字は50文字以下で入力してください。',
        'firstname.required'=>'名前は必ず入力してください',
        'firstname.max' => '名前は50文字以下で入力してください。',
        'postal.required'=>'郵便局は必ず入力してください',
        'postal.regex' => '郵便番号の形式に誤りがあります。',
        'address.required'=>'住所は必ず入力してください',
        'address.max' => '住所は50文字以下で入力してください。',
        'tel.required'=>'電話番号は必ず入力してください',
        'email.required'=>'メールは必ず入力してください',
        'email.email'=>'メールアドレスが正しくありません',
        'email.max' => 'メールアドレスは100文字以下で入力してください。',
        'birthday.required'=>'誕生日を必ず入力してください',
        'password.required'=>'パスワードを必ず入力してください',
        'password.max' => 'パスワードは10文字以下で入力してください。',
    );
}
