<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="lab-tec.fr">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="{{asset('img/ithrytec/it.png')}}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--title-->
    <title>Lab-Tec.fr</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- endbuild -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .cnt{
            position: relative;text-align: center;color: white;
        }
        .btm{
            position: absolute;bottom: 8px;left: 16px;
        }
        .order_list{
            display: table;
            margin: 0 auto;
            text-align: left;
        }
        .solution:hover{
            /*text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;*/
            box-shadow: 10px 10px 20px grey;
        }
    </style>
</head>

<body>

<!--loader start-->
<div id="preloader">
    @include('layouts.loader')
</div>
<!--loader end-->

<!--header section start-->
<header id="header" class="header-main headroom">
     @include('layouts.header_menu')
</header>
<!--header section end-->

<div class="main">

    @yield('content')

</div>

<!--footer section start-->
<footer class="footer-section">
    @include('layouts.footer')
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-rocket"></span>
</button>
<!--bottom to top button end-->
<!--build:js-->
<script src="{{asset('js/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/vendors/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/vendors/validator.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.rcounterup.js')}}"></script>
<script src="{{asset('js/vendors/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/vendors/hs.megamenu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<!--endbuild-->
</body>

</html>
