
@extends('layouts.admin.amaster')

@section('title', 'Kategori Ekleme Sayfasi')

@section('keywords','')

@section('content')



<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Kategori Ekleme</strong>

        </div>

        <div class="box box-primary">
            <div class="card">

                <div class="card-body card-block">
                    <form class="form-horizontal" action="{{url('/')}}/admin/kategori/save" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Kategori Adı</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="adi"  required class="form-control"><small class="form-text text-muted"></small></div>

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
                            <div class="col col-md-3"><label class=" form-control-label">Kategorisi</label></div>
                            <div class="col-12 col-md-9">
                                <select class="form-control" name="ust_id" >
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
                                <select name="durum" id="select" class="form-control">
                                    <option value="0">Evet</option>
                                    <option value="1">Hayir</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"> <label for="file-input" class=" form-control-label">Kategori Ana Resim</label></div>
                            <div class="col-12 col-md-9"> <input type="file" id="file-input" required name="resim" class="form-control-file"></div>
                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Kaydet</button>

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
