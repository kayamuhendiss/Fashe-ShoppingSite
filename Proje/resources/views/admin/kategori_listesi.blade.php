@extends('layouts.admin.amaster')

@section('title', 'Kategoriler')

@section('keywords','')

@section('content')


<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Kategori Listesi
                <a href="{{url('/')}}/admin/kategori/ekle" class="btn btn-success">Kategori Ekle</a>
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
                    <th >Id</th>
                    <th >Adı</th>
                    <th >Ust Kategori</th>
                    <th >Durum</th>
                    <th >Resim</th>
                    <th >Düzenle</th>
                    <th >Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($datas as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->adi}}</td>
                        <td>{{$rs->ust_id}}</td>
                        <td>{{$rs->durum}}</td>
                        <td><img src="{{url('/')}}/userfiles/{{$rs->resim}}" height="40"></td>
                        <td ><a href="{{url('/')}}/admin/kategori/edit/{{$rs->id}}" class="btn btn-primary">Düzenle</a></td>
                        <td ><a href="{{url('/')}}/admin/kategori/del/{{$rs->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Sileceginize Eminmisiniz?')">Sil</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()