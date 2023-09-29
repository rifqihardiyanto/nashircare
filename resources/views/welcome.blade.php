
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="css/favicon.png" type="image/x-icon">

    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>nashircare</title>
</head>

<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    
    <!-- ==========Header Section Starts Here========== -->
    <header class="header header--one">
        <div class="container">
            <div class="area">
                <div class="logo">
                    <a href="index.html">Nashircare</a>
                </div>
                <div class="main-menu">
                    <div class="menu">
                        <ul>
                            <li><a href="#home" class="active">Home</a></li>
                            <li><a href="#benefit">Benefits</a></li>
                            <li><a href="#htu">How to use</a></li>
                            <li><a href="#product">Other Product</a></li>
                            <li><a href="#review">Review</a></li>
                        </ul>
                        <div class="header__btn">
                            <a href="shop.html" class="lab-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="header__bararea">
                        <div class="header__bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->



    
    <!-- ==========Banner Section Starts Here========== -->
    <div class="banner banner--one position-relative" id="home">
        <div class="shape">
            <div class="shape__item wow fadeInDown" data-wow-delay=".5s">
                <img src="images/banner/shape/01.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInRight" data-wow-delay=".5s">
                <img src="images/banner/shape/02.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInLeft" data-wow-delay=".5s">
                <img src="images/banner/shape/03.png" alt="rajibraj">
            </div>
            <div class="shape__item wow fadeInUp" data-wow-delay=".5s">
                <img src="images/banner/shape/04.png" alt="rajibraj">
            </div>
        </div>
        <div class="container">
            <div class="banner__area">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 col-12">
                        <div class="banner__content wow fadeInUp" data-wow-delay=".6s">
                            <h3>Natural & Organic</h3>
                            <h2>Skin <span>Care Product For</span> Health</h2>
                            <p>Conveniently customize proactive web services for leveraged without continualliery aggregate fricctionle ou wellies richard.and very customize  continually.</p>
                            <a href="shop.html" class="lab-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="banner__thumb wow fadeInUp" data-wow-delay=".7s">
                            <img src="images/banner/01.png" alt="rajibraj">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    <!-- ==========Product Section Starts Here========== -->
    <div class="product padding-tb" id="product">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3>Our Haldaa <span>skincare Product</span></h3>
                <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="shop-single.html"><img src="images/product/01.png" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                {{-- <div class="product__rating">
                                    <ul>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><span>( 5 reviews )</span></li>
                                    </ul>
                                </div> --}}
                                <h5><a href="shop-single.html">Nashir Foam</a></h5>
                                {{-- <span class="product__price">$257.35</span> --}}
                                <a href="{{ url('nashir-foam') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="shop-single.html"><img src="images/product/02.png" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                {{-- <div class="product__rating">
                                    <ul>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><span>( 5 reviews )</span></li>
                                    </ul>
                                </div> --}}
                                <h5><a href="shop-single.html">Nashir Kapsul</a></h5>
                                {{-- <span class="product__price">$257.35</span> --}}
                                <a href="{{ url('nashir-kapsul') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="shop-single.html"><img src="images/product/03.png" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                {{-- <div class="product__rating">
                                    <ul>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><span>( 5 reviews )</span></li>
                                    </ul>
                                </div> --}}
                                <h5><a href="shop-single.html">Nashir Oil</a></h5>
                                {{-- <span class="product__price">$257.35</span> --}}
                                <a href="{{ url('nashir-oil') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="shop-single.html"><img src="images/product/04.png" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                {{-- <div class="product__rating">
                                    <ul>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><i class="icofont-ui-rating"></i></li>
                                        <li><span>( 5 reviews )</span></li>
                                    </ul>
                                </div> --}}
                                <h5><a href="shop-single.html">Nashir Salep</a></h5>
                                {{-- <span class="product__price">$257.35</span> --}}
                                <a href="{{ url('nashir-salep') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Product Section Ends Here========== -->



    <!-- ==========About Section Starts Here========== -->
    <div class="about about--one bg-img" style="background-image: url(images/bg/01.jpg)">
        <div class="container">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__content wow fadeInLeft" data-wow-delay=".5s">
                        <h3>Glowing skin is a <span>result of proper</span> skin care</h3>
                        <p>Continually productize compelling quality for packed with  elated productize compelling quality for packed in  with all elated Them Setting up to website and creating pages.</p>
                        <p>Continually productize compelling quality for packed with  elated productize compelling quality for packed in with all elated Them aroductize compelling quality for packed in  with all elated Them Setting up to website and creating pages.</p>
                        <a href="shop.html" class="lab-btn">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb text-center text-lg-end wow fadeInUp" data-wow-delay=".5s">
                        <img src="images/about/01.png" alt="rajibraj">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========About Section Ends Here========== -->



    <!-- ==========Care Section Starts Here========== -->
    <div class="care padding-tb" id="benefit">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3>Best benefits of <span>Haldaa skincare</span></h3>
                <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div class="care__icon">
                                    <img src="images/care/icon/01.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Environmental Impact</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div class="care__icon">
                                    <img src="images/care/icon/02.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>No Internal Side Effects</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".7s">
                                <div class="care__icon">
                                    <img src="images/care/icon/03.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Lack of Artificial Smell</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="care__thumb text-center wow fadeInUp" data-wow-delay=".5s">
                            <img src="images/care/01.png" alt="rajibraj">
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li class=" wow fadeInRight" data-wow-delay=".5s">
                                <div class="care__icon">
                                    <img src="images/care/icon/04.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>No Skin Irritation</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".6s">
                                <div class="care__icon">
                                    <img src="images/care/icon/05.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Exceeding Standards</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".7s">
                                <div class="care__icon">
                                    <img src="images/care/icon/06.png" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>Real Results</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Care Section Ends Here========== -->


    <!-- ==========How to use Section Starts Here========== -->
    <div class="htu padding-tb bg-img" style="background-image: url(images/bg/02.jpg);" id="htu">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 offset-lg-6">
                    <div class="htu__content w-100 wow fadeInUp" data-wow-delay=".5s">
                        <h3>How to use our <span>skincare Product</span></h3>
                        <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p>
                    </div>
                    <div class="htu__lists">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/01.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Wash face with warm water</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/02.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Apply cream on face</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".7s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/03.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Wait 10 mins and wash</h5>
                                    <p>Conveniently and proacveu nique and ideasy use producton.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========How to use Section Ends Here========== -->



    




    <!-- ==========Testimonial Section Start Here========== -->
    {{-- <div class="testimonial testimonial--one padding-tb bg-img" style="background-image: {{ asset('url(images/bg/01.jpg)') }}" id="review">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h3>Our Customer Said <span>About skincare</span></h3>
                <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p>
            </div>
            <div class="section__wrapper">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="images/testimonial/01.jpg" alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Kristin Watson</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <div class="testimonial__content--count">3.4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="{{ asset('images/testimonial/02.jpg') }}" alt="rajib raj">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Leslie Alexander</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <div class="testimonial__content--count">3.4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Testimonial Section Ends Here========== -->



    <!-- ==========Offer Section Start Here========== -->
    <div class="offer offer--one padding-tb">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 offset-lg-6">
                    <div class="offer__content wow fadeInUp" data-wow-delay=".5s">
                        <h2>Buy Now And <span>Get 40% Off</span> on Your First Purchase !</h2>
                        <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p>
                        <a href="shop.html" class="lab-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Offer Section Ends Here========== -->

    <!-- ==========Feature Section Starts Here========== -->
    <div class="feature padding-tb">
        <div class="container">
            <div class="feature__area wow fadeInUp" data-wow-delay=".5s">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="images/feature/01.png" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5>100% Organic</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="images/feature/02.png" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5>No Fragrances</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="images/feature/03.png" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5>Paraben Free</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="feature__item">
                            <div class="feature__thumb">
                                <img src="images/feature/04.png" alt="rajibraj">
                            </div>
                            <div class="feature__content">
                                <h5>Hypo Allergenic</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Feature Section Ends Here========== -->



    <!-- ==========Newsletters Section Start Here========== -->
    {{-- <div class="newsletter newsletter--one padding-tb bg-img" style="background-image: url(images/bg/06.jpg);">
        <div class="container">
            <div class="col-xl-6 col-lg-7 col-12">
                <div class="newsletter__content wow fadeInUp" data-wow-delay=".5s">
                    <h3><span>Subscribe Our Newsletter</span></h3>
                    <form action="#">
                        <input type="text" placeholder="Enter your Email">
                        <button type="submit">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Newsletters Section Ends Here========== -->

    
    

    
    <!-- ==========Footer Section Ends Here========== -->
    <footer class="footer">
        <div class="footer__top padding-tb">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__about">
                            <div class="footer__title wow fadeInUp" data-wow-delay=".5s">
                                <h5>Haldaa</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <p>Aliquam pellentesque pellentese neque vitae elementum.</p>
                                <ul>
                                    <li>
                                        <div class="icon"><i class="icofont-phone"></i></div>
                                        <div class="text">+(141 - 589 - 548 - 656</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">infohaldaa@gmail.com</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="icofont-google-map"></i></div>
                                        <div class="text">Birkbeck Court, Birkbeck Rd, London W3 6BQ, UK</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title wow fadeInUp" data-wow-delay=".5s">
                                <h5>Other Product</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <ul>
                                    <li><a href="#">Ladies Shampoo</a></li>
                                    <li><a href="#">Care Drop</a></li>
                                    <li><a href="#">Silver Spray</a></li>
                                    <li><a href="#">himalaya</a></li>
                                    <li><a href="#">olay</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__link">
                            <div class="footer__title wow fadeInUp" data-wow-delay=".5s">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <ul>
                                    <li><a href="#">Benefits</a></li>
                                    <li><a href="#">How to use</a></li>
                                    <li><a href="#">Other Product</a></li>
                                    <li><a href="#">Review</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title wow fadeInUp" data-wow-delay=".5s">
                                <h5>We Sell on</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <ul>
                                    <li><a href="#">Walmart.com</a></li>
                                    <li><a href="#">Amazon.com</a></li>
                                    <li><a href="#">Ebay.com</a></li>
                                    <li><a href="#">alibaba.com</a></li>
                                    <li><a href="#">ali Express.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom wow fadeInUp" data-wow-delay=".5s">
            <div class="container">
                <p>&copy; 2023 <a href="index.html">Haldaa</a> all Right Reserved by <a href="https://themeforest.net/user/codexcoder" target="_blank">CodexCoder</a></p>
            </div>
        </div>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->

    
    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-arrow-turn-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/circularProgressBar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/viewport.jquery.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>