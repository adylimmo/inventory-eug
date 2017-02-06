@extends('layouts.main')
@section('pageTitle','Informasi bahasa pemograman.')
@section('content')

@include('partials.status-panel')

<section class="section section-blog-fw">
    <div class="row">
        <div class="col-md-9 wow fadeIn">
            @foreach($data as $d) 
            <img src="{{asset('banner.png')}}">
            <div class="jumbotron wow fadeIn" data-wow-delay="0.2s">
                <h2><a href="{{url('/baca',$d->slug)}}">{{$d->title}}</a></h2>
                <p><h6><i class="fa fa-folder" aria-hidden="true"></i> {{$d->nama_category}} <i class="fa fa-user" aria-hidden="true"></i><a title="{{$d->email}}"> {{$d->first_name}}</a> <i class="fa fa-calendar" aria-hidden="true"></i> {{date('d F, Y', strtotime($d->created_at))}}</h6></p>
            </div>
            <div class="excerpt">
                <p>{{substr(strip_tags($d->detail),0,300)}}</p>
            </div>
            <hr>
            @endforeach
            
        </div>
        <!--Sidebar-->
        <div class="col-xs-6 col-md-3">
            <div class="widget-wrapper card">
                <div class="card-block">
                    @foreach($data as $d) 
                    <a href="{{url('/baca',$d->slug)}}">{{$d->title}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="widget-wrapper card">
                <div class="card-block">
                    <p class="text-xs-center"><strong>Ads</strong></p>
                    <hr>
                    <img src="{{asset('iklan.png')}}">
                </div>
            </div>
        </div>



        <div class="col-md-3">
            <!--Accordion wrapper-->
            @foreach($data as $d) 
            <div class="accordion text-xs-left" id="{{$d->slug}}" role="tablist" aria-multiselectable="true">
                <!--Second panel-->
                
                <div class="panel panel-default">

                    <!--Panel heading-->
                    <div class="panel-heading" role="tab" id="{{$d->slug}}">
                        <h5 class="panel-title">
                            <a class="arrow-r" data-toggle="collapse" data-parent="#{{$d->slug}}" href="#{{$d->slug}}" aria-expanded="true" aria-controls="collapseOne">{{$d->title}}<i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                        </h5>
                    </div>

                    <!--Panel body-->
                    <div id="{{$d->slug}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$d->slug}}">
                        {!!$d->detail!!}
                    </div>
                </div>
                <!--/.Second panel-->
            </div>
            @endforeach
            <!--/.Accordion wrapper-->
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="widget-wrapper card">
                <div class="card-block">
                    
                    <a href='https://plus.google.com/u/0/communities/112150925430598788304' rel='nofollow' target='_blank' title='Indonesia Adsense Publisher Discussion'><img class='HAa Eha' src='https://lh3.googleusercontent.com/-XPaOJudt6xE/Vl2S0eKQ3NI/AAAAAAAAMrQ/bqHfC_rpFyg/w408-h328-no/banner%2Biapd.jpg' style='width: 300px; height: 250px;'/></a>
                </div>
            </div>
        </div>
        <!--/.Sidebar-->
        <div class="col-md-9 wow fadeIn">
            <img src="{{asset('iklanpanjang.png')}}" alt="">
        </div>
    </div>
    <script id="dsq-count-scr" src="//https-www-voidinclude-id.disqus.com/count.js" async></script>
    @stop