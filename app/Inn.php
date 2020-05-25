<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inn extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required|max:50',
      'postal' => 'required|regex:/\A\d{3}\-\d{4}\z/',
      'address' => 'required|max:50',
      'checkintime' => 'required',
      'checkouttime' => 'required',
      'code' => 'required|integer|between:0,6',
      'mail' => 'required|email|max:100',
  );

  public static $messages = array(
      'name.required' => '宿名は必須項目です。',
      'name.max' => '宿名は50文字以下で入力してください。',
      'address.required' => '住所は必須項目です。',
      'address.max' => '住所は50文字以下で入力してください。',
      'postal.required' => '郵便番号は必須項目です。',
      'postal.regex' => '郵便番号の形式に誤りがあります。',
      'checkintime.required' => 'チェックイン時間は必須項目です。',
      'checkouttime.required' => 'チェックアウト時間は必須項目です。',
      'code.required' => '分類コードは必須項目です。',
      'code.between' => '分類コードは0～6の数値で入力してください。',
      'mail.required' => 'メールアドレスは必須項目です。',
      'mail.email' => 'メールアドレスの形式に誤りがあります。',
      'mail.max' => 'メールアドレスは100文字以下で入力してください。',
  );
}
