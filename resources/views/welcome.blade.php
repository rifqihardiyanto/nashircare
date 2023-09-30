
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="{{ asset('images/new/logo.png') }}" type="{{ asset('image/x-icon') }}">

    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>NashirCare</title>
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
                    <a href="{{ url('/') }}">NashirCare</a>
                </div>
                <div class="main-menu">
                    <div class="menu">
                        <ul>
                            <li><a href="#home" class="active">Home</a></li>
                            <li><a href="#product">Product</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#benefit">Benefit</a></li>
                            {{-- <li><a href="#review">Review</a></li> --}}
                        </ul>
                        <div class="header__btn">
                            <a href="https://shopee.co.id/nashir_official_store" target="_blank" class="lab-btn">Shop Now</a>
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
                            <h3>Mencari Peluang Bisnis dengan Modal Minimal Tapi Hasil Maksimal?</h3>
                            <h2>Jadi <span>Distributor </span>Nashir Jawabannya!</h2>
                            <p>Produk Kesehatan yang Teruji klinis dan Dipercaya Masyarakat Indonesia</p>
                            <a href="https://shopee.co.id/nashir_official_store" target="_blank" class="lab-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">   
                        <div class="banner__thumb wow fadeInUp" data-wow-delay=".7s">
                            <img src="{{ asset('images/new/home.png') }}" alt="rajibraj">
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
                <h3>Our Nashir <span> Product</span></h3>
                <p>Inilah Produk yang Akan Mendatangkan Keuntungan bagi Anda!</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="{{ url('nashir-foam') }}"><img src="{{ asset('images/produk/foam1.png') }}" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                <h5><a href="{{ url('nashir-foam') }}">Nashir Foam</a></h5>
                                <a href="{{ url('nashir-foam') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="{{ url('nashir-kapsul') }}"><img src="{{ asset('images/produk/kapsul1.png') }}" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                <h5><a href="shop-single.html">Nashir Capsule</a></h5>
                                <a href="{{ url('nashir-kapsul') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="{{ url('nashir-oil') }}"><img src="images/product/03.png" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                <h5><a href="{{ url('nashir-oil') }}">Nashir Oil</a></h5>
                                <a href="{{ url('nashir-oil') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                        <div class="product__item">
                            <div class="product__thumb">
                                <a href="{{ url('nashir-cream') }}"><img src="{{ asset('images/produk/cream1.png') }}" alt="rajibraj"></a>
                            </div>
                            <div class="product__content">
                                
                                <h5><a href="{{ url('nashir-cream') }}">Nashir Cream</a></h5>
                                <a href="{{ url('nashir-cream') }}" class="lab-btn bg-transparate">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Product Section Ends Here========== -->



    <!-- ==========About Section Starts Here========== -->
    <div class="about about--one bg-img" style="{{ asset('images/new/back2.png') }}" id="about">
        <div class="container">
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about__content wow fadeInLeft" data-wow-delay=".5s">
                        <h3>PROUDLY PRESENT <span>NASHIR </span> Carrying for a Better Life</h3>
                        <p>Brand kesehatan yang berfokus pada perawatan ambeien. Diformulasi dengan teknologi mutakhir untuk mengatasi keluhan seperti benjolan, nyeri, gatal, dan pendarahan.</p>
                        <p>Ambeien adalah masalah kesehatan yang berisiko tinggi terhadap kualitas hidup penderitanya. Bahkan, 12,5 juta pendudukan Indonesia terkonfirmasi menderita ambeien. Sayangnya, tingkat kesadaran penderita justru tidak sepadan dengan bahaya yang mengintai.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about__thumb text-center text-lg-end wow fadeInUp" data-wow-delay=".5s">
                        <img src="{{ asset('images/new/second2.png') }}" alt="rajibraj">
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
                <h3>Apa Saja Keuntungannya?</h3>
                {{-- <p>Conveniently customize proactive services leveraged without continualliery aggregate fricctionle ou wellies</p> --}}
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/Profitbesar.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Profit Besar</h5>
                                    {{-- <p>Conveniently and proacveu nique and ideasy use producton.</p> --}}
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/berkualitas.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Produk Berkualitas
                                    </h5>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".7s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/dukunganmarketing.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Dukungan Marketing
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="care__thumb text-center wow fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset('images/new/3.png') }}" alt="rajibraj">
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <ul>
                            <li class=" wow fadeInRight" data-wow-delay=".5s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/content.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Support Konten Berupa Video dan Foto
                                    </h5>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".6s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/competitor.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Saingan Minim
                                    </h5>
                                </div>
                            </li>
                            <li class=" wow fadeInRight" data-wow-delay=".7s">
                                <div class="care__icon">
                                    <img src="{{ asset('images/new/repeat.png') }}" alt="rajibraj">
                                </div>
                                <div class="care__content">
                                    <h5>✔ Potensi Repeat Order Tinggi</h5>
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
    {{-- <div class="htu padding-tb bg-img" style="background-image: url(images/bg/02.jpg);" id="htu">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-12 offset-lg-6">
                    <div class="htu__content w-100 wow fadeInUp" data-wow-delay=".5s">
                        <h3>MENGAPA HARUS <span>NASHIR?</span></h3>
                    </div>
                    <div class="htu__lists">
                        <ul>
                            <li class=" wow fadeInLeft" data-wow-delay=".5s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/01.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Masyarakat Indonesia Lebih Percaya dengan Pengobatan Alternatif Selain Operasi</h5>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".6s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/02.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Produk Perawatan Ambeien Tetap Dibutuhkan Meskipun Penderita Sudah Sembuh</h5>
                                </div>
                            </li>
                            <li class=" wow fadeInLeft" data-wow-delay=".7s">
                                <div class="htu__icon">
                                    <img src="images/htu/icon/03.png" alt="rajibraj">
                                </div>
                                <div class="htu__content">
                                    <h5>Ketersediaan 4 Varian Nashir Mampu Mengatasi Ambeien Sesuai Kebutuhan Konsumen</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                        <h2>GABUNG <span>SEGERA!</span> </h2>
                        <p>Dapatkan Keuntungan hingga Puluhan Juta Setiap Harinya! <br>Jangan Lewatkan Kesempatan Menjadi Pebisnis Sukses Bersama Kami!</p>
                        <a href="{{ url('https://wa.me/625602977911') }}" class="lab-btn">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Offer Section Ends Here========== -->

    <!-- ==========Feature Section Starts Here========== -->
    {{-- <div class="feature padding-tb">
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
    </div> --}}
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
                                <h5>NashirCare</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <p>Carrying for a Better Life</p>
                                <ul>
                                    {{-- <li>
                                        <div class="icon"><i class="icofont-phone"></i></div>
                                        <div class="text">+(141 - 589 - 548 - 656</div>
                                    </li> --}}
                                    <li>
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">official@nashircare.id</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="icofont-google-map"></i></div>
                                        <div class="text">Jl. Palagan Tentara Pelajar No.KM 08, Karang Moko, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</div>
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
                                    <li><a href="#">Nashir Foam</a></li>
                                    <li><a href="#">Nashir Cream</a></li>
                                    <li><a href="#">Nashir Capsule</a></li>
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
                                    <li><a href="https://instagram.com/nashircare.id?igshid=MzRlODBiNWFlZA==" target="_blank">Instagram</a></li>
                                    <li><a href="https://www.tiktok.com/@nashircare.id" target="_blank">Tiktok</a></li>
                                    <li><a href="https://shopee.co.id/nashir_official_store" target="_blank">Shoppe</a></li>
                                    <li><a href="https://www.tokopedia.com/nashircareofficialstore" target="_blank">Tokopedia</a></li>
                                    <li><a href="https://www.bukalapak.com/u/nashircare_official_sto_762735" target="_blank">Bukalapak</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__product">
                            <div class="footer__title wow fadeInUp" data-wow-delay=".5s">
                                <h5>Menu</h5>
                            </div>
                            <div class="footer__body wow fadeInUp" data-wow-delay=".5s">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#product">Product</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#benefit">Benefit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom wow fadeInUp" data-wow-delay=".5s">
            <div class="container">
                <p>&copy; 2023 <a href="{{ url('/') }}">NashirCare</a></p>
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