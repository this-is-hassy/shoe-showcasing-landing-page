<footer class="footer">
    <nav class="footer-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/categories">All Categories</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/reviews">Reviews</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="logo-container">
        <img src="http://127.0.0.1:8000/assets/images/foot-logo.png" alt="The Luxe Outfit" class="footer-logo">
    </div>

    <div class="newsletter-section">
        <h2>Newsletter</h2>
        <p>Subscribe our newsletter &amp; get latest updations</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Email address" required="">
            <button type="submit" class="subscribe-btn">Subscribe <span class="ml-2"><img
                        src="http://127.0.0.1:8000/assets/images/subs-icon.png" alt=""></span></button>
        </form>
    </div>

    <div class="social-links">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
        <a href="#" aria-label="Skype"><i class="fab fa-skype"></i></a>
    </div>

    <div class="payment-methods">
        <img src="http://127.0.0.1:8000/assets/images/payment.png" alt="Visa">

    </div>

    <div class="copyright">
        <p class="copyright-text">© Copyright The <span style="font-weight: 600">Luxe Outfit 2025</span>. Designed by
            <span style="font-weight: 600">WDG</span>
        </p>
    </div>
</footer>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    // Initialize slick slider
    $(document).ready(function() {
        $('.prod-slide').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.testimonial-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '.custom-slick-prev',
            nextArrow: '.custom-slick-next',
        });
    });
</script>

<script>
    document.querySelectorAll('.custom-slick-prev, .custom-slick-next').forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.custom-slick-prev, .custom-slick-next').forEach(btn => {
                btn.classList.remove('active');
            });
            // Add active class to clicked button
            this.classList.add('active');
        });
    });
</script>

<script>
    $(".sales-slider").slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 12000,
        cssEase: "linear",
        arrows: false,
        responsive: [{
                breakpoint: 1480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 762,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuClose = document.getElementById('mobileMenuClose');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
        });

        mobileMenuClose.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        function initSlider() {
            if ($(window).width() <= 768) {
                if (!$('#categorySlider').hasClass('slick-initialized')) {
                    $('#categorySlider').slick({
                        dots: true,
                        markers: false,
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                        mobileFirst: true,
                        responsive: [{
                            breakpoint: 768,
                            settings: 'unslick'
                        }]
                    });
                }
            }
        }

        // Initialize on load
        initSlider();

        // Initialize on window resize
        $(window).on('resize', function() {
            initSlider();
        });
    });

</script>

</body>

</html>
