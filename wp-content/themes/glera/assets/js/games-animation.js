
//swiper life page

let swiperlife1 = new Swiper(".funny-blocks__slider1", {
    effect: "coverflow",
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


//swiper Game

var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    preventClicks: false,
    loop: true,
    preventClicksPropagation: false,
    breakpointsBase: 'swiper-container',
    coverflowEffect: {
        rotate: 0,
        stretch: -30,
        depth: 50,
        slideShadows: false

    },
    navigation: {
        nextEl: ".slide-prev-funny1",
        prevEl: ".slide-next-funny1",
    }
});

document.addEventListener("DOMContentLoaded", function (event) {

    gsap.fromTo('.fly', 4, {y: 0}, { y: -30, ease: "linear", repeat:-1, yoyo:true} )
    gsap.fromTo('.fly1', 4, {y: 0}, {delay: 2, y: -30, ease: "linear", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse1', 2, {scale: .8, delay: 1}, { scale: 1, ease: "linear", repeat:-1, yoyo:true})
    gsap.fromTo('.pulse2', 4, {scale: .8, delay: 1}, { scale: 1, ease: "linear", repeat:-1, yoyo:true})

    // Scroll effect

    const triggerContainer = document.querySelector('.game-content')
    const drawLine = document.querySelector('#line')


    let animateDrow = gsap.timeline({
        scrollTrigger: {
            trigger: triggerContainer,
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrow.fromTo(drawLine, 4, { drawSVG: '-100%'}, { drawSVG: '100%'})

    var s1 = document.getElementById("wow1");
    var s2 = document.getElementById("wow2");
    var s3 = document.getElementById("wow3");
    var tl = new gsap.timeline({repeat:-1, yoyo: true});

    tl
        .to(s1, 8, {morphSVG: s2, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s3, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s1, ease: "power1.inOut"});

    // icons
    let gleraOurOffice = document.querySelector('.title-our-office')



})