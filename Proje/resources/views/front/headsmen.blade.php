@section('headsmen')
<div class="wrap_menu">

        <ul class="main_menu">
                {{--@foreach($kategori as $rs)
                        <li><a href="{{url('/')}}/kategori/($rs->id)}}">{{$rs->adi}}</a></li>

                @endforeach--}}

                <li><a href="{{url('/')}}">Giyim</a>
                        <ul class="sub_menu">
                                <li><a href="{{url('/')}}">Tunik</a></li>
                                <li><a href="{{url('/')}}">Etek</a></li>
                                <li><a href="{{url('/')}}">Ferace</a></li>
                        </ul>
                </li>
                <li class="active"><a href="{{url('/')}}/esarpsal">Eşarp&Şal</a></li>
                <li><a href="{{url('/')}}/canta">Çanta</a></li>
                <li><a href="{{url('/')}}/aksesuar">Aksesuar</a></li>
                <li><a href="{{url('/')}}/lookbook">Lookbook</a></li>
                <li><a href="{{url('/')}}/outlet">Outlet</a></li>
                <li><a href="{{url('/')}}/hakkimizda">Hakkımızda</a></li>
                <li><a href="{{url('/')}}/iletisim">İletişim</a></li>
                <li><a href="{{url('/')}}/bize_yazin">Bize Yazin</a></li>
                <li><a href="{{url('/')}}/sepetim">Sepetim</a></li>

        </ul>

</div>
@endsection



