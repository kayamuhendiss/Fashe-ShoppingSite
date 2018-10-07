
@extends('layouts.admin.amaster')

@section('title', 'Urunler Ekleme Sayfasi')

@section('keywords','')

@section('content')



<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Ürün Ekleme</strong>

        </div>

        <div class="box box-primary">
            <div class="card">

                <div class="card-body card-block">
                    <form class="form-horizontal" action="{{url('/')}}/admin/urun/save" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Ürün Adı</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="adi"  class="form-control"><small class="form-text text-muted"></small></div>

                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Keyword - Anahtar Kelimeler</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="keywords"  class="form-control"><small class="form-text text-muted"></small></div>

                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Description - Açıklama</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="description"  class="form-control"><small class="form-text text-muted"></small></div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Ürün Türü</label></div>
                            <div class="col-12 col-md-9">
                                <select name="tur_id" id="select" class="form-control">
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
                                    @foreach($kategoriler as $rs)
                                    <option value="{{$rs->id}}" >{{$rs->adi}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Stok Miktari</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="stok" value="0" placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alis Fiyati</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="afiyat" value="0"  placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alis Fiyati</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sfiyat" value="0"  placeholder="Text" class="form-control"><small class="form-text text-muted"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Ürün Aciklama</label></div>
                            <div class="col-12 col-md-9"><textarea name="aciklama" id="aciklama" rows="3" cols="80" placeholder="Content..." class="form-control"></textarea></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Aktif Durum</label></div>
                            <div class="col-12 col-md-9">
                                <select name="durum" id="select" class="form-control">
                                    <option value="0">Evet</option>
                                    <option value="1">Hayir</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"> <label for="file-input" class=" form-control-label">Ürün Ana Resim</label></div>
                            <div class="col-12 col-md-9"> <input type="file" id="file-input" name="resim" class="form-control-file"></div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-info pull-right"> Kaydet </button>

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
