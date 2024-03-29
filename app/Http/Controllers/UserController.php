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
        return view('user.login',['message'=>'ログインしてください。']);
    }

    public function post(Request $request)
    {
        //　河住圭紀　更新(全4か所１) 0525 start
        $email=$request->email;
        $userpass = User::where('email',$email)->value('password');
        $postpass = $request->password;
        if($userpass == $postpass)
        {
            session_start();
            $request->session()->put('email',$email);
            $request->session()->put('password',$postpass);
            $param = User::where('email',$email)->first();
            return view('user.index',['items'=>$param]);
            //　河住圭紀　更新  end
        }
        else
        {
            //　河住圭紀　更新 0525 start
            if(isset($_SESSION['email']))
            {
                unset($_SESSION['email']);
            }
            if(isset($_SESSION['password']))
            {
                unset($_SESSION['password']);
            }
            return view('user.login');
            //　河住圭紀　更新 0525 end
        }
    }
    //大内千夏 追加分 エンド　&& 河住圭紀　更新箇所

//大内追加分　start

    //河住　0525 start
    public function shows(Request $request)
   {
     $items = Inn::all();
     $email = $request->session()->get('email');
     $userid = User::where('email',$email)->value('id');
     return view('reservation.index', ['items' => $items], ['input' => ''],['userid'=>$userid]);
   }
   //河住　0525 end

   public function searches(Request $request)
   {
     $items = Inn::where('name','like','%'.$request->input.'%')->get();
     return view('reservation.index',  ['input' => $request->input],[ 'items' => $items]);
   }
   // 河住　更新　0525
    public function detail(Request $request)
    {
        $id = $request->id;
        $inn = Inn::where('id',$id)->first();
        session_start();
        $useremail = $request->session()->get('email');
        $userid = User::where('email',$useremail)->value('id');
        return view('reservation.inn',['inn'=>$inn,'user'=>$userid]);
    }
    // 河住　更新　0525

    //大内追加分　end

    // 河住 更新  更新 0526
    public function home(Request $request)
    {
        $email = $request->session()->get('email');
        $param = User::where('email',$email)->first();
        return view('user.index',['items'=>$param]);
    }
    // 河住 0526 更新　end

    public function logout(Request $request)
    {
        $request->session()->flush();
        $msg= 'ログインしてください';
        return view('user.login',['message'=>$msg]);
    }
    // 河住 0526 更新　end

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
        $this->validate($request, User::$rules,User::$message);
        User::where('id',$request->id)->update($param);
        return view('user.edit_done');
    }
    // 河住圭紀　追加 0522


        //大内千夏 追加分 start0522
        public function del(Request $request)
        {
            $param = DB::table('users')->where('id',$request->id)->first();
            return view('user.del',['items'=>$param]);
        }

        public function delconfirm(Request $request)
        {
            $param = DB::table('users')->where('id',$request->id)->first();
            return view('user.del_confirm',['items'=>$param]);
        }

        public function remove(Request $request)
        {
            DB::table('users')->where('id',$request->id)->delete();
            return view('user.del_done');
        }
        //大内千夏 追加分　0522

}
