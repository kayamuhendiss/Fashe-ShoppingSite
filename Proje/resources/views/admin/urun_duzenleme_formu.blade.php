
@extends('layouts.admin.amaster')

@section('title', 'Urunler Duzenleme Sayfasi')

@section('keywords','')

@section('content')



    <div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Ürün Duzenleme</strong>

            </div>

            <div class="box box-primary">
                <div class="card">

                    <div class="card-body card-block">
                        <form class="form-horizontal" action="{{url('/')}}/admin/urun/update/{{$veri[0]->id}}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Ürün Adı</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="adi" value="{{$veri[0]->adi}}" class="form-control"><small class="form-text text-muted"></small></div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Keyword - Anahtar Kelimeler</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="keywords" value="{{$veri[0]->keywords}}"   class="form-control"><small class="form-text text-muted"></small></div>

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Description - Açıklama</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="description" value="@php(print $veri[0]->description)"  class="form-control"><small class="form-text text-muted"></small></div>

                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Ürün Türü</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="tur_id"   id="select" class="form-control">
                                        <option selected value="{{$veri[0]->tur_id}}" >{{$veri[0]->turu}}</option>
                                        @foreach($turler as $rs)

                                            <option value="{{$rs->id}}">{{$rs->adi}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Ürün Kategorisi</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kategori_id" id="select" class="form-control">
                                        <option selected value="{{$veri[0]->kategori_id}}" >{{$veri[0]->kategori}}</option>
                                        @foreach($kategoriler as $rs)
                                            <option value="{{$rs->id}}" >{{$rs->adi}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stok Miktari</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="stok"  value="{{$veri[0]->stok}}" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alis Fiyati</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="afiyat"  value="{{$veri[0]->afiyat}}" class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Satis Fiyati</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="sfiyat"  value="{{$veri[0]->sfiyat}}"   class="form-control"><small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Ürün Aciklama</label></div>
                                <div class="col-12 col-md-9"><textarea name="aciklama" id="aciklama" rows="3" cols="80" placeholder="Content..." class="form-control">
                                        {{$veri[0]->aciklama}}
                                    </textarea></div>
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
                                <div class="col col-md-3"> <label for="file-input" class=" form-control-label">Ürün Ana Resim</label></div>
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
