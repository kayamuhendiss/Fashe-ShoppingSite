<?php

namespace App\Http\Controllers\Admin;


use App\Kategoriler;
use App\Urunler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
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
        $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');

        return view('admin.kategori_listesi',['datas' => $kategoriler]);
    }


    public function create()
    {
        //Ekleme Formu


        $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');
        return view('admin.kategori_ekleme_formu' ,['kategoriler'=>$kategoriler]);
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

        DB::table('kategoriler')->insert(

            [   'adi' =>      $request->get('adi'),
                'keywords' => $request->get('keywords'),
                'description' => $request->get('description'),
                'ust_id' => $request->get('ust_id'),
                'durum' => $request->get('durum'),
                'resim' =>    $name
            ]);

        return redirect('admin/kategoriler')->with('success', 'Kategoriler  Kaydedildi..');
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
     *
     *
     *  $turler =DB::select('SELECT * FROM turler ORDER BY adi');
       $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');


       $sql='select u.*,k.adi as kategori,t.adi as turu
              from urunlers u,kategoriler k,turler t
             where u.kategori_id=k.id and u.tur_id=t.id and u.id=?';

     */
    public function edit($id)
    {
        //Duzenleme formunu gosterme

        $kategoriler =DB::select('SELECT * FROM kategoriler ORDER BY adi');

       // $veri=Kategoriler::findOrFail($id);


        $veri=DB::select('select a.*,b.adi as kategori
              from kategoriler a
              LEFT JOIN kategoriler b ON a.ust_id=b.id
              WHERE a.id=?;',[$id]);


        return view('admin.kategori_duzenleme_formu',compact('veri','kategoriler'));

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

        DB::table('kategoriler')
            ->where('id',$id)
            ->update(

                [   'adi' => $request->get('adi'),
                    'keywords' => $request->get('keywords'),
                    'description' => $request->get('description'),
                    'ust_id' => $request->get('ust_id'),
                    'durum' => $request->get('durum'),
                    'resim' => $name
                ]);


        return redirect('admin/kategoriler')->with('success',$request->adi. ' Kategori Guncellendi..');




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
        DB::select('DELETE FROM kategoriler WHERE id=?',[$id]);
        return redirect('admin/kategoriler')->with('success','Kategori Silindi..' );
    }
}
