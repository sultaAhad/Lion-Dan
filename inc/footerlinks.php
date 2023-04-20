<script src="js/wow.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.easing.js"></script>
<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Swiper JS -->


<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>

<script>
    new WOW({
            animateClass: 'animated',
            offset: 100,
        })
        .init();
</script>

<script>
    const CurrentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-item .nav-link');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            menuItem[i].className = "active";
        }
    }
    // Pre Loader Js
    $(window).on("load", function() {
        // console.log("test");
        $("#preloader").fadeOut(1000);
    });
    // Pre Loader Js

    // Mobile Header Js
    $("header .canvas_btn").click(function() {
        $(".mobile_header").addClass("show");
    });

    $(".mobile_header .cancel").click(function() {
        $(".mobile_header").removeClass("show");
    });
    // Mobile Header Js
</script>
<script>
    // hide header
    $(function() {
        var lastScrollTop = 0,
            delta = 15;
        $(window).scroll(function(event) {
            var st = $(this).scrollTop();

            if (Math.abs(lastScrollTop - st) <= delta)
                return;
            if ((st > lastScrollTop) && (lastScrollTop > 0)) {
                // downscroll code
                $(".header-top").css("top", "-80px");

            } else {
                // upscroll code
                $(".header-top").css("top", "0px");
            }
            lastScrollTop = st;
        });
    });
    $(document).ready(function() {

        $(".Modern-Slider").slick({
            autoplay: true,
            autoplaySpeed: 10000,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            pauseOnHover: false,
            dots: true,
            pauseOnDotsHover: true,
            // fade:true,
            draggable: false,
            // prevArrow: '<button class="PrevArrow"></button>',
            // nextArrow: '<button class="NextArrow"></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });

    })
    $(document).ready(function() {

        $(".row.card-slider").slick({
            autoplay: true,
            autoplaySpeed: 10000,
            speed: 600,
            slidesToShow: 2,
            slidesToScroll: 1,
            pauseOnHover: false,
            dots: false,
            pauseOnDotsHover: true,
            // fade:true,
            draggable: false,
            // prevArrow: '<button class="PrevArrow"></button>',
            // nextArrow: '<button class="NextArrow"></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });

    })
    $(document).ready(function() {

        $(".slider-wrapper1").slick({
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 600,
            slidesToShow: 2,
            slidesToScroll: 2,
            pauseOnHover: false,
            dots: false,
            pauseOnDotsHover: true,
            // fade:true,
            draggable: false,
            // prevArrow: '<button class="PrevArrow"></button>',
            // nextArrow: '<button class="NextArrow"></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });
    })
    $(document).ready(function() {
        var $slider = $('.slider-gell');
        var $progressBar = $('.progress');
        var $progressBarLabel = $('.slider__label');

        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

            $progressBar
                .css('background-size', calc + '% 100%')
                .attr('aria-valuenow', calc);

            $progressBarLabel.text(calc + '% completed');
        });

        $slider.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 600,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
    $(document).ready(function() {
        var $slider = $('.slider-gell1');
        var $progressBar = $('.progress');
        var $progressBarLabel = $('.slider__label');

        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

            $progressBar
                .css('background-size', calc + '% 100%')
                .attr('aria-valuenow', calc);

            $progressBarLabel.text(calc + '% completed');
        });

        $slider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 600,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
    $(document).ready(function() {
        var $slider = $('.slider-gell12');
        var $progressBar = $('.progress');
        var $progressBarLabel = $('.slider__label');

        $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

            $progressBar
                .css('background-size', calc + '% 100%')
                .attr('aria-valuenow', calc);

            $progressBarLabel.text(calc + '% completed');
        });

        $slider.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 400,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 600,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
    $(document).ready(function() {

        $(".about-main-slider-wrapper").slick({
            // autoplay: true,
            // autoplaySpeed: 5000,
            // speed: 600,
            slidesToShow: 3,
            slidesToScroll: 3,
            pauseOnHover: false,
            dots: true,
            pauseOnDotsHover: true,
            // fade: true,
            draggable: false,
            // prevArrow: '<button class="PrevArrow"></button>',
            // nextArrow: '<button class="NextArrow"></button>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                    },
                },
            ],
        });

    })
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
    console.clear();
    var menuAnimation = gsap.timeline({
        paused: true
    });
    var menuAnimationBack = gsap.timeline({
        paused: true,
        reversed: true
    });
    var navMain = document.getElementById("nav-main");
    var menuButton = document.getElementById("menu-button");
    var toggle = true;

    gsap.set('.link', {
        y: 30
    });

    menuAnimation
        .to(navMain, {
            duration: .8,
            width: '100%',
            clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
            ease: "power2.inOut",
            x: 0,
            y: 0,
            z: 0
        })
        .to('.link', {
            duration: .5,
            autoAlpha: 1,
            y: 0,
            stagger: .2,
            ease: "power4.out"
        });


    menuAnimationBack
        .to('.link', {
            duration: .5,
            autoAlpha: 0,
            y: 30,
            stagger: .2,
            ease: "power4.out"
        })
        .to(navMain, {
            duration: 0.55,
            width: 0,
            clipPath: "polygon(0 0, -100% 0, 100% 100%, 0 100%)",
            ease: "power4.in",
            x: 0,
            y: 0,
            z: 0
        });


    menuButton.onclick = function() {
        toggle = !toggle;
        toggle === false ? menuAnimation.play(0) : menuAnimationBack.play(0);
    };
    // 
    document.onreadystatechange = function() {
        let lastScrollPosition = 0;
        const navbar = document.querySelector('.navbar1');
        window.addEventListener('scroll', function(e) {
            lastScrollPosition = window.scrollY;

            if (lastScrollPosition > 100)
                navbar.classList.add('navbar-dark');
            else
                navbar.classList.remove('navbar-dark');
        });
    }
    // Event handler for text input
    $('#txt').on('input', function() {
        // Getiing option based on input value and setting it as selected
        $('#sel option:contains(' + this.value + ')').eq(0).prop('selected', true);
    });

    // Event handler for select
    $('#sel').change(function() {
        // Updating text input based on selected value
        $('#txt').val($('option:selected', this).text());
    });
</script>
<script>
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0,
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = now * 50 + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    transform: "scale(" + scale + ")",
                });
                next_fs.css({
                    left: left,
                    opacity: opacity,
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: "easeInOutBack",
        }, );
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0,
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = (1 - now) * 50 + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    left: left,
                });
                previous_fs.css({
                    transform: "scale(" + scale + ")",
                    opacity: opacity,
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: "easeInOutBack",
        }, );
    });

    $(".submit").click(function() {
        return false;
    });
</script>