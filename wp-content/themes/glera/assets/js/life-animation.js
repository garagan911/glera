//containers

function globalAnimate() {
    const ellipseVioletLife = document.querySelector('#ellipse-violet-life');
    const titleLife = document.querySelector('.glera-life__video-mask-min');
    const titleTextLife = document.querySelector('.wrap-anim-text');
    const videoMascLife = document.querySelector('.glera-life__video-wrap');
    const lineTopLife = document.querySelector('.line-top-life');
    const titleLifeAnim = document.querySelector('.title-fade-life');
    const picMaskLife = document.querySelector('.pic-mask-life');
    const videoMaskLife = document.querySelector('.video-mask-life');


    const tll = gsap.timeline()

    tll.fromTo(ellipseVioletLife, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
       .fromTo(titleLife, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
       .fromTo(titleTextLife, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
       .fromTo(picMaskLife, {duration: 2.5, opacity: 0}, {duration: 2, opacity: 1, y: 0}, "-=2")
       .fromTo(videoMaskLife, {duration: 2.5, opacity: 0}, {duration: 2, opacity: 1, y: 0}, "-=2")
       .fromTo(titleLifeAnim, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
       .fromTo(lineTopLife, {duration: 4, opacity: 0}, {duration: 2, opacity: .3, ease: "expo.out"}, "-=1.8")

    var s1 = document.querySelector(".wow1");
    var s2 = document.querySelector(".wow2");
    var s3 = document.querySelector(".wow3");
    var tl = new gsap.timeline({repeat:-1, yoyo: true});

    tl
        .to(s1, 8, {morphSVG: s2, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s3, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s1, ease: "power1.inOut"});

    var s4 = document.querySelector(".wow4");
    var s5 = document.querySelector(".wow5");
    var s6 = document.querySelector(".wow6");
    var tl2 = new gsap.timeline({repeat:-1, yoyo: true});

    tl2
        .to(s4, 8, {morphSVG: s6, ease: "power1.inOut"})
        .to(s4, 8, {morphSVG: s5, ease: "power1.inOut"})
        .to(s4, 8, {morphSVG: s4, ease: "power1.inOut"});

    // gsap.fromTo([pulseCircle2, pulseCircle], 3, {scale: .8}, { scale: 1, ease: "linear", transformOrigin: "15% 21%", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse', 2, {scale: .8}, { scale: 1.2, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse1', 2, {scale: .8, delay: 1}, { scale: 1, ease: "linear", repeat:-1, yoyo:true})
    gsap.fromTo('.pulse2', 4, {scale: .8, delay: 1}, { scale: 1, ease: "linear", repeat:-1, yoyo:true})
    gsap.fromTo('.weel', 10, {rotade: 0}, { rotate: 360, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )


    // Scroll effect

    const triggerContainer = document.querySelector('.glera-moment__slider-wrapper')
    const drawLine = document.querySelector('.draw-line')


    let animateDrow = gsap.timeline({
        scrollTrigger: {
            trigger: triggerContainer,
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrow.fromTo(drawLine, 4, { drawSVG: '-100%'}, { drawSVG: '100%'})

}

function showBalloon() {
    $('.section-top').addClass('show');
}

function removePreloader() {
    $('.preloader').animate({
        opacity: '0'
    }, 800, function () {
        $(this).remove();
    });
    setTimeout(function () {
        showBalloon()
        globalAnimate()
    }, 800);

}


document.addEventListener("DOMContentLoaded", function (event) {

    // icons
    // let gleraOurOffice = document.querySelector('.title-our-office')

    let gleraStreem = document.querySelector('.streem')


    let dataStreem = '/wp-content/themes/glera/assets/animations/life/51719-reaction-bubbles.json';
    let dataLike = '/wp-content/themes/glera/assets/animations/life/22717-emojis-like.json';
    let dataLove = '/wp-content/themes/glera/assets/animations/life/22718-emojis-love.json';
    let dataHeart = '/wp-content/themes/glera/assets/animations/life/56477-emoji-25.json';
    let dataInteraction = '/wp-content/themes/glera/assets/animations/life/43308-emoji-feedback-interaction.json';

//script

    var streemAnim = bodymovin.loadAnimation({
        container: gleraStreem,
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataStreem
    });
    streemAnim.setSpeed(0.3);

    var likeAnim = bodymovin.loadAnimation({
        container: document.querySelector('.like'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataLike
    });

    // likeAnim.setSpeed(0.5);

    var like2Anim = bodymovin.loadAnimation({
        container: document.querySelector('.like2'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataLike
    });

    var like4Anim = bodymovin.loadAnimation({
        container: document.querySelector('.like4'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataLike
    });
    // like2Anim.setSpeed(0.5);

    var like3Anim = bodymovin.loadAnimation({
        container: document.querySelector('.like3'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataLike
    });

    var loveAnim = bodymovin.loadAnimation({
        container: document.querySelector('.heart'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataLove
    });

    var love2Anim = bodymovin.loadAnimation({
        container: document.querySelector('.love'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataInteraction
    });

    var loveLearningAnim = bodymovin.loadAnimation({
        container: document.querySelector('.like-learning'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataInteraction
    });

    var loveSmAnim = bodymovin.loadAnimation({
        container: document.querySelector('.love-sm'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataInteraction
    });

    var loveSm1Anim = bodymovin.loadAnimation({
        container: document.querySelector('.love-sm1'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataInteraction
    });

    var heartAnim = bodymovin.loadAnimation({
        container: document.querySelector('.love2'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataHeart
    });

    //titles
    let dataGleraMomentsTitle = '/wp-content/themes/glera/assets/animations/home/Подзаголовки/Glera moments.json';

    var heartAnim1 = bodymovin.loadAnimation({
        container: document.querySelector('.glera-moment-title-anim'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataGleraMomentsTitle
    });

    let dataFunnyBlocksBg1 = '/wp-content/themes/glera/assets/animations/life/1/data.json';
    var funnyBlocksBg1 = bodymovin.loadAnimation({
        container: document.querySelector('.funny-blocks__bg1'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataFunnyBlocksBg1
    });

    let dataFunnyBlocksBg2 = '/wp-content/themes/glera/assets/animations/life/3/data.json';
    var funnyBlocksBg2 = bodymovin.loadAnimation({
        container: document.querySelector('.funny-blocks__bg2'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataFunnyBlocksBg2
    });

    let dataFunnyBlocksBg3 = '/wp-content/themes/glera/assets/animations/life/2/data.json';
    var funnyBlocksBg3 = bodymovin.loadAnimation({
        container: document.querySelector('.funny-blocks__bg3'),
        renderer: 'svg',
        autoplay: true,
        loop:true,
        path: dataFunnyBlocksBg3
    });


    //blick slider
    let gleraBlickLeft = document.querySelector('#blick-left4')
    let gleraBlickLeft2 = document.querySelector('#blick-left2')
    let gleraBlickRight = document.querySelector('#blick-right4')
    let gleraBlickRight2 = document.querySelector('#blick-right2')

    //blick slider path
    let dataBlickLeft = '/wp-content/themes/glera/assets/animations/json/3/data.json';
    let dataBlickRight = '/wp-content/themes/glera/assets/animations/json/4/data.json';

    //blick slider
    let blickLeft = {
        name: 'dataBlickLeft',
        container: gleraBlickLeft,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataBlickLeft
    };
    let blickLeft2 = {
        name: 'dataBlickLeft2',
        container: gleraBlickLeft2,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataBlickLeft
    };
    let blickRight = {
        name: 'dataBlickRight',
        container: gleraBlickRight,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataBlickRight
    };
    let blickRight2 = {
        name: 'dataBlickRight2',
        container: gleraBlickRight2,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataBlickRight
    };

    //Blick
    bodymovin.loadAnimation(blickLeft)
    bodymovin.loadAnimation(blickLeft2)
    bodymovin.loadAnimation(blickRight)
    bodymovin.loadAnimation(blickRight2)


    let sliderVideo = document.querySelector('.our-news__slider')
    //Slick News Home
    $('.our-news__slider').slick({
        infinite: true,
        centerMode: true,
        variableWidth: true,
        centerPadding: '40px',
        slidesToShow: 5,
        slidesToScroll: 1,
        appendArrows: $('#controls-news'),
        nextArrow: '<button class="slide-prev btn-slide"></button>',
        prevArrow: '<button class="slide-next btn-slide"></button>',
        responsive: [
            {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    // On slide change, pause all videos
    $('.our-news__slider .slick-slide').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('video').each(function() {
            $(this).get(0).pause();
        });
    });

// On slide chnage, play a video inside the current slide
    $('.our-news__slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        if( $('.life__slider-item.slick-center').find('video').length !== 0) {
            $(".our-news__slider .slick-center video")[0].play();
        }
    });

    let swiperlife1 = new Swiper(".funny-blocks__slider1", {
        effect: "coverflow",
        height: 480,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        preventClicks: false,
        loop: true,
        preventClicksPropagation: false,
        breakpointsBase: 'swiper-container',
        breakpoints: {
            768: {
                coverflowEffect: {
                    rotate: 0,
                    stretch: 650,
                    depth: 250,
                    modifier: 1,
                    slideShadows: false,
                }

            }
        },
        coverflowEffect: {
            rotate: 0,
            stretch: 50,
            depth: 50,
            modifier: 1,
            slideShadows: false

        },
        navigation: {
            nextEl: ".slide-prev-funny1",
            prevEl: ".slide-next-funny1",
        }

    });

    var swiperLife = new Swiper(".swiper-container-life", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        preventClicks: false,
        loop: true,
        slideShadows: false,

        preventClicksPropagation: false,
        breakpointsBase: 'swiper-container',
        coverflowEffect: {
            rotate: 0,
            stretch: -40,
            depth: 100,
            modifier: 1,
            slideShadows: true
        }
    });




})

var figure = $(".hover-video-block").hover( hoverVideo, hideVideo );

function hoverVideo(e) {
    $('video', this).get(0).play();
}

function hideVideo(e) {
    $('video', this).get(0).pause();
}


var distance = 50,
    box = $('.partnover');
$('button').on('click', function() {
    box.stop().animate({
        scrollLeft: '+=' + (distance * $(this).data('factor'))
    });
});