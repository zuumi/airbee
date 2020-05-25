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

            //　河住圭紀　更新 0522 start
            session_start();
            $_SESSION['email']=DB::table('users')->where('email',$email)->value('email');
            $_SESSION['password']=DB::table('users')->where('password',$password)->value('password');
            $param = DB::table('users')->where('id',$idp)->first();
            return view('user.index',['message'=>$msg,'items'=>$param]);
            //　河住圭紀　更新 0522 end
        }
        else
        {
            $msg='ログイン失敗しました';
            //　河住圭紀　更新 0522 start
            if(isset($_SESSION['email']))
            {
                unset($_SESSION['email']);
            }
            if(isset($_SESSION['password']))
            {
                unset($_SESSION['password']);
            }
            //　河住圭紀　更新 0522 end
            return view('user.login',['message'=>$msg]);
        }
    }
    //大内千夏 追加分 エンド　&& 河住圭紀　更新箇所

//大内追加分　start
    public function shows(Request $request)
   {
     $items = Inn::all();
     return view('reservation.index', ['items' => $items], ['input' => '']);
   }

   public function searches(Request $request)
   {
     $items = Inn::where('name','like','%'.$request->input.'%')->get();
     return view('reservation.index',  ['input' => $request->input],[ 'items' => $items]);
   }

    public function detail(Request $request)
    {
        $id = $request->id;
        $inn = DB::table('inns')->where('id',$id)->first();
        session_start();
        $useremail = $_SESSION['email'];
        $userid = User::where('email',$useremail)->value('id');
        return view('reservation.inn',['inn'=>$inn,'user'=>$userid]);
    }

    //大内追加分　end

    // 河住圭紀　追加 0522
    public function home(Request $request)
    {
        session_start();
        if(isset($_SESSION['email']) && isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $param = User::where('email',$email)->first();
            return view('user.index',['items'=>$param]);
        }else{
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            return view('user.login');
            exit;
        }
    }
    public function logout(Request $request)
    {
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        return view('user.login');
        exit;
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $param = User::where('id',$id)->first();
        return view('user.edit',['items'=>$param]);
    }
    public function edit_confirm(Request $request)
    {
        $param = [
            'id'=>$request->id,
            'familyname'=>$request->familyname,
            'firstname'=>$request->firstname,
            'postal'=>$request->postal,
            'address'=>$request->address,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'birthday'=>$request->birthday,
            'password'=>$request->password
        ];
        return view('user.edit_confirm',$param);
    }

    public function update(Request $request)
    {
        $param = [
            'id'=>$request->id,
            'familyname'=>$request->familyname,
            'firstname'=>$request->firstname,
            'postal'=>$request->postal,
            'address'=>$request->address,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'birthday'=>$request->birthday,
            'password'=>$request->password
        ];
        User::where('id',$request->id)->update($param);
        return view('user.edit_done');
    }
    // 河住圭紀　追加 0522

    public function del()
    {

    }

    public function remove()
    {

    }


}
