
//containers

function globalAnimate() {

    // ABOUT

    const apEnergyPic = document.querySelector('#energy-pic')
    const apVideoPicTop = document.querySelector('.video-pic-top')
    const apVideo = document.querySelector('.glera-story__video')
    const apVideoCircle = document.querySelector('.glera-story__video-circle')
    const apCloud = document.querySelector('.glera-story__cloud')
    const ellipseViolet = document.querySelector('#ellipse-violet')
    const circleTopTitleAnim = document.querySelector('.glera-story__bg-things')
    const circleTopTitleAnim2 = document.querySelector('.glera-story__bg-things2')
    const titleAPAnim = document.querySelector('.title-fade-about')

    const split = new SplitText(".split-text")

    // tl About

    const tlA = gsap.timeline();

    tlA.fromTo(ellipseViolet, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
        .fromTo(apEnergyPic, {x: 150, opacity: 0, scale: .5}, {
            duration: 3,
            x: 0,
            opacity: 1,
            scale: 1,
            ease: "expo.out"
        }, "-=2.5")
        .fromTo(split, {scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(apCloud, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(circleTopTitleAnim, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(circleTopTitleAnim2, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(apVideo, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2")
        .fromTo(apVideoPicTop, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=1.7")
        .fromTo(apVideoCircle, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=1.7")
        .fromTo(titleAPAnim, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2.5")

    gsap.fromTo('.pulse-top2', 2, {y: 0}, {duration: 2, y: -15, ease: "linear", repeat:-1, yoyo:true} )


    let timeLineLine = document.querySelector('.time-line-circle')
    let timeLineLinePath = document.querySelector('#time-line')
    gsap.registerPlugin(MotionPathPlugin);


    $(document).ready(function() {
        // run test on initial page load
        checkSize();

        // run test on resize of the window
        $(window).resize(checkSize);
    });

//Function to the css rule
    function checkSize(){
        if ($(window).width() >= 1920) {
            jQuery(document).on('click', '.year-tl2010', function () {
                $('.time-line-circle').css('transform', 'translate(0, 0)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2012', function () {
                $('.time-line-circle').css('transform', 'translate(134px, -91px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2013', function () {
                $('.time-line-circle').css('transform', 'translate(266px, -142px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2014', function () {
                $('.time-line-circle').css('transform', 'translate(398px, -204px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2016', function () {
                $('.time-line-circle').css('transform', 'translate(529px, -262px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2017', function () {
                $('.time-line-circle').css('transform', 'translate(662px, -285px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2018', function () {
                $('.time-line-circle').css('transform', 'translate(793px, -337px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2019', function () {
                $('.time-line-circle').css('transform', 'translate(926px, -425px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2020', function () {
                $('.time-line-circle').css('transform', 'translate(1057px, -462px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2021', function () {
                $('.time-line-circle').css('transform', 'translate(1192px, -570px)')
                return false;
            });

        }
        if ($(window).width() <= 1920 && $(window).width() >= 1200){
            jQuery(document).on('click', '.year-tl2010', function () {
                $('.time-line-circle').css('transform', 'translate(0, 0)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2012', function () {
                $('.time-line-circle').css('transform', 'translate(120px, -87px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2013', function () {
                $('.time-line-circle').css('transform', 'translate(241px, -132px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2014', function () {
                $('.time-line-circle').css('transform', 'translate(362px, -187px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2016', function () {
                $('.time-line-circle').css('transform', 'translate(483px, -237px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2017', function () {
                $('.time-line-circle').css('transform', 'translate(602px, -263px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2018', function () {
                $('.time-line-circle').css('transform', 'translate(721px, -312px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2019', function () {
                $('.time-line-circle').css('transform', 'translate(846px, -387px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2020', function () {
                $('.time-line-circle').css('transform', 'translate(961px, -422px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2021', function () {
                $('.time-line-circle').css('transform', 'translate(1085px, -521px)')
                return false;
            });
        }
        if ($(window).width() <= 1200 && $(window).width() >= 992){
            jQuery(document).on('click', '.year-tl2010', function () {
                $('.time-line-circle').css('transform', 'translate(0, 0)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2012', function () {
                $('.time-line-circle').css('transform', 'translate(90px, -64px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2013', function () {
                $('.time-line-circle').css('transform', 'translate(179px, -100px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2014', function () {
                $('.time-line-circle').css('transform', 'translate(266px, -140px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2016', function () {
                $('.time-line-circle').css('transform', 'translate(355px, -180px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2017', function () {
                $('.time-line-circle').css('transform', 'translate(444px, -194px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2018', function () {
                $('.time-line-circle').css('transform', 'translate(532px, -229px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2019', function () {
                $('.time-line-circle').css('transform', 'translate(622px, -287px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2020', function () {
                $('.time-line-circle').css('transform', ' translate(709px, -311px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2021', function () {
                $('.time-line-circle').css('transform', 'translate(798px, -384px)')
                return false;
            });
        }
        if ($(window).width() <= 992 && $(window).width() >= 768){
            jQuery(document).on('click', '.year-tl2010', function () {
                $('.time-line-circle').css('transform', 'translate(0, 0)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2012', function () {
                $('.time-line-circle').css('transform', 'translate(75px, -54px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2013', function () {
                $('.time-line-circle').css('transform', 'translate(150px, -85px)')
                return false;
            });

            jQuery(document).on('click', '.year-tl2014', function () {
                $('.time-line-circle').css('transform', 'translate(224px, -118px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2016', function () {
                $('.time-line-circle').css('transform', 'translate(299px, -152px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2017', function () {
                $('.time-line-circle').css('transform', 'translate(373px, -163px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2018', function () {
                $('.time-line-circle').css('transform', 'translate(448px, -194px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2019', function () {
                $('.time-line-circle').css('transform', 'translate(523px, -243px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2020', function () {
                $('.time-line-circle').css('transform', 'translate(597px, -262px)')
                return false;
            });
            jQuery(document).on('click', '.year-tl2021', function () {
                $('.time-line-circle').css('transform', 'translate(672px, -323px)')
                return false;
            });
        }
        if ($(window).width() >= 768){
            let swiperAbout1 = new Swiper(".our-office_slider1", {
                effect: "coverflow",
                height: 390,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                fadeSpeed: 900,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    depth: 190,
                    stretch: 505,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: ".slide-prev1",
                    prevEl: ".slide-next1",
                }

            })

            let swiperAbout2 = new Swiper(".our-office_slider2", {
                effect: "coverflow",
                height: 390,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                fadeSpeed: 900,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    depth: 190,
                    stretch: 505,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: ".slide-prev2",
                    prevEl: ".slide-next2",
                }

            });

            let swiperAbout3 = new Swiper(".our-office_slider3", {
                effect: "coverflow",
                height: 390,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                fadeSpeed: 900,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    depth: 190,
                    stretch: 505,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: ".slide-prev3",
                    prevEl: ".slide-next3",
                }

            });
        }
        if ($(window).width() <= 767){
            let swiperlife1 = new Swiper(".our-office_slider1", {
                effect: "coverflow",
                height: 480,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 50,
                    depth: 50,
                    modifier: 1,
                    slideShadows: false

                },
                navigation: {
                    nextEl: ".slide-prev1",
                    prevEl: ".slide-next1",
                }

            });
            let swiperAbout2 = new Swiper(".our-office_slider2", {
                effect: "coverflow",
                height: 390,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                fadeSpeed: 900,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 50,
                    depth: 50,
                    modifier: 1,
                    slideShadows: false
                },
                navigation: {
                    nextEl: ".slide-prev2",
                    prevEl: ".slide-next2",
                }

            });

            let swiperAbout3 = new Swiper(".our-office_slider3", {
                effect: "coverflow",
                height: 390,
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                preventClicks: false,
                fadeSpeed: 900,
                loop: true,
                preventClicksPropagation: false,
                breakpointsBase: 'swiper-container',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 50,
                    depth: 50,
                    modifier: 1,
                    slideShadows: false
                },
                navigation: {
                    nextEl: ".slide-prev3",
                    prevEl: ".slide-next3",
                }

            });
        }

    }

    // Scroll effect

    const triggerContainer = document.querySelector('.glera-values')
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

    //spin animation

    new spine.SpinePlayer("player-container2-test-2", {
        jsonUrl: "/wp-content/themes/glera/assets/animations/robot_postman_bg/robot_postman_bg.json",
        atlasUrl: "/wp-content/themes/glera/assets/animations/robot_postman_bg/robot_postman_bg.atlas",
        showControls: false,
        // animation: "bubble_norm",
        alpha: true, // Enable player translucency
        backgroundColor: "#00000000",
        premultiplyAlpha: true,
        premultipliedAlpha: true
    });

}

function showBalloon() {
    $('.section-top').addClass('show');
}

// $('.top-balloon circle').addClass('show');
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

    // containers
    let gleraValuesIcon1 = document.querySelector('.glera-values__icon-1')
    let gleraValuesIcon2 = document.querySelector('.glera-values__icon-2')
    let gleraValuesIcon3 = document.querySelector('.glera-values__icon-3')
    let gleraValuesIcon4 = document.querySelector('.glera-values__icon-4')
    let gleraValuesIcon5 = document.querySelector('.glera-values__icon-5')

    //blick slider
    let gleraBlickLeft = document.querySelector('#blick-left3')
    let gleraBlickLeft2 = document.querySelector('#blick-left2')
    let gleraBlickRight = document.querySelector('#blick-right3')
    let gleraBlickRight2 = document.querySelector('#blick-right2')

    let jsonAnimLeftRed = document.querySelector('.json-anim-left-red');
    let jsonAnimLeftRed2 = document.querySelector('.json-anim-left-red2');
    let jsonAnimLeftRed3 = document.querySelector('.json-anim-left-red3');
    let jsonAnimRightRed = document.querySelector('.json-anim-right-red');
    let jsonAnimRightRed2 = document.querySelector('.json-anim-right-red2');
    let jsonAnimRightRed3 = document.querySelector('.json-anim-right-red3');
//path
    //Icons
    let dataValuesIcon1 = '/wp-content/themes/glera/assets/animations/about/Dots/Dot Result.json';
    let dataValuesIcon2 = '/wp-content/themes/glera/assets/animations/about/Dots/Dot Team.json';
    let dataValuesIcon3 = '/wp-content/themes/glera/assets/animations/about/Dots/Dot Free.json';
    let dataValuesIcon4 = '/wp-content/themes/glera/assets/animations/about/Dots/Dot Up.json';
    let dataValuesIcon5 = '/wp-content/themes/glera/assets/animations/about/Dots/Dot Balance.json';

    //blick path
    let dataLeftRed = '/wp-content/themes/glera/assets/animations/json/3/data.json';
    let dataRightRed = '/wp-content/themes/glera/assets/animations/json/4/data.json';
    //blick slider path
    let dataBlickLeft = '/wp-content/themes/glera/assets/animations/json/3/data.json';
    let dataBlickRight = '/wp-content/themes/glera/assets/animations/json/4/data.json';
//script


    let ValuesIcon1 = {
        name: 'dataValuesIcon1',
        container: gleraValuesIcon1,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataValuesIcon1
    };
    let ValuesIcon2 = {
        name: 'dataValuesIcon2',
        container: gleraValuesIcon2,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataValuesIcon2
    };
    let ValuesIcon3 = {
        name: 'dataValuesIcon3',
        container: gleraValuesIcon3,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataValuesIcon3
    };
    let ValuesIcon4 = {
        name: 'dataValuesIcon4',
        container: gleraValuesIcon4,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataValuesIcon4
    };
    let ValuesIcon5 = {
        name: 'dataValuesIcon5',
        container: gleraValuesIcon5,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataValuesIcon5
    };

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

    let btnAnimleftRed = {
        name: 'dataLeftRed',
        container: jsonAnimLeftRed,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataLeftRed
    };
    let btnAnimleftRed2 = {
        name: 'dataLeftRed',
        container: jsonAnimLeftRed2,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataLeftRed
    };
    let btnAnimleftRed3 = {
        name: 'dataLeftRed',
        container: jsonAnimLeftRed3,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataLeftRed
    };

    let btnAnimRightRed = {
        name: 'dataRightRed',
        container: jsonAnimRightRed,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataRightRed
    };
    let btnAnimRightRed2 = {
        name: 'dataRightRed',
        container: jsonAnimRightRed2,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataRightRed
    };
    let btnAnimRightRed3 = {
        name: 'dataRightRed',
        container: jsonAnimRightRed3,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataRightRed
    };
//Init
    bodymovin.loadAnimation(ValuesIcon1)
    bodymovin.loadAnimation(ValuesIcon2)
    bodymovin.loadAnimation(ValuesIcon3)
    bodymovin.loadAnimation(ValuesIcon4)
    bodymovin.loadAnimation(ValuesIcon5)
    //Blick
    bodymovin.loadAnimation(blickLeft)
    bodymovin.loadAnimation(blickLeft2)
    bodymovin.loadAnimation(blickRight)
    bodymovin.loadAnimation(blickRight2)

    bodymovin.loadAnimation(btnAnimleftRed)
    bodymovin.loadAnimation(btnAnimleftRed2)
    bodymovin.loadAnimation(btnAnimleftRed3)

    bodymovin.loadAnimation(btnAnimRightRed)
    bodymovin.loadAnimation(btnAnimRightRed2)
    bodymovin.loadAnimation(btnAnimRightRed3)

    //containers
    let gleraMap = document.querySelector('#map-init')
//path
    //map
    let dataMap = '/wp-content/themes/glera/assets/animations/map-2.json';

//scripts
    let animMapAnim = bodymovin.loadAnimation({
        name: 'dataMap',
        container: gleraMap,
        renderer: 'svg',
        autoplay: false,
        imagePreloader: '',
        loop: false,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataMap
    });

    var directionMenu = 1;
    gleraMap.addEventListener('mouseenter', (e) => {
        animMapAnim.setDirection(directionMenu);
        animMapAnim.play();
    });

    gleraMap.addEventListener('mouseleave', (e) => {
        animMapAnim.setDirection(-directionMenu);
        animMapAnim.play();
    });

})
