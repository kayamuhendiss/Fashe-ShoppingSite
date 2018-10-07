<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiparisController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $siparis=DB::select('SELECT s.*,u.name as uyeadsoy FROM siparis s,users u WHERE  u.id=s.user_id AND durum="Yeni"');

        return view('admin.siparis_yeni',compact('siparis'));

    }
    public function siparis_detay($id){

        $siparis=DB::select('SELECT * FROM siparis WHERE id=?',[$id]);
        $urunler=DB::select("select s.*,u.resim as resim 
                                   FROM siparis_detay s,urunlers u 
                                   WHERE s.urun_id=u.id AND s.siparis_id=?",[$id]);


        return view('admin.siparis_detay',compact('siparis','urunler'));

    }
    public function siparis_update(Request $request, $id)
    {
        //Duzenleme formundan gelen veritabanina update etme

        DB::table('siparis')
            ->where('id', $id)
            ->update(

                ['aciklama' => $request->get('aciklama'),
                    'durum' => $request->get('durum')

                ]);

        return redirect("admin/siparis_detay/$id")->with('success', ' Siparis Guncellendi..');
    }
    public function siparisler($durum)
    {

        $siparis=DB::select("SELECT s.*,u.name as uyeadsoy FROM siparis s,users u WHERE  u.id=s.user_id AND durum='$durum'");

        return view('admin.siparisler',compact('siparis','durum'));

    }

}
