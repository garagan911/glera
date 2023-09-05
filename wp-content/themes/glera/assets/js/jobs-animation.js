function globalAnimate() {

    // ABOUT

    // const jobsVideoBig = document.querySelector('.jobs-video__big')
    const ellipseViolet = document.querySelector('.ellipse-violet')
    const jobsVideoSmall = document.querySelector('.glera-jobs__video-wrap')
    const jobsTicket = document.querySelector('.ticket-jobs-top')
    const jobsWrapTextTitle = document.querySelector('.wrap-text-title')
    const jobsThingsTop = document.querySelector('.glera-jobs__things-top')
    const jobsTitleAnim = document.querySelector('.title-fade-jobs')

    // tl Jobs

    const tlJ = gsap.timeline();

    tlJ.fromTo(ellipseViolet, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"})
       .fromTo(jobsTicket, {x: 150, opacity: 0, scale: .5}, {
            duration: 3,
            x: 0,
            opacity: 1,
            scale: 1,
            ease: "expo.out"
        }, "-=2.5")
        .fromTo(jobsVideoSmall, {duration: 2.5,  opacity: 0}, {duration: 2, opacity: 1, y: 0}, "-=2")
        .fromTo(jobsWrapTextTitle, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(jobsThingsTop, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")
        .fromTo(jobsTitleAnim, {duration: 2.5, scale: 0}, {duration: 2, scale: 1, ease: "expo.out"}, "-=2")



    gsap.fromTo('.pulse', 2, {scale: .8}, { scale: 1.2, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse2', 2, {scale: .95}, { scale: 1.05, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse1', 2, {scale: .8, delay: 1}, { scale: 1, ease: "linear", repeat:-1, yoyo:true})
    gsap.fromTo('.weel', 10, {rotade: 0}, { rotate: 360, ease: "linear", transformOrigin: "50% 50%", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse-top', 4, {y: 0}, { y: -30, ease: "linear", repeat:-1, yoyo:true} )
    gsap.fromTo('.pulse-top2', 4, {y: 0}, {duration: 2, y: -30, ease: "linear", repeat:-1, yoyo:true} )


    // Scroll effect
    let animateDrow = gsap.timeline({
        scrollTrigger: {
            trigger: ".hot-vacancies",
            start: "top 30%",
            // markers: "true",
            toggleActions: "play none none reverse",
        }
    });

    animateDrow.fromTo("#our-games-line-drow", 4, { drawSVG: '-100%'}, { drawSVG: '100%'})
               // .fromTo(ourGamesBgThing, 2, {scale: 0, x: 50, opacity: 0}, {scale: 1, x: 0, opacity: 1}, '-=4')


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