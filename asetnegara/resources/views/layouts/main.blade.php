<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('pageTitle')">
    <meta property="og:description" content="@yield('desc')">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="https://www.voidinclude.id/share.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="@yield('desc')">
    <meta name="twitter:title" content="@yield('pageTitle')">
    <meta name="twitter:image" content="https://www.voidinclude.id/share.png">

    <title>@yield('titel') @yield('pageTitle') - Voidinclude.id</title>
    <link rel="author" href="http://plus.google.com/116272911496809262750" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssbotstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylebaru.css')}}">
    @yield('head')

</head>

<body class="fixed-sn green-skin">
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '373964099614203',
          xfbml      : true,
          version    : 'v2.8'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@include('partials.above-navbar-alert')
<header>
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">
        <li>
            <div class="logo-wrapper waves-light sn-avatar-wrapper">
                <a href="https://www.voidinclude.id">
                    <img src="{{asset('voidlogo.png')}}" class="rounded-circle">
                </a>
            </div>
        </li>
        <li>
            <div class="about">
                <p>Informasi bahasa pemograman.</p>
            </div>
        </li>
        <li>
            <ul class="social">
                <li><a href="https://twitter.com/MDBootstrap" target="_blank" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="https://dribbble.com/mdbootstrap" target="_blank" class="icons-sm drib-ic"><i class="fa fa-dribbble"> </i></a></li>
                <li><a href="https://www.linkedin.com/in/michal-szymanski-9228918a" target="_blank" class="icons-sm li-ic"><i class="fa fa-linkedin"> </i></a></li>
                <li><a href="https://www.instagram.com/material_design_for_bootstrap/" target="_blank" class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
            </ul>
        </li>
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bus"></i> Laravel<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Installasi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-camera"></i> Codeigniter<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Installasi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope"></i> Contact us<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">FAQ</a>
                            </li>
                            <li><a href="#" class="waves-effect">Tentang kami.</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <div class="breadcrumb-dn">
            <p> <a href="{{ url('/') }}">Voidinclude.id</a></p>
        </div>
        <ul class="nav navbar-nav float-xs-right">
            @if(!Auth::check())
            <li class="nav-item ">
                <a href="{{ url('login') }}" class="nav-link"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Login</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('register') }}"> Register</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="#"> {{ Auth::user()->first_name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.voidinclude.id/admin/tulis">Tulis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.voidinclude.id/admin/lihat">Lihat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"> Logout</a>
            </li>
            @endif
        </ul>
    </nav>
</header>

<main>
    <div class="container-fluid">
        @yield('content')

    </div> <!-- /container -->
</main>
<footer class="page-footer center-on-small-only">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <h5 class="title">voidinclude</h5>
                <p>Informasi tentang bahasa pemograman.</p>
            </div>
            <hr class="hidden-md-up">
            <div class="col-md-5 offset-md-1">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">FAQ</a></li>
                    <li><a href="https://www.voidinclude.id/privacypolicy">Privacy Policy</a></li>
                    <li><a href="https://www.voidinclude.id/disclaimer">Disclaimer</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="social-section">
        <ul>
            <li><a href="https://www.facebook.com/mdbootstrap" target="_blank" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a href="https://twitter.com/MDBootstrap" target="_blank" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a href="https://plus.google.com/u/0/+Mdbootstrap" target="_blank" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a href="https://pl.linkedin.com/in/dawid-adach-97435534/pl" target="_blank" class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a href="https://pl.pinterest.com/materialdesignf/" target="_blank" class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a href="https://www.instagram.com/material_design_for_bootstrap/" target="_blank" class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <div class="footer-copyright">
        <div class="container-fluid">
            © Design By: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type='text/javascript' src="{{asset('js/bootjscoba.min.js')}}"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('.mdb-select').material_select();
  });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/js/mdb.min.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581b74a99e0ba983"></script> 

@yield('footer')
</body>
</html>
