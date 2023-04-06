<script src="js/wow.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Swiper JS -->


<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->


<script>
    new WOW().init();
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
        });
    });
</script>