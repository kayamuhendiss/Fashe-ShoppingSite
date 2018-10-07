
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Ürün Galeri Formu</strong>

        </div>

                <form class="form-horizontal" action="{{url('/')}}/admin/urun/galeri/{{$veri[0]->id}}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div>
                             Ürün Adi: <label class=" form-control-label">{{$veri[0]->adi}}</label>
                            <br>
                            <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="100">
                            <hr>

                            <label for="file-input" class=" form-control-label">Ürün Galeri Resmi</label>
                            <input type="file"  name="resim"  onchange="javascript:this.form.submit();">
                            <input type="hidden" name="id" value="{{$veri[0]->id}}">

                                <a href="{{url('/')}}/admin/urunler" class="btn btn-info pull-right">Geri</a>

                            <button type="submit" class="btn btn-info pull-right">Ekle</button>


                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <p>{{ \Session::get('success') }}</p>
                                    </div><br />
                                @endif
                            <hr>
                            <img src="{{url('/')}}/userfiles/{{$veri[0]->resim}}" height="200">
                            @foreach($resimler as $rs)

                                <img src="{{url('/')}}/userfiles/{{$rs->resim}}" height="200">
                                <a href="{{url('/')}}/admin/urun/galerisil/{{$rs->id}}" onclick="return confirm('Sileceginize Eminmisiniz?')">Sil</a>

                            @endforeach
                        </div>

                </form>








       </div>
</div>


