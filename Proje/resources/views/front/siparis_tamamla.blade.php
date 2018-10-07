
@extends('layouts.front.fmaster')

@section('title','Sepetim')

@section('description','')

@section('keywords','')

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('sidebar')
    @include('front.sidebar')
@endsection


@section('banner2')

<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">SIPARIS TAMAMLA </h3>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif

                <form method="post" action="{{url('/')}}/satinal">
                    @csrf
                         Siparis Tutari.:<input type="text" readonly name="toplam" value="<?php echo $toplam; ?>"> <br>
                         Kargo Bilgileri:<br>
                         Adi Soyadi.....:<input name="adsoy" value="{{$user[0]->name}}"> <br>
                         Adres...........:<input name="adres" value="{{$user[0]->adres}}"><br>
                         Sehir :        <input name="sehir" value="{{$user[0]->sehir}}"><br>
                         Telefon Numarasi :        <input name="tel" value="{{$user[0]->tel}}"><br>
                    <hr>
                         Kredi Karti Bilgileri <br>
                         Adi Soyadi :           <input name="kadsoy" ><br>
                         Kart No    :           <input name="kartno" ><br>
                         Son Kullanim Tarihi Ay/Yil :<input name="ay" >/<input name="yil" ><br>
                         Guvenlik Numarasi (CVC)    :   <input name="cvc" ><br>
                    <hr>

                        <input type="submit" class="btn btn-success" value="SATIN AL">
                </form>

            </div>
        </div>
    </div>
</section>

<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->


@endsection


