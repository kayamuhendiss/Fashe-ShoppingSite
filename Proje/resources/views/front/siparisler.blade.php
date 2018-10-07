
@extends('layouts.front.fmaster')

@section('title','Sepetim')

@section('description','')

@section('keywords','')

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('sidebar')
    @include('front.usersidebar')
@endsection

@section('banner2')

<section class="bgwhite">
    <div class="container">
        <div class="span10">


            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                   YAPTIGINIZ SIPARISLER

                </h3>

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th >Id</th>
                        <th >AdSoy</th>
                        <th >Tarih</th>

                        <th scope="col">Tutar</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Detay</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $top=0; ?>
                    @foreach ($data2 as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->adsoy}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td>{{$rs->tutar}} TL</td>
                            <td>{{$rs->durum}}</td>
                            <td ><a href="{{url('/')}}/siparis_detay/{{$rs->id}}" class="btn btn-danger btn-sm" >Detay</a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>



<!--===============================================================================================-->
<script type="text/javascript" src="{{url('/')}}/assets/front/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->




@endsection


