// console.log('INIT-Global');


$(document).ready(function () {
    // $('#menu-item-62').mouseenter(function (){
    //     headerGames.addClass('active')
    //
    // })
    // headerGames.mouseenter(function (){
    //     headerGames.addClass('active')
    //
    // })
    // $('#menu-item-62').mouseleave(function (){
    //     setTimeout(() => {
    //         headerGames.removeClass('active')
    //     }, 2000)
    //
    // })
    // headerGames.mouseleave(function (){
    //     setTimeout(() => {
    //         headerGames.removeClass('active')
    //     }, 2000)
    //
    // })

    // header games popup
    let headerGames = $('#header_games')

    $('#menu-item-62')
        .on('mouseenter', function() {
            setTimeout(() => {
                headerGames.addClass('active');
                console.log('move')
                    }, 100)

        })
        .on('mouseleave', function() {
            headerGames.removeClass('active')
            console.log('leave')
        });
    headerGames.on('mouseenter', function() {
        headerGames.addClass('active');
        console.log('moveG')
        })
        .on('mouseleave', function() {
            headerGames.removeClass('active')
            console.log('leaveG')
        });

})

// init lazy load
const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();


let btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, 100, "linear");
});

// animation


AOS.init({
    duration: 1200,
    once: true,
    disable: function () {
        var maxWidth = 1024;
        return window.innerWidth < maxWidth;
    }
});
document.querySelectorAll('img')
    .forEach((img) =>
        img.addEventListener('load', () =>
            AOS.refresh()
        )
    );


// Validation lang

let item = document.querySelector('.wpml-ls-native');

let lang = item.innerHTML

const str = lang;

let langChange = str.substr(0, 2)

item.innerHTML = langChange

if (lang === 'Lietuvių') {
    item.innerHTML = 'Lt'
}

if (lang === 'Русский') {
    item.innerHTML = 'Ru'
}
function globalAnimate() {
    gsap.fromTo('.pulse', 2, {scale: .8}, {
        scale: 1.2,
        ease: "linear",
        transformOrigin: "50% 50%",
        repeat: -1,
        yoyo: true
    })
    gsap.fromTo('.pulse2', 2, {scale: .95}, {
        scale: 1.05,
        ease: "linear",
        transformOrigin: "50% 50%",
        repeat: -1,
        yoyo: true
    })
    gsap.fromTo('.pulse1', 2, {scale: .8, delay: 1}, {scale: 1, ease: "linear", repeat: -1, yoyo: true})
    gsap.fromTo('.weel', 10, {rotade: 0}, {
        rotate: 360,
        ease: "linear",
        transformOrigin: "50% 50%",
        repeat: -1,
        yoyo: true
    })
    gsap.fromTo('.pulse-top', 4, {y: 0}, {y: -30, ease: "linear", repeat: -1, yoyo: true})
    gsap.fromTo('.pulse-top2', 4, {y: 0}, {duration: 2, y: -30, ease: "linear", repeat: -1, yoyo: true})

    var s1 = document.querySelector(".wow1");
    var s2 = document.querySelector(".wow2");
    var s3 = document.querySelector(".wow3");
    var tl = new gsap.timeline({repeat:-1, yoyo: true});

    tl
        .to(s1, 8, {morphSVG: s2, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s3, ease: "power1.inOut"})
        .to(s1, 8, {morphSVG: s1, ease: "power1.inOut"});

    const triggerContainer = document.querySelector('.news-wrapper-posts')
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
}


function showBalloon() {
    $('.section-top').addClass('show');
}



function removePreloader() {
    $('.preloader').animate({
        opacity: '0'
    }, 1600, function () {
        $(this).remove();
    });
    setTimeout(function () {
        showBalloon()
        globalAnimate()
    }, 800);

}


