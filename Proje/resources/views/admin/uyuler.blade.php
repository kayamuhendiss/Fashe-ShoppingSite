
@extends('layouts.admin.amaster')

@section('title', 'Urunler Listesi')

@section('keywords','')

@section('content')



<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Üye Listesi</strong>

        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th scope="col">Adı</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Adres</th>

                </tr>
                </thead>
                <tbody>

                @foreach ($uye as $urun)
                    <tr>
                        <td>{{$urun->name}}</td>
                        <td>{{$urun->email}}</td>
                        <td>{{$urun->tel}}</td>
                        <td>{{$urun->adres}}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>

    <!-- Content Icerigi Buraya Gelecek-->
    @endsection()