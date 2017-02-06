@extends('layouts.main')

@section('pageTitle')

Tidak Ketemu

@endsection

@section('content')
<section class="section section-blog-fw">
    <div class="row">
        <div class="col-xs-6 col-md-3">

            <div class="widget-wrapper card">

                <div class="card-block">

                    <p class="text-xs-center"><strong>Ads</strong></p>

                    <hr>

                    <img src="{{asset('iklan.png')}}">

                </div>

            </div>

        </div>
        <div class="col-md-9 wow fadeIn">

            <img src="{{asset('iklanpanjang.png')}}" alt="">

        </div>
    </div>
    @endsection