<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Zurit </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <section class="header">
        <div class="row">
            <div class="header-content">
                <ul class="menu-top">
                    <li class="main-logo"><img src="{{asset('./images/zurit-logo.png')}}" alt=""></li>
                    <li class="registration">
                        <a href="#" id="signin">sign in</a>
                        or
                        <a href="#" id="join"> Join </a><span> | <i class="fa fa-search"></i></span>
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
            <div style="background-image: url('/images/Bitmap.jpg')">
                <div class="carousel-size">
                    <div class="carousel-content">
                        <p>Affordable quality<br> Lifestyle</P><br>
                        <small><u>see more</u></small>
                    </div>
                </div>

            </div>
            <div class="collection-1" style="background-image: url('/images/rice.png')">
                <div class="carousel-size">
                    <div class="carousel-content">
                        <p>Affordable quality<br> Lifestyle</P><br>
                        <small><u>see more</u></small>
                    </div>
                </div>

            </div>
            <div style="background-image: url('./images/Bitmap.jpg');">
                <div class="carousel-size">
                    <div class="carousel-content">
                        <p>Affordable quality<br> Lifestyle</P><br>
                        <small><u>see more</u></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-paginator">
            <ul>
                <li class="next carousel-arrows"><i class="fa fa-angle-right"></i></li>
                <li class="prev carousel-arrows"><i class="fa fa-angle-left"></i></li>
            </ul>
        </div>
    </section>

    <section class="new-collection">
        <h4 class="heading"><strong>NEW COLLECTION</strong></h4>
        <div class="grid-x">
            <div class="medium-offset-1 small-12 medium-4">

                <div class="card collection-1 bitmap">
                    <div class="card-text">
                        <span class="in-text"> Sanitary </span><br>
                        <span class="bold-text">Bidet</span>
                    </div>

                </div>
            </div>
            <div class="small-12 medium-6">
                <div class="grid-x">
                    <div class="card collection-1 bit-side"
                         style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/rice.png');">
                        <div class="card-text">
                            <span class="in-text"> Sanitary </span><br>
                            <span class="bold-text">Bathtubs</span>
                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="small-6 medium-7">
                        <div class="card collection-1 bit-side"
                             style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/tiles.png');margin-right: 15px;">
                            <div class="card-text">
                                <span class="in-text" style=""> Tiles </span><br>
                                <span class="bold-text">Ceramic Tiles</span>
                            </div>
                        </div>
                    </div>
                    <div class="small-6 medium-5">
                        <div class="card collection-1 bit-side"
                             style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/door.png');">
                            <div class="card-text">
                                <span class="in-text"> Door </span><br>
                                <span class="bold-text">Flush Door</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-products">
        <h4 class="heading"><strong>NEW PRODUCTS</strong></h4>
        <div class="grid-x">
            <div class="medium-offset-1 medium-10">
                <div class="grid-x">
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap1" style="background-image: url('./images/Bitmap1.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>
                        </div>
                        <div class="card-section">
                            <h6><strong>Schneider Electric Bell</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>

                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap2.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

                        </div>
                        <div class="card-section">
                            <h6><strong>Philips Doble switch</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>
                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap3.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

                        </div>
                        <div class="card-section">
                            <h6><strong>Philips Doble switch</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>
                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap4.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

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
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

                        </div>
                        <div class="card-section">
                            <h6><strong>Schneider Electric Bell</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>
                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap6.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

                        </div>
                        <div class="card-section">
                            <h6><strong>Schneider Electric Bell</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>
                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap7.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span>
                            </div>

                        </div>
                        <div class="card-section">
                            <h6><strong>Schneider Electric Bell</strong></h6>
                            <h6 class="subheader">Electric fittings</h6>
                        </div>
                    </div>
                    <div class="small-6 medium-3">
                        <div class="card collection-1 bitmap2" style="background-image: url('./images/Bitmap8.png');">
                            <div class="overlay"><span class="overlay-text">View Product</span></div>

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
                <div class="grid-x" style="margin-top: 100px;">
                    <div class="small-12 medium-8">
                        <div class="card collection-1 large-card" style="background-image: url('./images/card.png');">

                            <div class="services-content" style="">
                                <h6 class="subheader">Services</h6><h5 class="bold-service-text"><strong>QUALITY
                                        INTERIOR
                                        <br> DESIGN </strong></h5>
                            </div>

                        </div>
                    </div>
                    <div class="small-12 medium-4">
                        <div class="grid-x">
                            <div class="medium-12 small-12">
                                <div class="card collection-1"
                                     style="background-image: url('./images/Bitmap9.png');height: 245px;">

                                </div>
                            </div>

                        </div>
                        <div class="grid-x">
                            <div class="medium-12 small-12">
                                <div class="card collection-1"
                                     style="background-image: url('./images/Bitmap10.png');height: 240px;">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <h4 class="more-products-top"><strong>MORE PRODUCTS</strong></h4>
                <div class="grid-x services-bottom">
                    <div class="more-product medium-12 columns">
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap11.jpg')}}')">

                            </div>
                        </div>
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap12.jpg')}}')">

                            </div>
                        </div>
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap13.jpg')}}')">

                            </div>
                        </div>
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap14.jpg')}}')">

                            </div>
                        </div>
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap12.jpg')}}')">

                            </div>
                        </div>
                        <div style="padding:2%;">
                            <div class="collection-1"
                                 style="height:300px;background-image: URL('{{asset('./images/Bitmap14.jpg')}}')">

                            </div>
                        </div>
                    </div>
                    <div class="medium-12 columns">
                        <div class="paginator">
                            <ul>
                                <li class="prev slider-arrow"><i class="fa fa-angle-right"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="paginator">
                        <ul>
                            <li class="next slider-arrow"><i class="fa fa-angle-left"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-partners grid-x collection-1" style="background-image: url('./images/partners.jpg');">


    </section>


    <section class="news-letter">
        <div class="grid-x newsletter-grid">
            <div class="medium-4 small-12">
                <h3 class="join"><strong>Join our newsletter</strong></h3>
            </div>
            <div class="medium-4 small-12">
                <p>Enter your email and we will keep you <br> posted on news and updates!</p>
            </div>
            <div class="medium-4 small-12">
                <form action="#">
                    <div class="grid-x">
                        <div class="medium-9 columns">
                            <input type="text" class="email-input" placeholder="Your Email">
                        </div>
                        <div class="medium-7 columns">
                            <input type="text" placeholder="Choose your Country" class="email-input">
                        </div>
                        <div class="medium-2 columns">
                            <button class="send-button"> Send</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section class="main-footer">
        <div class="grid-x main-grid">
            <div class="medium-offset-1 small-12 medium-10 grid-offset">
                <div class="grid-x sub-grid">

                    <div class="small-12 medium-3">
                        <h6 class="subheader"><strong>Contact</strong></h6>
                        <p><strong>
                                6th floor, the Chancery,
                                <br>Valley Road,Nairobi,Kenya<br>
                                Tel +254(0)203929000
                            </strong></p>
                        <h6 class="subheader"><strong>General Requests</strong></h6>
                        <p><strong>support@zurit.com</strong></p>

                        <h6 class="subheader"><strong>Online shop</strong></h6>
                        <p><b>Zurit.com/products</b></p>
                    </div>

                    <div class="small-12 medium-2">
                        <h6 class="subheader"><strong>Products</strong></h6>
                        <li><a href="#">Tiles</a></li>
                        <li><a href="#">Sanitary</a></li>
                        <li><a href="#">Electrical Fittings</a></li>
                        <li><a href="#">Light Fittings</a></li>
                        <li><a href="#">Iron Fittings</a></li>
                        <li><a href="#">Doors</a></li>
                        <li><a href="#">Kitchen</a></li>
                    </div>

                    <div class="small-6 medium-2">
                        <h6 class="subheader"><strong>About Us</strong></h6>
                        <li><a href="#">About</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Location</a></li>
                    </div>

                    <div class="small-6 medium-2">
                        <h6 class="subheader"><strong>Follow Us</strong></h6>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <br>
                        <br>
                        <h6 class="subheader"><strong>Downloads</strong></h6>
                        <li><a href="#">Catalogue</a></li>
                        <li><a href="#">Bronchure</a></li>
                    </div>
                    <div class="small-6 medium-3">
                        <a href="#" class="button"
                                style="height:60px;width: 60px;background-color: transparent;border-color: white;float:right;"><i
                                    class="fa fa-angle-up">Up</i></a>
                    </div>

                </div>
                <div class="copyright-text"><p>&copy; 2018 Zurit by Cytonn LLP</p></div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/app.js')}}"></script>

</div>
<script>
    $(document).foundation();

    $(document).ready(function () {
        $('.home-carousel').slick({
            autoplay: true,
            // arrows: false,
            autoplaySpeed: 3000,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });

    });

    $('.more-product').slick({
        autoplay: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 3,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: true
                }
            }
        ]
    });

</script>
</body>
</html>
