@extends('layouts.main')
@section('pageTitle')

Login

@endsection
@section('content')
@include('includes.status')

        <center><p class="or-social">Or Use Social Login</p>

        @include('partials.socials')</center>
@stop