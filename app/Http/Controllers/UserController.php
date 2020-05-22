<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//河住圭紀 追加 0522 start
use App\Inn;
use App\Reservation;
//河住圭紀 追加 0522 end
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

//大内追加分　start
    public function shows(Request $request)
   {
     $items = Inn::all();
     return view('reservation.index', ['items' => $items], ['input' => '']);
   }

   public function searches(Request $request)
   {
     $item = Inn::where('name','like','%'.$request->input.'%')->get();
     return view('reservation.show',  ['input' => $request->input],[ 'item' => $item]);
   }

    public function detail(Request $request)
    {
        $id = $request->id;
        $param = DB::table('inns')->where('id',$id)->first();
        return view('reservation.inn',['items'=>$param]);
    }

    //大内追加分　end
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