$(document).ready(function () {



    $('.nav-links .nav-previous a, .nav-links .nav-next a').addClass('d-none');

    var header = $('.site-header'),
        scrollPrev = 0;


    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();

        if ( scrolled > 30 && scrolled > scrollPrev ) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed');
            header.addClass('default');
        }

        if ( $(this).scrollTop() > 30 && header.hasClass("fixed") ){
            header.removeClass("default").addClass("fixed");
        } else if($(this).scrollTop() <= 30 && header.hasClass("default")) {
            header.removeClass("default").removeClass("fixed");
        }

        scrollPrev = scrolled;
    });

    $('.wrap-slider .slick-track').css('display', 'flex');

    //Mob-menu

    $('.glera__menu-toggle').click(function () {
        $('.main-navigation').toggleClass('show')
        $('body').toggleClass('overflow-hidden')
    })


    if(window.innerWidth <= 992) {
        // mob menu fix
        // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
        let vh = window.innerHeight * 0.01;
        // Then we set the value in the --vh custom property to the root of the document
        document.documentElement.style.setProperty('--vh', `${vh}px`);

        // We listen to the resize event
        window.addEventListener('resize', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
    }

    // tabs
    $('.tab-a').click(function (event) {
        event.preventDefault();
        $(".tab").removeClass('tab-active');
        $(".tab[data-id='" + $(this).attr('data-id') + "']").addClass("tab-active");
        $(".tab-a").removeClass('active-a');
        $(this).parent().find(".tab-a").addClass('active-a');
    });


});

// General

$(window).on('load', function () {
    removePreloader();
    $(window).scroll();
});

// animation

document.addEventListener("DOMContentLoaded", function (event) {


    // preloader

    let dataFunnyBlocksBg3 = '/wp-content/themes/glera/assets/animations/loader/Preloader.json';
    var preloader = bodymovin.loadAnimation({
        container: document.querySelector('.preloader-anim'),
        renderer: 'svg',
        autoplay: true,
        loop: true,
        path: dataFunnyBlocksBg3
    });

    let jsonAnimLeftRed2Cf7 = document.querySelector('.json-anim-left-red2-cf7');
    let jsonAnimRightRed2Cf7 = document.querySelector('.json-anim-right-red2-cf7');

    //
    let dataLeftRed = '/wp-content/themes/glera/assets/animations/json/3/data.json';
    let dataRightRed = '/wp-content/themes/glera/assets/animations/json/4/data.json';


    //blick title news page
    let gleraBlickLeft = document.querySelector('#blick-left-news')
    let gleraBlickRight = document.querySelector('#blick-right-news')

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
        path: dataLeftRed
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
        path: dataRightRed
    };

    bodymovin.loadAnimation(blickLeft)
    bodymovin.loadAnimation(blickRight)

    let btnAnimleftRed2Cf7 = {
        name: 'dataLeftRedCf7',
        container: jsonAnimLeftRed2Cf7,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataLeftRed
    };

    let btnAnimRightRed2Cf7 = {
        name: 'dataRightRed',
        container: jsonAnimRightRed2Cf7,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: true
        },
        path: dataRightRed
    };

    bodymovin.loadAnimation(btnAnimleftRed2Cf7)
    bodymovin.loadAnimation(btnAnimRightRed2Cf7)



    // file fild form

    $(document).on("input", "input:file", function (e) {
        let fileName = e.target.files[0].name;
        $(".title-file").html(fileName).css('color', '#AAE6C5');
    });

    jQuery('#search_categories').each(function () {


        var target = jQuery(this);

        var selected = target.find('option:selected').text();


        var map = jQuery('<div class="tab-menu"><ul class="selectmap"></ul> <h5 class="title-jobs">' + selected + '</h5></div>').insertAfter(target);


        target.hide();


        target.find('option').each(function () {

            var c = jQuery(this);
            var u = map.find('ul');

            jQuery('<li data-value="' + c.attr('value') + '"><a class="tab-a"> ' + c.text() + '</a></li>').appendTo(u);

        });


        map.find('li').click(function () {

            map.find('h5').text(jQuery(this).text());
            target.val(jQuery(this).attr('data-value')).trigger('change');

        });


    });

    $(document).ready(function () {
        var $select = $('.wpcf7-form-control-wrap.vacansies select');
        $('option[value="Откуда вы узнали о вакансии?"]', $select).attr('hidden', true);
        $('option[value="Откуда вы узнали о вакансии?"]', $select).attr('disabled', true);
        $('option[value="Откуда вы узнали о вакансии?"]', $select).attr('selected', true);


    });
    $('.button-primary.qbutton').val('Прикрепить резюме, портфолио (до 10 МБ)');

    $('.wpcf7-select').change(function (){
        $(this).css('color', '#31496B')
    })

    $(".qbutton").wrap('<div class="multilinefile" />');



    $(document).on("input", "input:file", function(e) {
        $('#mfcf7_zl_add_file').val('Загрузить еще').addClass('is-file')
        $('.multilinefile').addClass('is-file')

    });
    let closeBlock = $('.delete-file')
    closeBlock.innerHTML = '<img src="/wp-content/themes/glera/assets/images/jobs/close.svg">';

});