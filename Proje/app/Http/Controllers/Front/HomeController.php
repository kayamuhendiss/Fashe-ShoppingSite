<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){

        $data=DB::select('SELECT * FROM settings');
        $turler =DB::select('SELECT * FROM turler ORDER BY adi');
        $kategori=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $yeniler =DB::select('SELECT * FROM urunlers ORDER BY adi');
        $populer =DB::select('SELECT * FROM urunlers ORDER BY id');
        $menu="home";

        return view("front.home",compact('turler','kategori','yeniler','populer','data','menu'));
    }

    public function urun($id){

        $data=DB::select('SELECT * FROM settings');
        $turler =DB::select('SELECT * FROM turler ORDER BY adi');
        $kategori=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $urun=DB::select('SELECT * FROM urunlers WHERE id=?',[$id]);
        $resimler =DB::select('SELECT * FROM images WHERE urun_id=?',[$id]);
        $menu="urun";

        return view("front.urun_detay",compact('turler','kategori','urun','resimler','menu','data'));


    }

    public function hakkimizda(){

        $data=DB::select('SELECT * FROM settings');
        $kategori=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $menu="hakkimizda";


        return view("front.hakkimizda",compact('kategori','data','menu'));
    }

    public function iletisim(){

        $data=DB::select('SELECT * FROM settings');
        $kategori=DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $menu="iletisim";


        return view("front.iletisim",compact('kategori','data','menu'));
    }


    public function bize_yazin_formu(){

            $data=DB::select('SELECT * FROM settings');
            $kategori=DB::select('SELECT * FROM kategoriler ORDER BY adi');
            $menu="bizeyazin";


            return view("front.bizeyazin",compact('kategori','data','menu'));
        }

    public function bize_yazin_kaydet(Request $request){

        DB::table('messages')->insert(

            [   'name' =>$request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message'),
                'ip'=>request()->ip()

            ]);
        return redirect('/bize_yazin')->with('success', 'Mesajiniz Basariyla Alinmistir..');
    }




}
