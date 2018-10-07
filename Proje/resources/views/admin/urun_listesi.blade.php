@extends('layouts.admin.amaster')

@section('title', 'kategoriler Listesi')

@section('keywords','')

@section('content')


<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Ürün Listesi
                <a href="{{url('/')}}/admin/urun/ekle" class="btn btn-success">Ürün Ekle</a>
            </strong>

        </div>

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif


        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Adı</th>
                    <th scope="col">Tür</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Resim</th>
                    <th scope="col">Düzenle</th>
                    <th scope="col">Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($urunler as $urun)
                    <tr>
                        <td>{{$urun->id}}</td>
                        <td>{{$urun->adi}}</td>
                        <td>{{$urun->turu}}</td>
                        <td>{{$urun->kategori}}</td>
                        <td>{{$urun->fiyat}}</td>
                        <td>{{$urun->stok}}</td>
                        <td>{{$urun->durum}}</td>
                        <td><img src="{{url('/')}}/userfiles/{{$urun->resim}}" height="40">

                            <a href="{{url('/')}}/admin/urun/galeri/{{$urun->id}}"  onclick="return !window.open(this.href, '','top=100 left=200 width=800,height=600')">Galeri</a></td>
                        <td ><a href="{{url('/')}}/admin/urun/edit/{{$urun->id}}" class="btn btn-primary">Düzenle</a></td>
                        <td ><a href="{{url('/')}}/admin/urun/del/{{$urun->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Sileceginize Eminmisiniz?')">Sil</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()