
@extends('layouts.front.fmaster')

@section('title','Sepetim')

@section('description','')

@section('keywords','')

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('sidebar')
    @include('front.sidebar')
@endsection


@section('banner2')

<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">SIPARIS TAMAMLANDI</h3>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif



            </div>
        </div>
    </div>
</section>

<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->


@endsection


