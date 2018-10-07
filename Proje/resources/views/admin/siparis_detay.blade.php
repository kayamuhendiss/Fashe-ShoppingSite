
@extends('layouts.admin.amaster')

@section('title', 'Siparis Detay')

@section('keywords','')

@section('content')



<div >
    <div class="card">
        <div class="card-header"><strong class="card-title">Siparis Detay</strong> </div>
<div>
    <div class="span10">
    <div >
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <form method="post" action="{{url('/')}}/admin/siparis_update/{{$siparis[0]->id}}">
            @csrf
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Siparis Id</th>
                        <td scope="col">{{$siparis[0]->id}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Adi Soyadi</th>
                        <td scope="col">{{$siparis[0]->adsoy}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Adres</th>
                        <td scope="col">{{$siparis[0]->adres}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Sehir</th>
                        <td scope="col">{{$siparis[0]->sehir}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Telefon</th>
                        <td scope="col">{{$siparis[0]->tel}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Durum</th>
                        <td scope="col" >
                            <select name="durum"  id="select" class="form-control">
                                <option selected>{{$siparis[0]->durum}}</option>
                                <option>Onaylandi</option>
                                <option>Kargoda</option>
                                <option>Tamamlandi</option>
                                <option>Iptal</option>
                            </select>

                        </td>

                    </tr>
                    <tr>
                        <th scope="col">Aciklama</th>
                        <td scope="col" >
                            <textarea name="aciklama" class="form-control" row="5" cols="80"> {{$siparis[0]->aciklama}}</textarea>
                        </td>

                    </tr>
                    </thead>
                </table>
                <input type="submit" value="Guncelle" class="btn btn-primary">

        </form>
            <?php echo "<br>"?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Adı</th>
                <th scope="col">Miktar</th>
                <th scope="col">Fiyat</th>
                <th scope="col">Tutar</th>
                <th scope="col">Resim</th>
                <th scope="col">İslemler</th>
            </tr>
            </thead>
            <?php $top=0; ?>
            @foreach ($urunler as $urun)
                <tr>
                    <td>{{$urun->id}}</td>
                    <td>{{$urun->adi}}</td>
                    <td>{{$urun->fiyat}} TL</td>
                    <td>{{$urun->miktar}}</td>
                    <td>{{$urun->tutar}}</td>
                    <td><a href="{{url('/')}}/urun/{{$urun->id}}"><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="30"></a></td>

                    <td>
                        @if($siparis[0]->durum=='Yeni')
                            <a href="{{url('/')}}/urun_iptal/{{$urun->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Iade Etmek Istediginizden Eminmisiniz?')">İPTAL</a>
                        @endif
                    </td>

                </tr>
                <?php $top=$top+$urun->tutar; ?>
                @endforeach

                </tbody>
        </table>
        Toplam Tutar : <?php echo $top?> TL

        <div class="w-size2 p-t-20">

            <form method="post" action="{{url('/')}}/siparis_tamamla">
                @csrf
                <input type="hidden" name="toplam" value="<?php echo $top?>" TL>
                <input type="submit" value=" Siparisi Tamamla" class="btn btn-success">
                <br>

            </form>
        </div>




    </div>
    </div>
</div>
</div>
</div>
    <br>

    @endsection()