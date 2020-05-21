<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //大内千夏 追加分 スタート && 河住圭紀　更新箇所
    public function index(Request $request)
    {

        $param=['message'=>'ログインしてください。'];
        return view('user.login',$param);
    }

    public function post(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $ide = DB::table('users')->where('email',$email)->value('id');
        $idp = DB::table('users')->where('password',$password)->value('id');
        if($ide==$idp)
        {
            $msg='ログインしました。';
            return view('user.index',['message'=>$msg]);
        }
        else
        {
            $msg='ログイン失敗しました';
            return view('user.login',['message'=>$msg]);
        }
    }
    //大内千夏 追加分 エンド　&& 河住圭紀　更新箇所

    //河住圭紀　引っ越し箇所 start
    // public function show(Request $request)
    // {
    //     $param = User::all();
    //     return view('user.show',['lists'=>$param]);
    // }
    //
    // public function search(Request $request)
    // {
    //     $key = $request->keyword;
    //     $items = User::where('firstname','like','%'.$key.'%')
    //                 ->orWhere('familyname','like','%'.$key.'%')
    //                 ->get();
    //     return view('user.show',['lists'=>$items]);
    // }
    //河住圭紀 引っ越し箇所　end
    public function detail()
    {
        $id = $request->id;
        $param = DB::table('inns')->where('id',$id)->first();
        return view('resevation.index',['items'=>$param]);
    }
    public function edit()
    {

    }

    public function update()
    {

    }

    public function del()
    {

    }

    public function remove()
    {

    }
}
