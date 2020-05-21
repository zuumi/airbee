<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//建部日向 追加分 start
use App\User;
//建部日向 追加分 end
//河住圭紀 追加分 start
use Illuminate\Support\Facades\DB;
use App\Inn;
//河住圭紀 追加分 end

class AdminController extends Controller
{
    protected static $delete = true;
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

    //河住圭紀　引っ越し先　スタート
    public function usershow(Request $request)
    {
        $param = User::all();
        return view('user.show',['lists'=>$param]);
    }

    public function usersearch(Request $request)
    {
        $key = $request->keyword;
        $items = User::where('firstname','like','%'.$key.'%')
                    ->orWhere('familyname','like','%'.$key.'%')
                    ->get();
        return view('user.show',['lists'=>$items]);
    }
    //河住圭紀　引っ越し箇所　エンド

    public function add(Request $request)
    {

    }

    public function create(Request $request)
    {

    }
    //河住圭紀 追加 0521
    public function edit(Request $request)
    {
        $param = DB::table('inns')->where('id',$request->id)->first();
        return view('inn.edit',['items'=>$param]);
    }

    public function update(Request $request)
    {
        $param = [
            'name'=>$request->name,
            'postal'=>$request->postal,
            'address'=>$request->address,
            'checkintime'=>$request->checkintime,
            'checkouttime'=>$request->checkouttime,
            'code'=>$request->code,
            'mail'=>$request->mail
        ];
        DB::table('inns')->where('id',$request->id)->update($param);
        return view('inn.edit_done');
    }

    public function del(Request $request)
    {
        $param = DB::table('inns')->where('id',$request->id)->first();
        return view('inn.del',['items'=>$param]);
    }

    public function delconfirm(Request $request)
    {
        $param = DB::table('inns')->where('id',$request->id)->first();
        return view('inn.del_confirm',['items'=>$param]);
    }

    public function remove(Request $request)
    {
        DB::table('inns')->where('id',$request->id)->delete();
        return view('inn.del_done');
    }
    //河住圭紀 追加 0521
}
