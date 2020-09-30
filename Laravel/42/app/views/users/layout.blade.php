@extends('styles.layouts.master')


@section('bread')
    @include('styles.components.bread', array('url'=> "users",'first'=>"ユーザー"))
@stop

@section('content')
    @yield('content')
@stop
