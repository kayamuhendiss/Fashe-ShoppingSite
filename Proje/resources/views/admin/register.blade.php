<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/normalize.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{url('/')}}/assets/admin/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{url('/')}}/assets/admin/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{url('/')}}/admin/register" method="post">
                        @csrf

                            @if (\Session::has('message'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('message') }}</p>
                                </div><br />
                            @endif
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                            <div class="social-login-content">
                                <div class="social-button">
                                    <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                    <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                                </div>
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Already have account ? <a href="{{url('/')}}/admin/login"> Sign in</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{url('/')}}/assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="{{url('/')}}/assets/admin/js/popper.min.js"></script>
    <script src="{{url('/')}}/assets/admin/js/plugins.js"></script>
    <script src="{{url('/')}}/assets/admin/js/main.js"></script>


</body>
</html>
