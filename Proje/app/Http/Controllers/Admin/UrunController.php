<?php

namespace App\Http\Controllers\Admin;
use App\Kitaplar;
use App\Urunler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        //Urunler Sayfasinin Ana Girisi

        $sql='select u.id,u.adi,u.resim,u.stok,u.durum,u.sfiyat as fiyat,k.adi as kategori,t.adi as turu
              from urunlers u,kategoriler k,turler t
              where u.kategori_id=k.id and u.tur_id=t.id
              ORDER by k.adi';

        $urunler=DB::select($sql);

        //$urunler = DB::select('select * from urunler order by adi');
        return view('admin.urun_listesi',['urunler' => $urunler]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ekleme Formu

        $turler =DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');
        $uye=DB::select("SELECT name,email,tel,adres FROM users WHERE role='user' " ) ;
        return view('admin.urun_ekleme_formu',['turler'=>$turler],['kategoriler'=>$kategoriler],['uye'=>$uye]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ekleme formundan gelen verileri kaydetme


        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('urunlers')->insert(

            [   'adi' =>      $request->get('adi'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'tur_id' => $request->get('tur_id'),
                'kategori_id' => $request->get('kategori_id'),
                'stok' => $request->get('stok'),
                'afiyat' => $request->get('afiyat'),
                'sfiyat' => $request->get('sfiyat'),
                'afiyat' => $request->get('afiyat'),
                'aciklama' => $request->get('aciklama'),
                'durum' => $request->get('durum'),
                'resim' =>    $name
            ]);

        return redirect('admin/urunler')->with('success', 'Urunler Kaydedildi..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Tek veri gosterme
        echo "Gosterme".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Duzenleme formunu gosterme
        $turler =DB::select('SELECT * FROM turler ORDER BY adi');
        $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');


        $sql='select u.*,k.adi as kategori,t.adi as turu
              from urunlers u,kategoriler k,turler t
              where u.kategori_id=k.id and u.tur_id=t.id and u.id=?';

        $veri =DB::select($sql,[$id]);


        return view('admin.urun_duzenleme_formu',compact('veri','turler','kategoriler'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Duzenleme formundan gelen veritabanina update etme


        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        else
            $name=$request->resim2;

        DB::table('urunlers')
            ->where('id',$id)
            ->update(

            [   'adi' =>      $request->get('adi'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'tur_id' => $request->get('tur_id'),
                'kategori_id' => $request->get('kategori_id'),
                'stok' => $request->get('stok'),
                'afiyat' => $request->get('afiyat'),
                'sfiyat' => $request->get('sfiyat'),
                'afiyat' => $request->get('afiyat'),
                'aciklama' => $request->get('aciklama'),
                'durum' => $request->get('durum'),
                'resim' => $name
        ]);

        return redirect('admin/urunler')->with('success',$request->adi. ' Urunler Guncellendi..');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Silme
        DB::select('DELETE FROM urunlers WHERE id=?',[$id]);
        return redirect('admin/urunler')->with('success','Urunler Silindi..' );
    }


    public function galeri_formu($id)
    {
        //Duzenleme formunu gosterme
        $resimler =DB::select('SELECT * FROM images WHERE urun_id=?',[$id]);
        $veri =DB::select('SELECT * FROM urunlers WHERE id=?',[$id]);



        return view('admin.urun_galeri_ekleme',compact('veri', 'resimler'));

    }

    public function galeri_ekle(Request $request)
    {
        //Ekleme formundan gelen verileri kaydetme


        if($request->hasfile('resim'))
        {
            $file = $request->file('resim');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/userfiles/', $name);
        }

        DB::table('images')->insert(

            [   'urun_id' => $request->get('id'),
                'resim' =>$name ]
        );

        return redirect('admin/urun/galeri/'.$request->get('id'))->with('success', 'Resim Kaydedildi..');
    }

    public function galeri_sil($id)
    {
        //Silme
        DB::select("DELETE FROM images WHERE id=?",[$id]);
        return redirect('admin/urun/galeri/'.$id)->with('success','Galeriden Resim Silindi..' );
    }
    public function uye_ekle()
    {
        $uye=DB::select("SELECT name,email,tel,adres FROM users WHERE role='user' " ) ;
        return view('admin.uyuler',compact('uye'));
    }
}