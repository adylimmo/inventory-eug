@extends('layouts.main')
@section('pageTitle')
{!!$data->title!!}
@endsection
@section('titel')
{!!$data->nama_category!!} -
@endsection
@section('desc')
{{substr(strip_tags($data->detail),0,300)}}
@endsection
@section('content')
<section class="section section-blog-fw">
	<div class="row">
		<div class="col-md-9 wow fadeIn">
			
			<img src="{{asset('banner.png')}}">
			<div class="jumbotron wow fadeIn" data-wow-delay="0.2s">
				<h2><a href="{{url('/baca',$data->slug)}}">{!!$data->title!!}</a></h2>
				<p><h6><i class="fa fa-folder" aria-hidden="true"></i> {{$data->nama_category}} <i class="fa fa-user" aria-hidden="true"></i> <a title="{{$data->email}}"> {{$data->first_name}}</a>  <i class="fa fa-calendar" aria-hidden="true"></i> {{date('d F, Y', strtotime($data->created_at))}}</h6></p>
				<div class="addthis_inline_share_toolbox"></div>
			</div>
			<div class="excerpt">

				<p>{{substr(strip_tags($data->detail),0,300)}}</p>
			</div>
			<hr>

</div>
<!--Sidebar-->
<div class="col-xs-6 col-md-3">
	<div class="widget-wrapper card">
		<div class="card-block">
			<p class="text-xs-center"><strong>Ads</strong></p>
			<hr>
			<img src="{{asset('iklan.png')}}">
		</div>
	</div>
</div>
<div class="col-xs-6 col-md-3">
	<div class="widget-wrapper card">
		<div class="card-block">
			<!-- SnapWidget -->
			<script src="https://snapwidget.com/js/snapwidget.js"></script>
			<iframe src="https://snapwidget.com/embed/281439" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
		</div>
	</div>
</div>
<div class="col-md-9 wow fadeIn">
	<img src="{{asset('iklanpanjang.png')}}" alt="">
</div>
<!--/.Sidebar-->
</div>
@endsection