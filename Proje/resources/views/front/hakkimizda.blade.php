
@extends('layouts.front.fmaster')

@section('title',$data[0]->adi)

@section('description',$data[0]->description)

@section('keywords',$data[0]->keywords)

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('sidebar')
    @include('front.sidebar')
@endsection


@section('banner2')
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/front/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">


<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{url('/')}}/assets/front/images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">

    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                    HAKKIMIZDA
                </h3>

                   @php(print $data[0]->hakkimizda)


                <div class="bo13 p-l-29 m-l-9 p-b-10">

                </div>
            </div>
        </div>
    </div>
</section>
</body>


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
<script src="{{url('/')}}/assets/front/js/main.js"></script>

</body>
</html>



@endsection

{{--{{$data[0]->hakkimizda}}--}}


