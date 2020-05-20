<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//建部日向 追加分 start
use App\User;
//建部日向 追加分 end

//河住圭紀 追加分 start
use App\Inn;
//河住圭紀 追加分 end

class AdminController extends Controller
{
    //河住圭紀 追加分 スタート
    public function index(Request $request)
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        session_start();
        $mail=$request->mail;
        $password=$request->password;
        if('aribee@airbee.com'==$mail && 'himitu'==$password)
        {
            $_SESSION['mail']=$mail;
            $_SESSION['password']=$password;
            return view('admin.index');
        }else {
            unset($_SESSION['mail']);
            unset($_SESSION['password']);
            return view('admin.login');
            exit;
        }
    }
    public function back(Request $request)
    {
        session_start();
        if('aribee@airbee.com'== $_SESSION['mail'] && 'himitu'==$_SESSION['password'])
        {
            return view('admin.index');
        }else {
            unset($_SESSION['mail']);
            unset($_SESSION['password']);
            return view('admin.login');
            exit;
        }
    }

    public function logout(Request $request)
    {
            session_start();
            unset($_SESSION['mail']);
            unset($_SESSION['password']);
            return view('admin.login');
            exit;
    }
    //河住圭紀 追加分 エンド

    //建部日向　追加分　スタート
    public function show(Request $request)
    {
      $items = Inn::all();
      return view('inn.index', ['items' => $items], ['input' => '']);
    }

    public function search(Request $request)
    {
      $item = Inn::find($request->input);
      $param = ['input' => $request->input, 'item' => $item];
      return view('inn.show', $param);
    }
    //建部日向　追加分　エンド

    public function add(Request $request)
    {

    }

    public function create(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function del(Request $request)
    {

    }

    public function remove(Request $request)
    {

    }

}
