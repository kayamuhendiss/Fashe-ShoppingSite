<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{url('/')}}/assets/admin/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{url('/')}}/assets/admin/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/')}}/admin"> <i class="menu-icon fa fa-dashboard"></i>Ana Sayfa </a>
                </li>

                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Ürün İşlemleri</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/urunler">Ürün Listesi</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/turler">Türler</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/kategoriler">Kategoriler</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children active dropdown">
                    <a href="{{url('/')}}/admin/siparisler" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa fa-laptop"></i>Siparisler</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-star" ></i><a href="{{url('/')}}/admin/siparis_yeni">Yeni Siparisler</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/siparisler/Onaylandi">Onaylanan Siparisler</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/siparisler/Kargoda">Kargodakiler</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/siparisler/Tamamlandi">Bitenler</a></li>
                        <li><i class="fa fa-star"></i><a href="{{url('/')}}/admin/siparisler/Iptal">Bitenler</a></li>

                    </ul>
                </li>

                <li>
                    <a href="{{url('/')}}/admin/mesajlar"> <i class="menu-icon fa fa-dashboard"></i>Müsteri Mesajlari </a>
                </li>
                <li>
                    <a href="{{url('/')}}/admin/uyeler"> <i class="menu-icon fa fa-dashboard"></i>Uyeler </a>
                </li>
                <li>
                    <a href="{{url('/')}}/admin/settings"> <i class="menu-icon fa fa-gear"></i>Ayarlar </a>
                </li>
                <li>
                    <a href="{{url('/')}}/admin/yorumlar"> <i class="menu-icon fa fa-dashboard"></i>Yorumlar </a>
                </li>
                <li>
                    <a href="{{url('/')}}/admin/sss"> <i class="menu-icon fa fa-dashboard"></i>SSS </a>
                </li>

                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/')}}/admin" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->