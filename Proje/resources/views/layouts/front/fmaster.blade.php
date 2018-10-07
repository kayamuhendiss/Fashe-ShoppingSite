<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description');">
	<meta name="keywords" content="@yield('keywords');">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png"      href=" {{url('/')}}/assets/front/images/icons/favicon.png"/>
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
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/main.css">
	<!--===============================================================================================-->

</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="topbar">
			<div class="topbar-social">
				<a href="{{$data[0]->facebook}}" class="topbar-social-item fa fa-facebook"></a>
				<a href="{{$data[0]->instagram}}" class="topbar-social-item fa fa-instagram"></a>
				<a href="{{$data[0]->youtube}}" class="topbar-social-item fa fa-youtube-play"></a>
				<a href="{{$data[0]->twitter}}" class="topbar-social-item fa fa-twitter"></a>
			</div>

			<li class="p-b-9">
				<a href="{{url('/')}}" class="s-text7">%70'e Varan Final İndirim</a>
			</li>



		</div>

		<div class="wrap_header">
			<!-- Logo -->
			<a href="{{url('/')}}" class="logo">
				<img src="{{url('/')}}/assets/front/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Menu -->
            @yield('headsmen')

			<!-- Header Icon -->
			<div class="header-icons">

                  <a href="#">

                    <img src="{{url('/')}}/assets/front/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <div class="header-cart header-dropdown">
                        <ul >
                            <li>
                                <div >
                                    <form action="{{url('/')}}/login" method="post">
                                        @csrf

                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail">Email</label>
                                                <div class="controls">
                                                    <input class="span3"  type="email" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword">Password</label>
                                                <div class="controls">
                                                    <input type="password" class="span3" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <button type="submit" class="defaultBtn">Sign in</button>
                                                </div>
                                            </div>

                                    </form>


                                </div>

                            </li>
                        </ul>
                    </div>

                 </a>


			</div>
		</div>
	</div>



</header >

<!-- Slide1 -->


@yield('slide')
@yield('sidebar')
@yield('banner1')
@yield('banner2')
@yield('banner3')
@yield('banner4')


<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>


		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Categories
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Men
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Women
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Dresses
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Sunglasses
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Links
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Search
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						About Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Contact Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Help
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Track Order
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Shipping
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						FAQs
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Newsletter
			</h4>

			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
					<span class="effect1-line"></span>
				</div>

				<div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

			</form>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<a href="#">
			<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
		</a>

		<a href="#">
			<img class="h-size2" src="{{url('/')}}/assets/front/images/icons/visa.png" alt="IMG-VISA">
		</a>

		<a href="#">
			<img class="h-size2" src="{{url('/')}}/assets/front/images/icons/mastercard.png" alt="IMG-MASTERCARD">
		</a>

		<a href="#">
			<img class="h-size2" src="{{url('/')}}/assets/front/images/icons/express.png" alt="IMG-EXPRESS">
		</a>

		<a href="#">
			<img class="h-size2" src="{{url('/')}}/assets/front/images/icons/discover.png" alt="IMG-DISCOVER">
		</a>

		<div class="t-center s-text8 p-t-20">
			Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div>
	</div>
</footer>
</div>





<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>



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
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/front/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/lightbox2/js/lightbox.min.js"></script>
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
</script>

<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/js/main.js"></script>
<script src="{{url('/')}}/assets/front/sign/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/sign/vendor/bootstrap/js/popper.js"></script>
<script src="{{url('/')}}/assets/front/sign/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/sign/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/sign/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/sign/js/main.js"></script>
<link href="{{url('/')}}/assets/front/sign1/css/bootstrap.css" rel="stylesheet"/>
<!-- Customize styles -->
<link href="{{url('/')}}/assets/front/sign1/style.css" rel="stylesheet"/>
<!-- font awesome styles -->
<link href="{{url('/')}}/assets/front/sign1//font-awesome/css/font-awesome.css" rel="stylesheet">
<!--[if IE 7]>
<link href="{{url('/')}}/assets/front/sign1/css/font-awesome-ie7.min.css" rel="stylesheet">
<![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="shortcut icon" href="{{url('/')}}/assets/front/sign1//ico/favicon.ico">
<script src="{{url('/')}}/assets/front/sign1/js/jquery.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/jquery.easing-1.3.min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/shop.js"></script>

</body>
</html>

{{-- <img src="{{url('/')}}/assets/front/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">--}}