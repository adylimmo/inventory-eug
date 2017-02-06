@extends('layouts.main')
@section('pageTitle')

Register

@endsection

@section('content')
@include('includes.errors')
        <center><p class="or-social">Or Use Social Login</p>

        @include('partials.socials')</center>


@stop