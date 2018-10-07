<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){

        return view("admin.home");
    }

    public function settings()
    {
        $data=DB::select('SELECT * FROM settings');
        return view("admin.settings",['data' => $data]);

    }

    public function settingsupdate(Request $request, $id)
    {

        DB::table('settings')
            ->where('id',$id)
            ->update( [
                    'adi' =>$request->get('adi'),
                    'keywords' => $request->get('keywords'),
                    'description'=> $request->get('description'),
                    'adres' => $request->get('adres'),
                    'tel'=> $request->get('tel'),
                    'smtpserver'=> $request->get('smtpserver'),
                    'smtpemail'=> $request->get('smtpemail'),
                    'smtppaswords'=> $request->get('smtppaswords'),
                    'smtpport' => $request->get('smtpport'),
                    'iletisim' => $request->get('iletisim'),
                    'hakkimizda' => $request->get('hakkimizda')
                ]);

        return redirect('admin/settings')->with('success',$request->adi. ' Ayarlar Guncellendi..');


    }

    public function messages()
    {
        $data =DB::select('SELECT * FROM messages ORDER BY id DESC');

        return view('admin.mesaj_listesi',['datas' => $data]);
    }


    public function message_edit($id)
    {
        $data =DB::select('SELECT * FROM messages where id= '.$id);

        return view('admin.mesaj_duzenleme_formu',['veri' => $data]);
    }

    public function message_update(Request $request, $id)
    {


        DB::table('messages')
            ->where('id',$id)
            ->update( [
                'note' =>$request->get('note'),
                'status' => 'Okundu'

            ]);

        return redirect('admin/mesajlar')->with('success',$request->adi. 'Mesaj Okundu / Guncellendi..');


    }

}
