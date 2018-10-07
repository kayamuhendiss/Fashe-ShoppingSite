
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

{{--<link rel="icon" type="image/png" href="{{url('/')}}/assets/front/images/icons/favicon.png"/>--}}
@section('banner2')

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image:url({{url('/')}}/assets/front/images/heading-pages-06.jpg);">
    <h2 class="l-text2 t-center">
        BİZE YAZIN
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">

            <div class="col-md-6 p-b-30">
                <form class="leave-comment" method="post" action="{{url('/')}}/bize_yazin">
                    @csrf
                        <h4 class="m-text26 p-b-36 p-t-15">Bize Yazin </h4>
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                        @endif

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" required name="name" placeholder="Full Name">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="email"  required name="email" placeholder="Email Address">
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="subject" placeholder="Konu">
                        </div>

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message">

                        </textarea>

                        <div class="w-size25">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                                Mesaji Gonder
                            </button>
                    </div>
                </form>
            </div>
</div>

</section>



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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="{{url('/')}}/assets/front/js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/assets/front/js/main.js"></script>

</body>
</html>


@endsection


