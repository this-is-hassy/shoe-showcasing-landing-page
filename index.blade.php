@extends('layouts.app')

@section('content')
    <div class="video-wrapper">
        <video autoplay loop muted plays-inline class="hero-vid">
            <source src="{{ asset('assets/images/hero-vi.mp4') }}" class="bg-sh" type="video/mp4">
        </video>
        <div class="overlay-image"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="product-info">
                            <h1 class="title">Airforce New Release - <br> Pre Order</h1>
                            <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <button class="pre-order-btn">PRE-ORDER NOW!</button>

                            <div class="product-rating">
                                <div class="product-thumbnail">
                                    <img src="{{ asset('assets/images/rated-prod.png') }}" alt="Airforce shoe">
                                </div>
                                <div class="rating">
                                    <div class="stars">
                                        ★★★★★
                                    </div>
                                    <div class="review-count">
                                        12,832 <span>(Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 hero-right-shoe">
                    <div class="background-shape">
                        <img src="{{ asset('assets/images/star-opacity.png') }}" alt="background shape">
                    </div>
                    <div class="main-shoe">
                        <img src="{{ asset('assets/images/hero-right-img.png') }}" alt="shoe">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="feat-heading">Our Amazing Feature</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row feature-icons">
                        <div class="col-sm-4 feature-item">
                            <img src="{{ asset('assets/images/feat-icon-1.png') }}" alt="">
                            <p class="service-point">100k Satisfied Customers</p>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="col-sm-4 feature-item">
                            <img src="{{ asset('assets/images/feat-icon-2.png') }}" alt="">
                            <p class="service-point">Expert Customer Service</p>
                            <div class="vertical-line"></div>
                        </div>
                        <div class="col-sm-4 feature-item">
                            <img src="{{ asset('assets/images/feat-icon-3.png') }}" alt="">
                            <p class="service-point">Fast & Free Shipping</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row category-cards">
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-1.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers <span class="pl-3"><img class="goto-arr"
                                    src="{{ asset('assets/images/Arrow 1.png') }}" alt=""></span></a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-2.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers <span class="pl-3"><img class="goto-arr"
                                    src="{{ asset('assets/images/Arrow 1.png') }}" alt=""></span></a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-3.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers <span class="pl-3"><img class="goto-arr"
                                    src="{{ asset('assets/images/Arrow 1.png') }}" alt=""></span></a>
                    </div>
                </div>
            </div> --}}


            <div class="row category-cards" id="categorySlider">
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-1.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers
                            <span class="pl-3">
                                <img class="goto-arr" src="{{ asset('assets/images/Arrow 1.png') }}" alt="">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-2.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers
                            <span class="pl-3">
                                <img class="goto-arr" src="{{ asset('assets/images/Arrow 1.png') }}" alt="">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="{{ asset('assets/images/feat-shoe-3.png') }}" alt="">
                        <a href="#" class="category-link">Canvas Sneakers
                            <span class="pl-3">
                                <img class="goto-arr" src="{{ asset('assets/images/Arrow 1.png') }}" alt="">
                            </span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Best Sellers -->
    <section class="best-sellers">
        <div class="container">
            <h2 class="best-sell">Best Sellers</h2>
            <div class="prod-slide">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="sales-slider">
                <div class="sale-card">
                    <label for="sales-1" class="sale-label">
                        <span>Exclusive Clothings Discounts</span>
                        <input type="radio" disabled class="sale-input" id="sales-1" name="sales" checked>
                    </label>
                </div>
                <div class="sale-card">
                    <label for="sales-2" class="sale-label">
                        <span>Clearance Sales Upto 50% Off</span>
                        <input type="radio" disabled class="sale-input" id="sales-2" name="sales">
                    </label>
                </div>
                <div class="sale-card">
                    <label for="sales-3" class="sale-label">
                        <span>Top Tech Deals Up to 25% Off</span>
                        <input type="radio" disabled class="sale-input" id="sales-3" name="sales">
                    </label>
                </div>
                <div class="sale-card">
                    <label for="sales-4" class="sale-label">
                        <span>Best Deals of the Week $10 Cashback</span>
                        <input type="radio" disabled class="sale-input" id="sales-4" name="sales">
                    </label>
                </div>
                <div class="sale-card">
                    <label for="sales-4" class="sale-label">
                        <span>Best Deals of the Week $10 Cashback</span>
                        <input type="radio" disabled class="sale-input" id="sales-4" name="sales">
                    </label>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="prod-slide">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-1.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('assets/images/prod-img-2.png') }}" alt="White Nike Air Force">
                    </div>
                    <div class="product-info">
                        <span class="color-count">25 Colors</span>
                        <h3 class="prod-tit">Lorem Ipsum dolor sit amet</h3>
                        <div class="price">$9,950</div>
                        <button class="add-to-cart">
                            <span class=" text d-flex align-items-center"><img class="mr-3"
                                    src="{{ asset('assets/images/bag-img.png') }}" alt="">Add to Cart</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Promotional Banners -->
    <div class="container card-container">
        <!-- Card 1 -->
        <div class="card">
            <img src="{{ asset('assets/images/show-shoe-1.png') }}" class="card-bg">
            <div class="card-content">
                <h2 class="default-title">Sneakers <br><span style="font-weight: 400">Collection</span></h2>
                <div class="hover-content">
                    <div>
                        <h2 class="upto">Up To</h2>
                        <p class="end-sale">End At Summer Sale</p>
                    </div>
                    <img src="{{ asset('assets/images/70.png') }}" alt="" class="dis-no">
                    <h3 class="discount">Discount</h3>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('assets/images/show-shoe-2.png') }}" class="card-bg">
            <div class="card-content">
                <h2 class="default-title">Sneakers <br><span style="font-weight: 400">Collection</span></h2>
                <div class="hover-content">
                    <div>
                        <h2 class="upto">Up To</h2>
                        <p class="end-sale">End At Summer Sale</p>
                    </div>
                    <img src="{{ asset('assets/images/70.png') }}" alt="" class="dis-no">

                    <h3 class="discount">Discount</h3>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('assets/images/show-shoe-3.png') }}" class="card-bg">
            <div class="card-content">
                <h2 class="default-title">Sneakers <br><span style="font-weight: 400">Collection</span></h2>
                <div class="hover-content">
                    <div>
                        <h2 class="upto">Up To</h2>
                        <p class="end-sale">End At Summer Sale</p>
                    </div>
                    <img src="{{ asset('assets/images/70.png') }}" alt="" class="dis-no">

                    <h3 class="discount">Discount</h3>
                </div>
            </div>
        </div>


    </div>


    <div class="review-section">
        <div class="review-section-right">
            <img src="{{ asset('assets/images/rev-right-img.png') }}" alt="">
        </div>


        <div class="testimonial-main">
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <div class="quote"><img src="{{ asset('assets/images/quote-img.png') }}" alt=""></div>
                    <p class="testimonial-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap
                        into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="author-info">
                        <img src="{{ asset('assets/images/rev-prof.png') }}" alt="Monica Stoung" class="author-image">
                        <h3 class="author-name">Monica Stoung</h3>
                        <p class="author-position">Housewife</p>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="quote"><img src="{{ asset('assets/images/quote-img.png') }}" alt=""></div>
                    <p class="testimonial-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap
                        into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="author-info">
                        <img src="{{ asset('assets/images/rev-prof.png') }}" alt="Monica Stoung" class="author-image">
                        <h3 class="author-name">Monica Stoung</h3>
                        <p class="author-position">Position/Title</p>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="quote"><img src="{{ asset('assets/images/quote-img.png') }}" alt=""></div>
                    <p class="testimonial-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap
                        into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="author-info">
                        <img src="{{ asset('assets/images/rev-prof.png') }}" alt="Monica Stoung" class="author-image">
                        <h3 class="author-name">Monica Stoung</h3>
                        <p class="author-position">Position/Title</p>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="quote"><img src="{{ asset('assets/images/quote-img.png') }}" alt=""></div>
                    <p class="testimonial-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap
                        into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <div class="author-info">
                        <img src="{{ asset('assets/images/rev-prof.png') }}" alt="Monica Stoung" class="author-image">
                        <h3 class="author-name">Monica Stoung</h3>
                        <p class="author-position">Position/Title</p>
                    </div>
                </div>
            </div>


            <button class="custom-slick-prev" aria-label="Previous" type="button">
                <i class="fa-solid fa-arrow-left text-gradient"></i>
            </button>
            <button class="custom-slick-next" aria-label="Next" type="button">
                <i class="fa-solid fa-arrow-right text-gradient"></i>
            </button>

        </div>








    </div>

@endsection
