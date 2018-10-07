@section('banner2')
<div class="container">
    <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center">
            Yenİ Ürünler
        </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
        <div class="slick2">
            @foreach($yeniler as $rs)
                @if($rs->id!=26 && $rs->id!=27)

            <div class="item-slick2 p-l-15 p-r-15">
                <!-- Block2 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">


                        <div href="{{url('/')}}/urun/{{$rs->id}}" class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="{{url('/')}}/userfiles/{{$rs->resim}}" alt="IMG-PRODUCT">

                            <div>
                                <a  class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">

                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="{{url('/')}}/urun/{{$rs->id}}" class="block2-name dis-block s-text3 p-b-5">{{$rs->adi}}</a>

                            <span class="block2-price m-text6 p-r-5">{{$rs->sfiyat}} TL</span>
                        </div>


                </div>
            </div>
                @endif
            @endforeach

        </div>
    </div>
</div>


@endsection()

{{--@foreach($kategori as $rs)
        <li><a href="{{url('/')}}/kategori/($rs->id)}}">{{$rs->adi}}</a></li>

@endforeach--}}