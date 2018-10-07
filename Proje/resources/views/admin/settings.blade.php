
@extends('layouts.admin.amaster')

@section('title', 'Urunler Listesi')

@section('keywords','')

@section('content')



<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Ayarlar </strong>
            <div class="row">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Default Tab</h4>
                        </div>
                        <div class="card-body">
                            <div class="default-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="nav-home" aria-selected="true">Genel SEO</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"  href="#tab_2" role="tab" aria-controls="nav-profile" aria-selected="false">SMTP Settings</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"  href="#tab_3" role="tab" aria-controls="nav-contact" aria-selected="false">Hakkımızda Sayfası</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#tab_4" role="tab" aria-controls="nav-contact" aria-selected="false">İletişim Sayfası</a>
                                    </div>
                                </nav>
                                <form method="post" action="{{url('/')}}/admin/settingsupdate/{{$data[0]->id}}">
                                    @csrf
                                        <div class="tab-content pl-3 pt-2"  >
                                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <b>Site Genel Bilgiler</b>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label  class=" form-control-label">Site Title</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" value="{{$data[0]->adi}}" name="adi" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Keywords</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->keywords}}"  name="keywords" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Description</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->description}}"  name="description" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Adres</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->adres}}"  name="adres" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Tel</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->tel}}"  name="tel" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_2"  role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <b>SMTP BILGILERI</b>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label  class=" form-control-label">Smtp Server </label></div>
                                                    <div class="col-12 col-md-9"><input type="text" value="{{$data[0]->smtpserver}}" name="smtpserver" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Smtpemail</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->smtpemail}}"  name="smtpemail" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Smptppaswords</label></div>
                                                    <div class="col-12 col-md-9"><input type="password"  value="{{$data[0]->smtppaswords}}"  name="smtppaswords" class="form-control"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Smtpport</label></div>
                                                    <div class="col-12 col-md-9"><input type="text"  value="{{$data[0]->smtpport}}"  name="smtpport" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_3" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <b>HAKKIMIZDA SAYFASI</b>
                                                <textarea name="hakkimizda">
                                                    {{$data[0]->hakkimizda}}

                                                </textarea>
                                            </div>
                                            <div class="tab-pane fade" id="tab_4"  role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <b>ILETISIM SAYFASI </b>
                                                <textarea name="iletisim">
                                                    {{$data[0]->iletisim}}

                                                </textarea>

                                            </div>

                                        </div>
                                           &nbsp; &nbsp;<input type="submit" class="btn btn-primary btn-sm" value="GUNCELLE">

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

        </div>



    </div>
</div>
</div>

    <!-- Content Icerigi Buraya Gelecek-->
@endsection()

@section("java")
        <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
        <body>

        <script>
            CKEDITOR.replace( 'hakkimizda' );
        </script>
        <script>
            CKEDITOR.replace( 'iletisim' );
        </script>
        </body>

@endsection