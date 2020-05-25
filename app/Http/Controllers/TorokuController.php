<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TorokuController extends Controller
{
    public function register(){
       return view('user.register');
    }
    public function create(Request $request){
      $this->validate($request, User::$rules,User::$message);
      $user = New User;
      $form = $request->all();
      unset($form['_token']);
      $user->fill($form)->save();
      return view('user.register_done');
    }
}
