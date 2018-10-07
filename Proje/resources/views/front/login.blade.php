
@extends('layouts.front.fmaster')

@section('title','User Login')

@section('description', 'User Login')

@section('keywords','User Login' )

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('banner2')

 <!DOCTYPE html>
<html lang="en">
<head>
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
    <!--===============================================================================================-->
</head>
<body>

<div class="span4">
    <div class="well">
        <h5>Login Form</h5>
        @if (\Session::has('message'))
            <div class="alert alert-success">
                <p>{{ \Session::get('message') }}</p>
            </div>
            <br/>
        @endif
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
                        <button type="submit" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>





<script src="{{url('/')}}/assets/front/sign1/js/jquery.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/jquery.easing-1.3.min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="{{url('/')}}/assets/front/sign1/js/shop.js"></script>

</body>
</html>


@endsection

