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
    //河住 更新　0526 start//////////////////////////////////////
    public function index(Request $request)
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $mail=$request->mail;
        $password=$request->password;
        if('admin@gmail.com'==$mail && 'himitu'==$password)
        {
            $request->session()->put('mail',$mail);
            $request->session()->put('password',$password);
            return view('admin.index');
        }else {
            $request->session()->flush();
            return view('admin.login');
        }
    }
    public function back(Request $request)
    {
            return view('admin.index');
    }

    public function logout(Request $request)
    {
            $request->session()->flush();
            return view('admin.login');
            exit;
    }
    //河住 更新　0526  end ///////////////////////////////////////////

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

    //河住圭紀　引っ越し先　スタート 0521
    public function usershow(Request $request)
    {
        $param = User::all();
        return view('admin.show',['lists'=>$param]);
    }

    public function usersearch(Request $request)
    {
        $key = $request->keyword;
        $items = User::where('firstname','like','%'.$key.'%')
                    ->orWhere('familyname','like','%'.$key.'%')
                    ->get();
        return view('admin.show',['lists'=>$items]);
    }
    //河住圭紀　引っ越し箇所　エンド 0521

    //大内千夏追加分　 start 0522
    public function useradd(Request $request)
    {
      return view('admin.register');
    }

    public function register_confirm(Request $request)
    {
      $admin = new Admin($request->all());
      $request->session()->put('admin', $admin);
      return view('admin.register_confirm', compact('admin'));
    }

    public function register_create(Request $request) {
      $admin = $request->session()->get('admin');
      $admin->save();
      return redirect('/admin/register_done');
    }

    public function register_done(Request $request)
    {
      $admin = $request->session()->get('admin');
      return view('admin.register_done', compact('admin'));
    }

    //大内千夏　追加分 end 0522

    //河住圭紀　追加 start 0522
    public function useredit(Request $request)
    {
        $id = $request->id;
        $param = User::where('id',$id)->first();
        return view('admin.edit',['items' => $param]);
    }
    public function userupdate(Request $request)
    {
        $id = $request->id;
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
        // 河住　更新 0525 start
        $this->validate($request, User::$rules,User::$message);
        // 河住　更新 0525 end
        User::where('id',$id)->update($param);
        return view('admin.edit_done');
    }
    public function userdel(Request $request)
    {
        $id = $request->id;
        $param = User::where('id',$id)->first();
        return view('admin.del',['items' => $param]);
    }
    public function userdel_confirm(Request $request)
    {
        $id = $request->id;
        $param = User::where('id',$id)->first();
        return view('admin.del_confirm',['items' => $param]);
    }
    public function userremove(Request $request)
    {
        $id = $request->id;
        $param =User::where('id',$id)->delete();
        return view('admin.del_done');
    }
    //河住圭紀　追加 start 0522

    //建部日向　追加分　スタート　0521
    public function add(Request $request)
    {
      return view('inn.add');
    }

    public function add_confirm(Request $request)
    {
    //バリデーション追加　（全2か所）　0522　建部
    $this->validate($request, Inn::$rules, Inn::$messages);
    //----------------------------------
    $inn = new Inn($request->all());
    $request->session()->put('inn', $inn);
    return view('inn.add_confirm', compact('inn'));
    }

    public function create(Request $request)
    {
    $inn = $request->session()->get('inn');
    $inn->save();
    return redirect('inn/add_done');
    }

    public function add_done(Request $request)
    {
    $inn = $request->session()->get('inn');
    return view('inn.add_done', compact('inn'));
    }
    //建部日向　追加分　エンド　0521

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
        //バリデーション追加　（全2か所）　0522　建部
       $this->validate($request, Inn::$rules, Inn::$messages);
       //----------------------------------
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
