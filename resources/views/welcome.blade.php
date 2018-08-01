<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
</head>
<body>

<section class="row header">
    <div class="row">
        <div class="top-bar-right">
            <ul class="">
                <li>logo</li>
                <li style="float: right;"><a href="#" id="signin">Sign in</a>
                or
                <a href="#" id="join">Join</a></li>
                <span id="pipe">|<span class="postfix"><i class="fi-magnifying-glass"></i></span></span>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
            <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="responsive-menu">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li><a href="#0">One</a></li>
                    <li><a href="#0">Two</a></li>
                    <li><a href="#0">Three</a></li>
                    <li><a href="#0">four</a></li>
                    <li><a href="#0">five</a></li>
                    <li><a href="#0">six</a></li>
                    <li><a href="#0">seven</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="main-slider" id="wrapper">
    <div class="home-carousel">
        <div><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
        <div><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
        <div><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
    </div>
</section>

<section class="new-collection">


</section>

<section class="new-products">



</section>


<section class="services">



</section>


<section class="more-products">



</section>


<section class="our-partner">



</section>

<section class="our-partner">



</section>

<section class="news-letter">


</section>

<section class="">


</section>


<script src="{{asset('node_modules/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('node_modules/what-input/dist/what-input.js')}}"></script>
<script src="{{asset('node_modules/foundation-sites/dist/js/foundation.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).foundation();

    $(document).ready(function () {
        $('.home-carousel').slick({
            autoplay: true,
            arrows:true,
            autoplaySpeed: 2000,
        });
    });

</script>
<script src="{{asset('css/slick/slick.js')}}"></script>


</body>
</html>
