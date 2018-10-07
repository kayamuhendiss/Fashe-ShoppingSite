
@extends('layouts.front.fmaster')

@section('title','Sepetim')

@section('description','')

@section('keywords','')

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('sidebar')
    @include('front.usersidebar')
@endsection
@section('sidebar')

@endsection



@section('banner2')

<section class="bgwhite">
    <div class="container">
        <div class="span10">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">SIPARIS URUNLER</h3>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
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
                        <td scope="col">{{$siparis[0]->durum}}</td>

                    </tr>
                    <tr>
                        <th scope="col">Aciklama</th>
                        <td scope="col">{{$siparis[0]->aciklama}}</td>

                    </tr>
                    </thead>
                </table>
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
                            <td><a href="{{url('/')}}/urun/{{$urun->id}}"><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="20"></a></td>

                            <td>
                                @if($siparis[0]->durum=='Yeni')
                                    <a href="{{url('/')}}/urun_iade/{{$urun->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Iade Etmek Istediginizden Eminmisiniz?')">İPTAL</a>
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
                            <input type="submit" value=" Siparisi Tamamla " class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">

                    </form>
                </div>




            </div>
        </div>
    </div>
</section>



<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->




@endsection


