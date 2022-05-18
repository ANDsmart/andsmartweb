<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>ANDsmart - CREATIVITY | TECHNOLOGY </title>
    <link rel="shortcut icon" href="img/small icon.png" />
    {{ Html::style(url('css/plugins.css')) }}
    {{ Html::style(url('css/style.css')) }}


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Preloader -->
<div id="preloader"></div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Sidebar Section -->
<a href="#" class="js-bauen-nav-toggle bauen-nav-toggle"><i></i></a>


  @include('includes.sidebar')
<!-- Main -->
<div id="bauen-main">
    <!-- Slider -->
    @include('includes.header')
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
    @yield('content')

    <!-- Footer -->
        @include('includes.footer')
    </div>
</div>
<!-- jQuery -->
{{ Html::script(url('js/jquery-3.5.1.min.js')) }}
{{ Html::script(url('js/jquery-migrate-3.0.0.min.js')) }}
{{ Html::script(url('js/modernizr-2.6.2.min.js')) }}
{{ Html::script(url('js/pace.js')) }}
{{ Html::script(url('js/popper.min.js')) }}
{{ Html::script(url('js/bootstrap.min.js')) }}
{{ Html::script(url('js/scrollIt.min.js')) }}
{{ Html::script(url('js/jquery.waypoints.min.js')) }}
{{ Html::script(url('js/owl.carousel.min.js')) }}
{{ Html::script(url('js/jquery.stellar.min.js')) }}
{{ Html::script(url('js/jquery.magnific-popup.js')) }}
{{ Html::script(url('js/YouTubePopUp.js')) }}
{{ Html::script(url('js/custom.js')) }}

</body>


</html>
