
@extends('layouts.front.fmaster')

@section('title',$urun[0]->adi)

@section('description',$urun[0]->description)

@section('keywords',$urun[0]->keywords)

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('banner2')

    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{url('/')}}" class="s-text16">
            AnaSayfa
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
			{{$urun[0]->adi}}
		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>


                    <div class="slick3">
                        <div class="item-active" data-thumb="{{url('/')}}/userfiles/{{$urun[0]->resim}}" >
                            <div class="wrap-pic-w">
                                <img src="{{url('/')}}/userfiles/{{$urun[0]->resim}}" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        @foreach($resimler as $rs)

                            <div class="item-slick3" data-thumb="{{url('/')}}/userfiles/{{$rs->resim}}" >
                                <div class="wrap-pic-w">
                                    <img src="{{url('/')}}/userfiles/{{$rs->resim}}" alt="IMG-PRODUCT">
                                </div>
                            </div>

                        @endforeach


                    </div>


                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{$urun[0]->adi}}
                </h4>
            <form method="post" action="{{url('/')}}/sepete_ekle">
                @csrf
                    <input type="hidden" name="urunid" value="{{$urun[0]->id}}">
                    <span class="m-text17">
                        {{$urun[0]->sfiyat}} TL
                    </span>
                    <div class="p-b-45">
                        <span class="s-text8 m-r-35">Stok Miktari</span>
                        <span class="s-text8">{{$urun[0]->stok}}</span><br>

                    </div>

                    <p class="s-text5 p-t-10">
                        {{$urun[0]->description}}

                    </p>


                    <div class="p-t-33 p-b-60">
                        <div class="flex-m flex-w p-b-10">
                            <div class="s-text15 w-size15 t-center">
                                Size
                            </div>

                            <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                                <select class="selection-2" name="size">
                                    {{--<option>Choose an option</option>--}}
                                    <option>Size S</option>
                                    <option>Size M</option>
                                    <option>Size L</option>
                                    <option>Size XL</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-m flex-w">
                            <div class="s-text15 w-size15 t-center">
                                Color
                            </div>

                            <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                                <select class="selection-2" name="color">
                                    {{--<option>Choose an option</option>--}}
                                    <option>Gray</option>
                                    <option>Red</option>
                                    <option>Black</option>
                                    <option>Blue</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-r-m flex-w p-t-10">
                            <div class="w-size16 flex-m flex-w">
                                <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="miktar" value="1">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>

                                <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                    <!-- Button -->
                                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Sepete Ekle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>



                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Ürün Detayı
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div >
                        <p class="s-text8">
                            @php(print $urun[0]->aciklama)

                        </p>
                    </div>
                </div>




            </div>
        </div>
    </div>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>



    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/assets/front/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{url('/')}}/assets/front/vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });

        $('.btn-addcart-product-detail').each(function(){
            var nameProduct = $('.product-detail-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    <!--===============================================================================================-->
    <script src="{{url('/')}}/assets/front/js/main.js"></script>

@endsection