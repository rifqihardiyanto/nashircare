    @extends('produk.layout.index')

    @section('container')
    
    <!-- ==========Page Header Section Starts Here========== -->
    <div class="pageheader">
        <div class="container">
            <div class="pageheader__content">
                <h3>Shop Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Page Header Section Ends Here========== -->



    <!-- ==========Shop Section Start Here========== -->
    <div class="shop shop--single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4 g-lg-0 bg-lg-white">
                    <div class="col-lg-6 col-12">
                        <div class="singlethumb">
                            <div class="d-flex flex-wrap flex-sm-nowrap align-items-start flex-row-reverse">
                                <div class="singlethumb__left nav flex-sm-column nav-pills ms-md-3" id="v-pills-tab"
                                    role="tablist" aria-orientation="vertical">
                                    <div class="nav-link active" id="thumbOne-tab" data-bs-toggle="pill"
                                        data-bs-target="#thumbOne" role="tab" aria-controls="thumbOne"
                                        aria-selected="true">
                                        <div class="thumb">
                                            <img src="images/shop/01.jpg" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="nav-link" id="thumbTwo-tab" data-bs-toggle="pill"
                                        data-bs-target="#thumbTwo" role="tab" aria-controls="thumbTwo"
                                        aria-selected="false">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/02.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="nav-link" id="thumbThree-tab" data-bs-toggle="pill"
                                        data-bs-target="#thumbThree" role="tab" aria-controls="thumbThree"
                                        aria-selected="false">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/03.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="nav-link" id="thumbFour-tab" data-bs-toggle="pill"
                                        data-bs-target="#thumbFour" role="tab" aria-controls="thumbFour"
                                        aria-selected="false">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/04.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                </div>
                                <div class="singlethumb__right tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="thumbOne" role="tabpanel"
                                        aria-labelledby="thumbOne-tab">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/01.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbTwo" role="tabpanel"
                                        aria-labelledby="thumbTwo-tab">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/02.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbThree" role="tabpanel"
                                        aria-labelledby="thumbThree-tab">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/03.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbFour" role="tabpanel"
                                        aria-labelledby="thumbFour-tab">
                                        <div class="thumb">
                                            <img src="{{ asset('images/shop/04.jpg') }}" alt="rajibraj">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="singlecontent">
                            <h4>Nashir Kapsul</h4>
                            {{-- <h6><span>Price:</span> $290.99</h6>
                            <div class="rating">
                                <p>raing:</p>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <a href="#reviews">(4 customer reviews)</a>
                            </div> --}}
                            <p>Basic straight fit cotton t-shirt with a v-neckline ecologically grown cotton is produced
                                using practice that help usto protect biodversty basic straight fit cotton</p>
                            <ul>
                                <li>Digital project planning and resourcing</li>
                                <li>In-House digital consulting</li>
                                <li>Permanent and contract recruitement</li>
                            </ul>
                            <div class="countadd">
                                {{-- <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                    <div class="inc qtybutton">+</div>
                                </div> --}}
                                <a href="{{ url('/') }}" class="lab-btn">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Shop Section Ends Here========== -->


    {{-- <!-- ==========Review Section Start Here========== -->
    <div class="review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="review__area">
                        <ul class="review__nav">
                            <li class="desc" data-target="description-show">Description</li>
                            <li class="rev active" data-target="review-content-show">Reviews 4</li>
                        </ul>
                        <div class="review__content review-content-show">
                            <div class="review__showing" id="reviews">
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <img src="images/author/01.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Britney Doe</a>
                                                    <p>Posted on December 25, 2022 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="images/author/02.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">william Watson</a>
                                                    <p>Posted on December 25, 2022 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="images/author/03.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Tome Alex</a>
                                                    <p>Posted on December 25, 2022 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="images/author/04.jpg" alt="rajibraj">
                                        </div>
                                        <div class="content">
                                            <div class="review__meta">
                                                <div class="review__poston">
                                                    <a href="#">Maria Watson</a>
                                                    <p>Posted on December 25, 2022 at 6:57 am</p>
                                                </div>
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact awesome theme seo psd porta monetize covalent leadership after without resource.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review__form">
                                    <div class="review__title">
                                        <h5>Add a Review</h5>
                                    </div>
                                    <form action="#">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-12">
                                                <input type="text" name="name" placeholder="Full Name">
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <input type="text" name="email" placeholder="Email Adress">
                                            </div>
                                            <div class="col-lg-4 col-12">
                                                <div class="ratings">
                                                    <span class="ratings__title">Your Rating : </span>
                                                    <div class="ratings__rating">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <textarea rows="8" placeholder="Type Here Message"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="lab-btn" type="submit">Submit Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="row g-4 justify-content-center my-4">
                                    <div class="col-lg-8 col-12">
                                        <div class="description__content">
                                            <ul>
                                                <li>Donec non est at libero vulputate rutrum.</li>
                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                <li>Pellentesque aliquet, sem eget laoreet ultrices.</li>
                                                <li>Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</li>
                                                <li>Donec a neque libero.</li>
                                                <li>Pellentesque aliquet, sem eget laoreet ultrices.</li>
                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="description__thumb">
                                            <img src="images/shop/01.jpg" alt="rajibraj">
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Review Section Ends Here========== -->


    <!-- ==========Shop Section Start Here========== -->
    {{-- <div class="shop padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <article>
                            <h4 class="mb-4">Related Products</h4>
                            <div class="shop__product row justify-content-center grids g-4">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="images/shop/01.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="images/shop/01.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="images/shop/02.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="images/shop/02.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="images/shop/03.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="images/shop/03.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <img src="images/shop/04.jpg" alt="shope">
                                            <div class="shop__link">
                                                <a href="images/shop/04.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="shop__content">
                                            <h6><a href="shop-single.html">product title text here</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Shop Section Ends Here========== -->




    <!-- ==========Newsletters Section Start Here========== -->
    {{-- <div class="newsletter newsletter--four padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="newsletter__content">
                        <h3><span>Sign Up For Our Newsletter</span></h3>
                        <form action="#">
                            <input type="text" placeholder="Enter your e-mail here">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Newsletters Section Ends Here========== -->

    @endsection
