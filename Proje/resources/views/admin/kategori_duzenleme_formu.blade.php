
@extends('layouts.admin.amaster')

@section('title', 'Kategori Duzenleme Sayfasi')

@section('keywords','')

@section('content')



    <div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Kategori Duzenleme</strong>

            </div>

            <div class="box box-primary">
                <div class="card">

                    <div class="card-body card-block">
                        <form class="form-horizontal" action="{{url('/')}}/admin/kategori/update/{{ $veri[0]->id }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kategori Adı</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="adi" value="{{$veri[0]->adi}}" class="form-control">{{--<small class="form-text text-muted"></small>--}}
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Keyword - Anahtar Kelimeler</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="keywords" value="{{$veri[0]->keywords}}"   class="form-control"></div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Description - Açıklama</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="description" value="{{$veri[0]->description}}"  class="form-control"></div>

                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategorisi</label></div>
                                <div class="col-12 col-md-9">
                                    <select class="form-control" name="ust_id" >
                                        <option selected value="{{$veri[0]->ust_id}}" >{{$veri[0]->kategori}}</option>
                                        <option value="0" >Kategori Yok</option>

                                        @foreach($kategoriler as $rs)
                                            <option value="{{$rs->id}}" >{{$rs->adi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Aktif Durum</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="durum"  id="select" class="form-control">
                                        <option selected>{{$veri[0]->durum}}</option>
                                        <option value="0">Evet</option>
                                        <option value="1">Hayir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"> <label for="file-input" class=" form-control-label">Kategori Ana Resim</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="hidden" name="resim2 " value="{{$veri[0]->resim}}" >
                                    <input type="file"  name="resim" >
                                </div>
                                <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right"> Guncelle </button>

                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section("java")
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <body>

    <script>
        CKEDITOR.replace( 'aciklama' );
    </script>
    </body>

@endsection
