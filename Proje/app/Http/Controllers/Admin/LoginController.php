<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){

        return view("admin.login");
    }
    public function login(Request $request)

    {

        if ($request->isMethod('post')){

            if (Auth::attempt(['email'=> $request->email,'password' =>$request->password,'role'=>'admin','active'=>'True']))
            {


              return redirect('/admin');

            }
            else{

                return redirect('/admin/login')->with('message','Hatalı Email ya da Şifre');


            }
        }


    }
    public function logout()

    {
        Auth::logout();

        return redirect('/admin/login')->with('message','Kullanıcı Çıkış Yaptı..');

    }
    public function register_form()

    {
        return view("admin.register");
    }
    public function register_save(Request $request)

    {
        DB::table('users')->insert(

            [   'name' =>$request->get('name'),
                'email' => $request->get('email'),
                'password'=>Hash::make($request->get('password'))
            ]
        );

        return redirect('/admin/register')->with('message','Kullanıcı Kaydedildi');

    }

}
