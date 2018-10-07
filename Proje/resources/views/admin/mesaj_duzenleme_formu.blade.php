
@extends('layouts.admin.amaster')

@section('title', 'Mesaj Duzenleme Sayfasi')

@section('keywords','')

@section('content')



    <div class="content mt-3">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Mesaj Duzenleme</strong>

            </div>

            <div class="box box-primary">
                <div class="card">

                    <div class="card-body card-block">
                        <form class="form-horizontal" action="{{url('/')}}/admin/message/edit/{{ $veri[0]->id }}" method="post" >
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Adı Soyadi</label></div>
                               {{$veri[0]->name}}
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                {{$veri[0]->email}}

                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Ip</label></div>
                                {{$veri[0]->ip}}

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Tarihler</label></div>
                                Gonderilen : {{$veri[0]->created_at}}<br>
                                Guncellenen : {{$veri[0]->updated_at}}

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Konu</label></div>
                                {{$veri[0]->subject}}

                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Mesaj</label></div>
                              {{$veri[0]->message}}

                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Islem Notu</label></div>
                                <textarea name="note" class="col-12 col-md-9" rows="5">
                                    {{$veri[0]->note}}

                                </textarea>

                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Durumu</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status"  id="select" class="form-control">
                                        <option selected>{{$veri[0]->status}}</option>
                                        <option value="0">Okundu</option>
                                        <option value="1">Cevaplandi</option>
                                        <option value="2">Beklemede</option>
                                    </select>
                                </div>
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

@endsection
