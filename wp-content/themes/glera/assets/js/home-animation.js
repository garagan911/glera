function globalAnimate() {

    // HOME PAGE
    const ticket = document.querySelector('#ticket');
    const ellipseBlue = document.querySelector('#ellipse-blue');
    const ellipseBlue1 = document.querySelector('#ellipse-blue1');
    const hpVideoBanner = document.querySelector('#hp-video-banner');
    const hpGirlWrap = document.querySelector('#girl-wrap');
    const hpGirl = document.querySelector('#girl');
    const hpGirlBalloon = document.querySelector('#girl-balloon');
    const hpBtn = document.querySelector('.wrap-btn-hover-0');
    const hpCirclePath1 = document.querySelector('.circle-animation1');

    const hpCirclePathWow = document.querySelector('.circle-animation-wow');
    const hpCircleRight = document.querySelectorAll('.who-we-are .right, .geography .bg-left');
    const hpCircleLeft = document.querySelectorAll('.who-we-are .left, .geography .bg-right');
    const ourGamesBgThing = document.querySelectorAll('.our-games-bg-thing');
    const ourNewsBgPath = document.querySelectorAll('.our-news__bg--path');
    const ourNewsTitlePage = document.querySelectorAll('.title-fade-home');
    const split = new SplitText(".split-text");

    const tlH = gsap.timeline();

    // tl Home

    tlH.fromTo(ellipseBlue, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
        .fromTo(ellipseBlue1, {duration: 0.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(ticket, {x: -150, opacity: 0, scale: .5}, {
            duration: 3,
            x: 0,
            opacity: 1,
            scale: 1,
            ease: "expo.out"
        }, "-=2")
        .from(split.chars, {
            duration: 1,
            opacity: 0,
            x: "random(-500, 500)",
            y: "random(-500, 500)",
            z: "random(-500, 500)",
            scale: .1,
            yoyo: true,
            stagger: 0.02
        }, "-=2.5")
        .fromTo(hpVideoBanner, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=3")
        .fromTo(hpGirlWrap, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2.5")
        .fromTo(hpGirl, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2.5")
        .fromTo(hpGirlBalloon, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2")
        .fromTo(hpBtn, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2")
        .fromTo(ourNewsTitlePage, {duration: 0, scale: 0}, {
            duration: 2,
            scale: 1,
            ease: "expo.out",
            transformOrigin: "center"
        }, "-=2")


    gsap.fromTo([hpCirclePath1, hpCircleRight, hpCircleLeft], 3, {scale: .8}, { scale: 1.2, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo(hpCirclePathWow, 2, {scale: .8}, { scale: 1.2, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo([ourGamesBgThing, ourNewsBgPath], 4, {rotade: 0}, { rotate: 360, ease: "linear", transformOrigin: "50% 50%", repeat:-1} )
    gsap.fromTo(ticket, 4, {y: 0}, { y: -30, ease: "linear", repeat:-1, yoyo:true} )

    var s1 = document.getElementById("wow1");
    var s2 = document.getElementById("wow2");
    var s3 = document.getElementById("wow3");
    var tl = new gsap.timeline({repeat:-1, yoyo: true});

    tl
        .to(s1, 8, {morphSVG: s2, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s3, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s1, ease: "power1.inOut"});


    // Scroll effect

    const ourNewsBg = document.querySelector('.our-news__bg')
    const ourNewsBgLine = document.querySelector('#our-news__bg-line')
    const ourNewsBgCircle = document.querySelectorAll('.our-news-circle-bg')


    let animateDrow = gsap.timeline({
        scrollTrigger: {
            trigger: ".our-games__h3",
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrow.fromTo("#our-games-line-drow", 4, { drawSVG: '-100%'}, { drawSVG: '100%'})
        .fromTo(ourGamesBgThing, 2, {scale: 0, x: 50, opacity: 0}, {scale: 1, x: 0, opacity: 1}, '-=4')


    let animateDrowNews = gsap.timeline({
        scrollTrigger: {
            trigger: ourNewsBg,
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrowNews.fromTo(ourNewsBgLine, 4, { drawSVG: '-100%'}, { drawSVG: '100%'})
        .fromTo([ourNewsBgPath, ourNewsBgCircle], 3, {scale: 0, opacity: 0}, {scale: 1, opacity: 1}, '-=4')



    const mahjongAnimate1 = document.querySelector('.mahjong-animate-1')
    const mahjongAnimate2 = document.querySelector('.mahjong-animate-2')
    const mahjongAnimate3 = document.querySelector('.mahjong-animate-3')
    const lineBgPath = document.querySelector('#our-games__line-bg-path')
    const ourGamesContainer = document.querySelector('.our-games__container')

    // gsap.fromTo(mahjongAnimate1, 3, {scale: .8, opacity: 1}, {scale: 1.2, opacity: 0, transformOrigin: "50% 50%", repeat:-1})
    let animateDrowGames = gsap.timeline({
        scrollTrigger: {
            trigger: ourGamesContainer,
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrowGames
        .fromTo(mahjongAnimate3, 1.2, {scale: 0, opacity: 0}, {scale: 1, opacity: 1})
        .fromTo(mahjongAnimate1, 1.2, {scale: 0, opacity: 0}, {scale: 1, opacity: 1}, "-=1.2")
        .fromTo(mahjongAnimate2, 1.2, {scale: 0, opacity: 0}, {scale: 1, opacity: 1}, "-=1.2")
        .fromTo(lineBgPath, 2, { drawSVG: '-100%'}, { drawSVG:"0% 100%", strokeDasharray: "8.8"}, "-=.8")
}

function checkPosition() {

    if($(window).width() > 767) {
        let bl = $('.restored');
        let bs = $('.storm');
        let bcj = $('.girljs');
        let bhj = $('.hopkinsjs');
        bs[0].innerHTML = 'new spine.SpinePlayer("corsar", {\n' +
            '                jsonUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/bubble_storm/bubble_13.json",\n' +
            '                atlasUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/bubble_storm/bubble_13.atlas",\n' +
            '                showControls: false,\n' +
            '                alpha: true, // Enable player translucency\n' +
            '                backgroundColor: "#00000000",\n' +
            '                premultiplyAlpha: true,\n' +
            '                premultipliedAlpha: true\n' +
            '            });';
        bl[0].innerHTML = 'new spine.SpinePlayer("player-container2", {\n' +
            '            jsonUrl: "/wp-content/themes/glera/assets/animations/estate_sector_restored 3/export/estate_sector_restored.json",\n' +
            '            atlasUrl: "/wp-content/themes/glera/assets/animations/estate_sector_restored 3/export/estate_sector_restored.atlas",\n' +
            '            showControls: false,\n' +
            '            alpha: true, // Enable player translucency\n' +
            '            backgroundColor: "#00000000",\n' +
            '            premultiplyAlpha: true,\n' +
            '            premultipliedAlpha: true\n' +
            '        });';
        // bcj[0].innerHTML = 'new spine.SpinePlayer("girl", {\n' +
        //     '                            jsonUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/bubble_timetravel/bubble_timetravel.json",\n' +
        //     '                            atlasUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/bubble_timetravel/bubble_timetravel.atlas",\n' +
        //     '                            showControls: false,\n' +
        //     '                            alpha: true, // Enable player translucency\n' +
        //     '                            backgroundColor: "#00000000",\n' +
        //     '                            premultiplyAlpha: true,\n' +
        //     '                            premultipliedAlpha: true\n' +
        //     '                        });';
        bhj[0].innerHTML = ' new spine.SpinePlayer("hopkins", {\n' +
            '                jsonUrl: "/wp-content/themes/glera/assets/animations/home/Hopkins Optimize/Hopkins 0.3x/bubble_hopkins.json",\n' +
            '                atlasUrl: "/wp-content/themes/glera/assets/animations/home/Hopkins Optimize/Hopkins 0.3x/bubble_hopkins.atlas",\n' +
            '                // atlasUrl: "/wp-content/themes/glera/assets/animations/home/Hopkins Optimize/Hopkins 0.3x/bubble_hopkins.atlas",\n' +
            '                showControls: false,\n' +
            '                alpha: true, // Enable player translucency\n' +
            '                backgroundColor: "#00000000",\n' +
            '                premultiplyAlpha: true,\n' +
            '                premultipliedAlpha: true\n' +
            '            });';

    }
}

$(window).on('load resize', checkPosition );

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
        showBalloon();
        globalAnimate();
        checkPosition();
    }, 800);

}

// animation

document.addEventListener("DOMContentLoaded", function (event) {

    let animationCompany = document.querySelector('#mascot');
    let mascotHP = document.querySelector('#mascotHP');
    let jsonAnimLeftRed = document.querySelector('.json-anim-left-red');
    let jsonAnimLeftRed2 = document.querySelector('.json-anim-left-red2');
    let jsonAnimLeftRed3 = document.querySelector('.json-anim-left-red3');
    let jsonAnimRightRed = document.querySelector('.json-anim-right-red');
    let jsonAnimRightRed2 = document.querySelector('.json-anim-right-red2');
    let jsonAnimRightRed3 = document.querySelector('.json-anim-right-red3');

    let jsonAnimRightWhite = document.querySelector('.json-anim-right-white');
    let jsonAnimLeftWhite = document.querySelector('.json-anim-left-white');

    let whoWeAreIcon1 = document.querySelector('.who-we-are-icon1');
    let whoWeAreIcon2 = document.querySelector('.who-we-are-icon2');
    let whoWeAreIcon3 = document.querySelector('.who-we-are-icon3');

    let ourNews = document.querySelector('.title-our-news')

    let data = '/wp-content/themes/glera/assets/animations/lf30_qaawwqni.json';
    let dataMascotHP = '/wp-content/themes/glera/assets/animations/home/mascot_with_phone_stroke/mascot_with_phone_stroke.json';

    let dataLeftWhite = '/wp-content/themes/glera/assets/animations/json/1/data.json';
    let dataRightWhite = '/wp-content/themes/glera/assets/animations/json/2/data.json';

    let dataLeftRed = '/wp-content/themes/glera/assets/animations/json/3/data.json';
    let dataRightRed = '/wp-content/themes/glera/assets/animations/json/4/data.json';

    let jsomWhoWeAreIcon1 = '/wp-content/themes/glera/assets/animations/home/Work-Projects-Offices/Remote.json';
    let jsomWhoWeAreIcon2 = '/wp-content/themes/glera/assets/animations/home/Work-Projects-Offices/New Project.json';
    let jsomWhoWeAreIcon3 = '/wp-content/themes/glera/assets/animations/home/Work-Projects-Offices/Office.json';


    let animBlue = {
        name: 'data',
        container: animationCompany,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: data
    };
    let mascotHPAnim = {
        name: 'dataMascotHP',
        container: mascotHP,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataMascotHP
    };

    let btnAnimleftWhite = {
        name: 'dataLeftWhite',
        container: jsonAnimLeftWhite,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataLeftWhite
    };

    let btnAnimRightWhite = {
        name: 'dataRightWhite',
        container: jsonAnimRightWhite,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataRightWhite
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

    let animWhoWeAreIcon1 = bodymovin.loadAnimation({
        name: 'jsomWhoWeAreIcon1',
        container: whoWeAreIcon1,
        renderer: 'svg',
        // autoplay: true,
        loop: false,
        autoplay: false,
        imagePreloader: '',
        speed: 5,
        rendererSettings: {
            progressiveLoad: true
        },
        path: jsomWhoWeAreIcon1
    })

    let animWhoWeAreIcon2 = bodymovin.loadAnimation({
        name: 'jsomWhoWeAreIcon2',
        container: whoWeAreIcon2,
        renderer: 'svg',
        autoplay: false,
        speed: 5,
        imagePreloader: '',
        loop: false,
        rendererSettings: {
            progressiveLoad: true
        },
        path: jsomWhoWeAreIcon2
    });
    let animWhoWeAreIcon3 = bodymovin.loadAnimation({
        name: 'jsomWhoWeAreIcon3',
        container: whoWeAreIcon3,
        renderer: 'svg',
        autoplay: false,
        speed: 5,
        imagePreloader: '',
        loop: false,
        hover: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: jsomWhoWeAreIcon3
    });

    var directionMenu = 1;
    let whoWeAreGrid1 = document.querySelector('.who-we-are__item-1')
    let whoWeAreGrid2 = document.querySelector('.who-we-are__item-2')
    let whoWeAreGrid3 = document.querySelector('.who-we-are__item-3')
    whoWeAreGrid1.addEventListener('mouseenter', (e) => {
        animWhoWeAreIcon1.setDirection(directionMenu);
        animWhoWeAreIcon1.play();
    });

    whoWeAreGrid1.addEventListener('mouseleave', (e) => {
        animWhoWeAreIcon1.setDirection(-directionMenu);
        animWhoWeAreIcon1.play();
    });
    whoWeAreGrid2.addEventListener('mouseenter', (e) => {
        animWhoWeAreIcon2.setDirection(directionMenu);
        animWhoWeAreIcon2.play();
    });

    whoWeAreGrid2.addEventListener('mouseleave', (e) => {
        animWhoWeAreIcon2.setDirection(-directionMenu);
        animWhoWeAreIcon2.play();
    });
    whoWeAreGrid3.addEventListener('mouseenter', (e) => {
        animWhoWeAreIcon3.setDirection(directionMenu);
        animWhoWeAreIcon3.play();
    });

    whoWeAreGrid3.addEventListener('mouseleave', (e) => {
        animWhoWeAreIcon3.setDirection(-directionMenu);
        animWhoWeAreIcon3.play();
    });
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
    //Init titles
    // bodymovin.loadAnimation(animMapAnim);

    var directionMenu = 1;
    gleraMap.addEventListener('mouseenter', (e) => {
        animMapAnim.setDirection(directionMenu);
        animMapAnim.play();
    });

    gleraMap.addEventListener('mouseleave', (e) => {
        animMapAnim.setDirection(-directionMenu);
        animMapAnim.play();
    });


    bodymovin.loadAnimation(animBlue)
    bodymovin.loadAnimation(mascotHPAnim)

    bodymovin.loadAnimation(btnAnimleftRed)
    bodymovin.loadAnimation(btnAnimleftRed2)
    bodymovin.loadAnimation(btnAnimleftRed3)

    bodymovin.loadAnimation(btnAnimRightRed)
    bodymovin.loadAnimation(btnAnimRightRed2)
    bodymovin.loadAnimation(btnAnimRightRed3)

    bodymovin.loadAnimation(btnAnimleftWhite)
    bodymovin.loadAnimation(btnAnimRightWhite)

    // Init Slick
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        appendArrows: $('.wrap-slider .controls'),
        nextArrow: '<button class="slide-prev btn-slide"></button>',
        prevArrow: '<button class="slide-next btn-slide"></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]

    });

    //Slick News Home
    $('.our-news__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        appendArrows: $('#controls-news'),
        nextArrow: '<button class="slide-prev btn-slide"></button>',
        prevArrow: '<button class="slide-next btn-slide"></button>',
        responsive: [
            {
                breakpoint: 1220,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });


    // функция определяет нахождение элемента в области видимости
// если элемент видно - возвращает true
// если элемент невидно - возвращает false
    function isOnVisibleSpace(element) {
        var bodyHeight = window.innerHeight;
        var elemRect = element.getBoundingClientRect();
        var offset   = elemRect.top;// - bodyRect.top;
        if(offset<0) return false;
        if(offset>bodyHeight) return false;
        return true;
    }
});




