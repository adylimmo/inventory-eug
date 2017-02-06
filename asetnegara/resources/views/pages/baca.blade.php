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
				<h2><a>{!!$data->title!!}</a></h2>
				<p><h6><i class="fa fa-folder" aria-hidden="true"></i> {{$data->nama_category}} <i class="fa fa-user" aria-hidden="true"></i> <a title="{{$data->email}}"> {{$data->first_name}}</a>  <i class="fa fa-calendar" aria-hidden="true"></i> {{date('d F, Y', strtotime($data->created_at))}}</h6></p>
				<div class="addthis_inline_share_toolbox"></div>
			</div>
			<div class="excerpt">

				<p>{!!$data->detail!!}</p>
			</div>
			<hr>
			<div id="disqus_thread"></div>
			<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = '//https-www-voidinclude-id.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

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
					<a href='https://plus.google.com/u/0/communities/112150925430598788304' rel='nofollow' target='_blank' title='Indonesia Adsense Publisher Discussion'><img class='HAa Eha' src='https://lh3.googleusercontent.com/-XPaOJudt6xE/Vl2S0eKQ3NI/AAAAAAAAMrQ/bqHfC_rpFyg/w408-h328-no/banner%2Biapd.jpg' style='width: 300px; height: 250px;'/></a>
				</div>
			</div>
		</div>
<div class="col-xs-6 col-md-3">
	<div class="widget-wrapper card">
		<div class="card-block">
			<p class="text-xs-center"><strong>Ads</strong></p>
			<hr>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- samping -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:600px"
     data-ad-client="ca-pub-5939532361746718"
     data-ad-slot="9761961388"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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