@section('slide')
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            @foreach($yeniler as $rs)
                @if($rs->id==26 || $rs->id==27)

            <div class="item-slick1 item1-slick1" style="background-image: url({{url('/')}}/userfiles/{{$rs->resim}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							2018 Kadın Koleksiyonu
						</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        Yenİ Sezon
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="{{url('/')}}/urun/{{$rs->id}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Keşfet
                        </a>
                    </div>
                </div>
            </div>
                @endif
            @endforeach

           {{-- <div class="item-slick1 item2-slick1" style="background-image: url({{url('/')}}/assets/front/images/b.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							2018 Kadın Koleksiyonu
						</span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        Yenİ Sezon
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{{url('/')}}"  class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Keşfet
                        </a>
                    </div>
                </div>
            </div>--}}



        </div>
    </div>
</section>
@endsection
