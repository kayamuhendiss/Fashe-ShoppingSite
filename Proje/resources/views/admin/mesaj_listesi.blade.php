 @extends('layouts.admin.amaster')

@section('title', 'Kategoriler')

@section('keywords','')

@section('content')


<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Mesaj Listesi </strong>

        </div>

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif


        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th >Id</th>
                    <th >Adı</th>
                    <th >Email</th>
                    <th >Konu</th>
                    <th >Durum</th>
                    <th >Oku</th>
                    <th >Sil</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($datas as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->status}}</td>
                        <td ><a href="{{url('/')}}/admin/message/edit/{{$rs->id}}" class="btn btn-primary">Oku/Detay </a></td>
                        <td ><a href="{{url('/')}}/admin/message/del/{{$rs->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Sileceginize Eminmisiniz?')">Sil</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection()