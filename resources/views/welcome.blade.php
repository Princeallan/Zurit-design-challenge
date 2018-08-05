<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Zurit </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
</head>
<body>

<section class="header">
    <div class="row">
        <div class="header-content">
            <ul class="menu-top">
                <li class="main-logo"><img src="{{asset('./images/zurit-logo.png')}}" alt=""></li>
                <li class="registration">
                    <a href="#" id="signin">Sign in</a>
                    or
                    <a href="#" id="join">Join | </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="row">
        <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
            <div class="title-bar-title">Menu</div>
        </div>

        <div class="top-bar" id="responsive-menu">
            <ul class="menu" data-dropdown-menu style="">
                <li><a href="#">Tiles</a></li>
                <li><a href="#">Sanitary</a></li>
                <li><a href="#">Light Fittings</a></li>
                <li><a href="#">Iron fittings</a></li>
                <li><a href="#">Doors</a></li>
                <li><a href="#">Kitchen</a></li>
                <li><a href="#">|</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About us</a></li>

                <li><a href="#">Contact us</a></li>
            </ul>

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
    <div class="grid-x">
        <div class="medium-offset-1 small-12 medium-4">
            <div class="card collection-1 bitmap">

            </div>
        </div>
        <div class="small-12 medium-6">
            <div class="grid-x">
                <div class="card collection-1"
                     style="background-image: url('./images/rice.png');height: 240px;margin: 10px;">

                </div>
            </div>
            <div class="grid-x">
                <div class="small-6 medium-7">
                    <div class="card collection-1"
                         style="background-image: url('./images/tiles.png');height: 240px;margin: 10px;">

                    </div>
                </div>
                <div class="small-6 medium-5">
                    <div class="card collection-1"
                         style="background-image: url('./images/door.png');height: 240px;margin: 10px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="new-products">
    <div class="grid-x">
        <div class="medium-offset-1 medium-10">
            <div class="grid-x">
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap1" style="background-image: url('./images/Bitmap1.png');">
                        <div class="overlay">View Product</div>
                    </div>
                    <div class="card-section">
                        <h6><strong>Schneider Electric Bell</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>

                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap2.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Philips Doble switch</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap3.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Philips Doble switch</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap4.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Philips Doble switch</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
            </div>
            <div class="grid-x row second">
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap1" style="background-image: url('./images/Bitmap5.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Schneider Electric Bell</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap6.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Schneider Electric Bell</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap7.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Schneider Electric Bell</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
                <div class="small-6 medium-3">
                    <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap8.png');">

                    </div>
                    <div class="card-section">
                        <h6><strong>Schneider Electric Bell</strong></h6>
                        <h6 class="subheader">Electric fittings</h6>
                    </div>
                </div>
            </div>
            <div class="hollow-button">
                <button class="hollow button alert">View All Products</button>
            </div>
        </div>
    </div>


</section>

<section class="services">
    <div class="grid-x ">
        <div class="small-12 medium-offset-1 medium-10">
            <div class="grid-x">
                <div class="small-12 medium-7">
                    <div class="card collection-1"
                         style="background-image: url('./images/card.png');height: 600px;">

                    </div>
                </div>
                <div class="small-12 medium-5">
                    <div class="grid-x">
                        <div class="medium-12 small-12">
                            <div class="card collection-1"
                                 style="background-image: url('./images/Bitmap9.png');height: 295px;">

                            </div>
                        </div>

                    </div>
                    <div class="grid-x">
                        <div class="medium-12 small-12">
                            <div class="card collection-1"
                                 style="background-image: url('./images/Bitmap10.png');height: 290px;">

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-x">
                <div class="small-12 medium-12">
                    <div class="responsive">
                        <div class="medium-3"><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
                        <div class="medium-3"><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
                        <div class="medium-3"><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
                        <div class="medium-3"><img src="{{asset('./images/Bitmap.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-partners">
    <div class="grid-x">
        <div class="card collection-1"
             style="background-image: url('./images/partners.jpg');height: 250px;margin-right: 15px;">

        </div>
    </div>

</section>


<section class="news-letter">
    <div class="grid-x" style="background-color: #c36e14 !important;
        height: 200px;
        color: white;">
        <div class="medium-4 small-12" style="text-align: center">
            <h4><strong>Join Our Newsletter</strong></h4>
        </div>
        <div class="medium-4 small-12" style="text-align: center">
            Enter your email and we will keep you posted on news and updates!
        </div>
        <div class="medium-4 small-12">

        </div>
    </div>
</section>

<section class="main-footer">
    <div class="grid-x" style="background-color: #222222; color: white;">
        <div class="medium-offset-1 medium-10" style=" margin-top: 80px;margin-bottom: 50px;">
            <div class="grid-x" style="list-style: none;font-weight:bold;margin-bottom: 50px">

            <div class="small-2 medium-2" style="margin-right: 20px">
                <h6 class="subheader"><strong>Contact</strong></h6>
                <p><strong>
                        6th floor, the Chancery,
                        <br>Valley Road,Nairobi,Kenya<br>
                        Tel +254(0)203929000
                    </strong></p>
                <h6 class="subheader"><strong>General Requests</strong></h6>
                <p ><strong>support@zurit.com</strong></p>

                <h6 class="subheader"><strong>Online shop</strong></h6>
                <p><b>Zurit.com/products</b></p>
            </div>

            <div class="small-2 medium-2" style=" ">
                <h6 class="subheader"><strong>Products</strong></h6>
                <li><a href="#">Tiles</a></li>
                <li><a href="#">Sanitary</a></li>
                <li><a href="#">Electrical Fittings</a></li>
                <li><a href="#">Light Fittings</a></li>
                <li><a href="#">Iron Fittings</a></li>
                <li><a href="#">Doors</a></li>
                <li><a href="#">Kitchen</a></li>
            </div>

            <div class="small-2 medium-2">
                <h6 class="subheader"><strong>About Us</strong></h6>
                <li><a href="#">About</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Location</a></li>
            </div>

            <div class="small-2 medium-2">
                <h6 class="subheader"><strong>Follow Us</strong></h6>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Newsletter</a></li>
                <br>
                <br>
                <h6 class="subheader"><strong>Downloads</strong></h6>
                <li ><a href="#">Catalogue</a></li>
                <li ><a href="#">Bronchure</a></li>
            </div>
        </div>
            <div style="text-align: center;color: grey"> <p>&copy; 2018 Zurit by Cytonn LLP</p></div>
        </div>
    </div>
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
            arrows: true,
            autoplaySpeed: 2000,
        });

    });
    $('.responsive').slick({
    slidesToShow: 4,
        slidesPerRow: 3,
        rows: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        responsive: [
        {
            breakpoint: 478,
            settings: {
                slidesPerRow: 1,
                rows: 1,
            }
        }
    ] });

        // $('.responsive').slick({
        //     dots: true,
        //     infinite: false,
        //     speed: 300,
        //     slidesToShow: 4,
        //     slidesToScroll: 4,
        //     responsive: [
        //         {
        //             breakpoint: 1024,
        //             settings: {
        //                 slidesToShow: 3,
        //                 slidesToScroll: 3,
        //                 infinite: true,
        //                 dots: true
        //             }
        //         }
        //     ]
        // });


</script>
<script src="{{asset('css/slick/slick.js')}}"></script>


</body>
</html>
