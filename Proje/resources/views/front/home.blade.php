
@extends('layouts.front.fmaster')

@section('title',$data[0]->adi)

@section('description',$data[0]->description)

@section('keywords',$data[0]->keywords)

@section('headsmen')
    @include('front.headsmen')
@endsection

@section('slide')
    @include('front.slide')
@endsection

@section('sidebar')
    @include('front.sidebar')
@endsection

@section('banner1')
    @include('front.banner1')
@endsection

@section('banner2')
    @include('front.banner2')
@endsection

@section('banner3')
    @include('front.banner3')
@endsection

@section('banner4')
    @include('front.banner4')
@endsection

