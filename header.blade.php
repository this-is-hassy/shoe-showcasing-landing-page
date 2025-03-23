    <header class="header-section ">
        <div class="container bord-nav">
            <div class="main-header">
                <div class="search">
                    <input type="text" class="search__input" placeholder="Search...">
                    <button class="search__button">
                        <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </div>
                <a href="#" class="py-0 py-lg-2">
                    <img src="{{ asset('assets/images/logo.png') }}" class="logo" alt="">
                </a>
                <div class="cont">
                    <div class="cont-fl">
                        <div>
                            <a href="#" class="con-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </div>
                        <div class="mt-2">
                            <p class="no-head">Call Us Now:</p>
                            <p class="no-call">0(800) 123-456</p>
                        </div>
                    </div>


                    <button class="mobile-search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search"></i>
                    </button>

                    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="search-form">
                                        <input type="text" class="form-control" placeholder="Search Products...">
                                        <div class="search-buttons">
                                            <button type="button" class="btn bt-cl btn-outline-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn search-btn">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="d-flex gap-3 gap-xl-5 align-items-center">
                        <a href="#" class="con-icon">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                        <div class="cont-li"></div>
                        <a href="#" class="con-icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                        </a>
                    </div>

                    <!-- Add this next to your logo -->
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fa-solid fa-bars menu-b"></i>
                    </button>

                    <!-- Add this at the end of your header -->
                    <div class="mobile-menu" id="mobileMenu">
                        <div class="mobile-menu-container">
                            <button class="mobile-menu-close" id="mobileMenuClose">
                                <i class="fas fa-times"></i>
                            </button>

                            <div class="mobile-menu-content">
                                <a href="#" class="mobile-menu-link">Home</a>
                                <a href="#" class="mobile-menu-link">About</a>
                                <a href="#" class="mobile-menu-link">Categories</a>
                                <a href="#" class="mobile-menu-link">Products</a>
                                <a href="#" class="mobile-menu-link">Shop</a>
                                <a href="#" class="mobile-menu-link">Blog</a>


                                <div class="auth-buttons">
                                    <i class="fa-regular fa-user fs-4"></i>
                                    <a href="#">Sign In</a>
                                    <span>/</span>
                                    <a href="#" class="register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <nav class="nav-container">
                <div class="nav-menu">
                    <a href="#" class="active">Home</a>
                    <a href="#">All Categories</a>
                    <a href="#">About</a>
                    <a href="#">Shop</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
                <div class="auth-buttons ">
                    <i class="fa-regular fa-user fs-4"></i>
                    <a href="#">Sign In</a>
                    <span>/</span>
                    <a href="#" class="register">Register</a>
                </div>
            </nav>

        </div>
    </header>
