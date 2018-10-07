
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
        <div  class="span10">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                   Sepetim

                </h3>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Adı</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Miktar</th>
                        <th scope="col">Tutar</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $top=0; ?>
                    @foreach ($veriler as $urun)
                        <tr>
                            <td>{{$urun->id}}</td>
                            <td>{{$urun->adi}}</td>
                            <td>{{$urun->sfiyat}} TL</td>
                            <td>{{$urun->miktar}}</td>
                            <td> {{$urun->sfiyat*$urun->miktar }} TL</td>

                            <td><a href="{{url('/')}}/urun/{{$urun->id}}"><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="20"></a></td>

                            <td><a href="{{url('/')}}/sepet_sil/{{$urun->urun_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Silmek İstediğinize Eminmisiniz?')">Sil</a></td>

                        </tr>
                        <?php $top=$top+$urun->sfiyat*$urun->miktar; ?>
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


