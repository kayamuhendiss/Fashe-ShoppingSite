
@extends('layouts.admin.amaster')

@section('title', 'Urunler Listesi')

@section('keywords','')

@section('content')



<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Siparisler : Yeni  Listesi</strong>

        </div>


    </div>
</div>

<div class="container">
    <div class="span6">


        <div >

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th >Id</th>
                    <th >Üye Adsoy</th>
                    <th >AdSoy</th>
                    <th scope="col" >Tarih</th>
                    <th >Adres</th>
                    <th >Sehir</th>
                    <th >Telefon </th>
                    <th scope="col">Tutar</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Detay</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($siparis as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td><a href="{{url('/')}}/uye_detay/{{$rs->id}}" >{{$rs->uyeadsoy}} </a></td>
                        <td> {{$rs->adsoy}} </td>
                        <td>{{$rs->created_at}}</td>
                        <td>{{$rs->adres}}</td>
                        <td>{{$rs->sehir}}</td>
                        <td>{{$rs->tel}}</td>
                        <td>{{$rs->tutar}} TL</td>
                        <td>{{$rs->durum}}</td>
                        <td ><a href="{{url('/')}}/admin/siparis_detay/{{$rs->id}}" class="btn btn-danger btn-sm" >Detay</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

    @endsection