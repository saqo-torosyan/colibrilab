$(document).ready(function () {
    let positionX = 0;
    let positionY = 0;
    $(".front-page-header").mousemove(function (e) {
        positionX = (e.pageX * -1 / 42);
        positionY = (e.pageY * -1 / 42);
        $("#hero-of-header").css({
            'transform': 'translate3d(' + positionX + 'px,' + positionY + 'px,0)',
        })
    })

    $("#services-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    })

    $(".contact-form").children().focus(function () {
        $("#contacts .bg-overlay").css("opacity", ".6");
    });

    $(".contact-form").children().blur(function () {
        $("#contacts .bg-overlay").css("opacity", "0");
    });

    var offsetServices = $("#services").offset().top;
    var offsetAboutUsTitle = $('.about-us-title').offset().top;
    var offsetAboutContent = $(".about-us-content").offset().top;
    var offsetTeam = $("#team").offset().top;
    var offsetPortfolio = $("#portfolio").offset().top;
    var offsetMap = $("#contacts iframe").offset().top;

    var $w = $(window).scroll(function () {
        if ($w.scrollTop() + $(window).height() > offsetServices) {
            $("#services-slider").css("opacity", "1");
            $("#services-slider").addClass("flipInX");
        }

        if ($w.scrollTop() + $(window).height() > offsetAboutUsTitle) {
            $(".about-us-title").css("opacity", "1");
            $(".about-us-title").addClass("fadeIn");
        }

        if ($w.scrollTop() + $(window).height() > offsetAboutContent) {
            $(".about-us-content-text").css("opacity", "1");
            $(".about-us-content-text").addClass("slideInLeft");

            $(".about-us-content-images-back").css("opacity", "1");
            $(".about-us-content-images-back").addClass("slideInRight");
            setTimeout(() => {
                $(".about-us-content-images-front").css("opacity", "1");
                $(".about-us-content-images-front").addClass("slideInRight");
            }, 300)
        }

        if ($w.scrollTop() + $(window).height() > offsetTeam) {
            $("#team").css("opacity", "1");
            $("#team").addClass("slideInUp");
        }

        if ($w.scrollTop() + $(window).height() > offsetPortfolio) {
            $("#portfolio").css("opacity", "1");
            $("#portfolio").addClass("slideInUp");
        }

        if ($w.scrollTop() + $(window).height() > offsetMap) {
            $(".contact-form").css("opacity", "1");
            $(".contact-form").addClass("slideInRight");
        }
    });

    $("a.local-anchor").click(function (e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({ scrollTop: $(aid).offset().top }, 'slow');
    });

    $(".navbar-menu-toggler").click(function () {
        $(".navbar-menu").css("display", "flex");
    })

    $(".hide-menu").click(function () {
        $(".navbar-menu").css("display", "none");
    })

    $(".navbar-menu li a").click(function () {
        if ($(".hide-menu").css("display") !== "none") {
            $(".navbar-menu").css("display", "none");
        }
    })

    const sliderConfig = {
        //Get width of an image with it's margin
        width: parseInt($(".all-staff-slider img").css('width')) + parseInt($(".all-staff-slider img").css('margin-right')) + parseInt($(".all-staff-slider img").css('margin-left')),
        //Get images count
        count: $(".all-staff-slider").children().length,
        //Get shadow elements count
        get shadows() {
            return Math.ceil(parseInt($(".all-staff").css('width')) / this.width);
        },
        get lengthOfCorusel() {
            return this.width * this.count;
        },
        check: function () {
            console.log(this.lengthOfCorusel);
        }
    }
    sliderConfig.check();

    function createShadows(ContainerSelector, ShadowCount) {
        let container = $(ContainerSelector);
        if (ShadowCount > container[0].length) {
            return -1;
        }
        for (let i = 1; i <= ShadowCount; i++) {
            let elem = container.children("img:nth-child(" + i + ")")[0];
            container.append($(elem).clone().addClass("shadow-" + i));
        }
    }
    createShadows(".all-staff-slider", sliderConfig.shadows);
    
    $("#keyframes").text("@keyframes allStaff { 0% { transform: translatex(0px); } 100% { transform: translateX("+sliderConfig.lengthOfCorusel * -1 +"px); } }");


    $(".modal-show").click(function(e) {
        e.preventDefault();
        $(".cmodal-bg").addClass("anim-show");
        $(".cmodal-bg").removeClass("anim-hide");
        
    })

    $(".cmodal-close").click(function(e) {
        e.preventDefault();
        $(".cmodal-bg").removeClass("anim-show");
        $(".cmodal-bg").addClass("anim-hide");
    })
})