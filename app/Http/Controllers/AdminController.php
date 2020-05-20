<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //河住圭紀 追加分　スタート
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

    public function logout(Request $request)
    {
            session_start();
            unset($_SESSION['mail']);
            unset($_SESSION['password']);
            return view('admin.login');
            exit;
    }
    //河住圭紀 追加分  エンド
    public function usershow(Request $request)
    {
        $param = User::orderBy('name','asc');
        return view('user.show',['lists'=>$param]);
    }

    public function innshow(Request $request)
    {
        return view('inn.show');
    }

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
