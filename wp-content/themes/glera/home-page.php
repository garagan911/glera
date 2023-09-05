<?php
/* Template Name: Home Page */

/**
 * home-page.php
 *
 * the Home Page template
 *
 *
 *
 * @package glera
 *
 */
?>
<?php get_header() ?>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        //title
        let titleHP = document.querySelector('.title-page-hp-anim')
        let path2 = '<?php the_field( 'top_title_json' ); ?>';
        let animDataHome2 = {
            name: 'Animation2',
            container: titleHP,
            renderer: 'svg',
            autoplay: true,
            loop: true,
            rendererSettings: {
                progressiveLoad:false
            },
            path: path2
        };
        bodymovin.loadAnimation(animDataHome2);

        //sub titles container
        let aboutUs = document.querySelector('.title-about-us');
        let ourGames = document.querySelector('.title-our-games');
        let geography = document.querySelector('.title-geography');
        let ourNews = document.querySelector('.title-our-news');

        //sub titles path
        let dateAboutUs = '<?php the_field( 'about_us_title_json' ); ?>';
        let dateOurGames = '<?php the_field( 'our_games_title_json' ); ?>';
        let dateGeography = '<?php the_field( 'geography_title_json' ); ?>';
        let dateOurNews = '<?php the_field( 'our_news_title_json' ); ?>';

        let aboutUsTitle = {
            name: 'dateAboutUs',
            container: aboutUs,
            renderer: 'svg',
            autoplay: true,
            imagePreloader: '',
            loop: true,
            rendererSettings: {
                progressiveLoad: true
            },
            path: dateAboutUs
        };
        let ourGamesTitle = {
            name: 'dateOurGames',
            container: ourGames,
            renderer: 'svg',
            autoplay: true,
            imagePreloader: '',
            loop: true,
            rendererSettings: {
                progressiveLoad: true
            },
            path: dateOurGames
        };
        let geographyTitle = {
            name: 'dateOurGames',
            container: geography,
            renderer: 'svg',
            autoplay: true,
            imagePreloader: '',
            loop: true,
            rendererSettings: {
                progressiveLoad: true
            },
            path: dateGeography
        };
        let ourNewsTitle = {
            name: 'dateOurNews',
            container: ourNews,
            renderer: 'svg',
            autoplay: true,
            imagePreloader: '',
            loop: true,
            rendererSettings: {
                progressiveLoad: true
            },
            path: dateOurNews
        };

        //Init titles
        bodymovin.loadAnimation(aboutUsTitle)
        bodymovin.loadAnimation(ourGamesTitle)
        bodymovin.loadAnimation(geographyTitle)
        bodymovin.loadAnimation(ourNewsTitle)
    })
</script>
<section class="home-top-banner section-top">
    <svg class="position-absolute top-balloon" width="1801" height="1801" viewBox="0 0 1801 1801" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <circle cx="900.5" cy="900.5" r="900.5" fill="#FBEADF"/>
        <path opacity="0.3"
              d="M1708 870C1708 1341.65 1326.1 1724 855 1724C383.903 1724 2 1341.65 2 870C2 398.347 383.903 16 855 16C1326.1 16 1708 398.347 1708 870Z"
              stroke="white" stroke-width="4"/>
        <ellipse id="ellipse-blue" cx="864" cy="861.5" rx="799" ry="798.5" fill="#B9DCF2"/>
        <path class="line-home-top" opacity="0.3"
              d="M183 1148.91C240.516 1122.14 369.372 1076.47 501.972 1136.68C700.594 1226.86 776.336 1359 1000.59 1359C1183.83 1359 1224.24 1059.96 1432 1148.91"
              stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"
              stroke-dasharray="8.8 8.8"/>
        <path class="circle-animation1"
              d="M584 657C584 674.633 569.49 689 551.5 689C533.51 689 519 674.633 519 657C519 639.367 533.51 625 551.5 625C569.49 625 584 639.367 584 657Z"
              stroke="white" stroke-width="6"/>
        <circle class="circle-animation-wow" opacity="0.2" cx="163" cy="953" r="56" fill="#FFFFFD" stroke="white"
                stroke-width="6"/>
        <circle class="circle-animation3" cx="1183.85" cy="710.743" r="7.05224" fill="#FEFEFC"/>
        <circle class="circle-animation2" cx="871.63" cy="749.851" r="10.2578" fill="#F7F9F8"/>
    </svg>
    <div class="container home-top-banner__container">
        <div class="home-top-banner__grid position-relative">
            <div class="home-top-banner__text">
                <div class="position-absolute home-top-banner__ticket opacity-0" id="ticket"></div>
                <script>
                    new spine.SpinePlayer("ticket", {
                        jsonUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/sa_anim_dream_lamp/sa_anim_dream_lamp_1.json",
                        atlasUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/sa_anim_dream_lamp/sa_anim_dream_lamp_1.atlas",
                        showControls: false,
                        alpha: true, // Enable player translucency
                        backgroundColor: "#00000000",
                        premultiplyAlpha: true,
                        premultipliedAlpha: true
                    });
                </script>
                <h1 class="title-page-hp split-text subtitle" id="split">
                     <?php the_field( 'top_title_for_mobile' ); ?>
                    <img data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/molniy.svg" alt="">
                </h1>
                <div data-aos="zoom-in" class="home-top-banner__text-caption subtitle"><?php the_field( 'top_subtitle_mobile' ); ?></div>
                <div class="title-fade-home">
                    <div class="title-page-hp-anim"></div>
                </div>
                <span class="wrap-btn-hover-0 ">
                    <span class="json-anim-btn json-anim-left-white"></span>
                        <a href="/jobs/" class="btn btn-red effect01"><?php the_field( 'btn_name-banner' ); ?></a>
                    <span class="json-anim-btn json-anim-right-white"></span>
                </span>
            </div>
            <div class="home-top-banner__video position-relative" id="hp-video-banner">
                <img class="position-absolute vector" src="/wp-content/themes/glera/assets/images/vector-banner.svg"
                     alt="">
                <div class="home-top-banner__video-block">
                    <video class="lozad" data-poster="/wp-content/themes/glera/assets/video/poster-home.jpg" video autoplay loop muted playsinline webkit-playinginline >
                        <source data-src="/wp-content/themes/glera/assets/video/home-page-top-video-v2.mp4"
                                type="video/mp4">
                    </video>
                </div>
                <div class="home-top-banner__girl-lasso position-absolute" id="girl-wrap">
                    <img class="pic-1 " src="/wp-content/themes/glera/assets/images/home-top-pic-mob.png"
                         alt="">

                    <div class="pic-1 mob-none" id="girl"></div>
<!--                    <script class="girljs"></script>-->
                    <svg class="position-absolute pic-2" width="105" height="139" viewBox="0 0 105 139" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path id="girl-line"
                              d="M33.4749 74.1567C34.3098 76.3676 35.7851 78.1227 37.1813 79.9717C43.2794 87.8636 51.1877 93.2996 60.1521 97.4425C66.143 100.238 72.2908 102.428 78.5749 104.379C79.1305 104.558 79.7364 104.715 80.1774 105.182C80.6402 105.7 80.7856 106.175 79.8485 106.221C79.6252 106.258 79.293 106.042 79.3663 106.489C79.5288 107.974 78.4188 108.034 77.4531 108.152C75.6443 108.395 73.8769 107.902 72.1529 107.51C67.2915 106.499 62.415 105.316 57.8182 103.533C53.5101 101.865 49.4816 99.5975 45.5607 97.1642C43.0406 95.621 40.5206 94.0778 38.6834 91.7614C37.4899 90.2435 35.8221 89.2892 34.5999 87.8434C32.2999 85.0093 30 82.1751 28.4126 78.9137C27.0645 76.2067 26.4874 73.3463 26.8256 70.3898C26.931 69.3875 26.655 68.6097 25.954 67.9555C24.111 66.1798 22.347 64.3102 20.6049 62.491C17.7493 59.4781 15.4116 56.0024 13.2469 52.5119C9.75005 46.9055 6.88671 40.9658 5.45647 34.4671C4.63887 30.6342 4.06641 26.815 5.58451 22.9903C5.98552 21.98 6.52397 21.1495 7.58246 20.6925C8.03609 20.4967 8.45424 20.4956 8.80129 20.884C9.22052 21.301 8.88945 21.5037 8.64542 21.908C7.04494 24.5724 7.87404 27.324 8.45804 30.0618C10.028 37.5765 13.6427 44.1485 17.7615 50.503C20.9319 55.3534 24.541 59.8349 28.6898 63.904C29.0151 64.242 29.2327 64.7461 29.8582 64.1172C31.9283 61.8481 34.6364 60.9181 37.5987 60.7156C42.1395 60.4296 46.3664 61.3555 49.4258 65.1176C51.0603 67.1029 50.9788 68.9919 49.6292 71.1293C46.1189 76.7111 39.9709 77.1528 35.0477 74.6139C34.5929 74.3917 34.1886 74.1476 33.7339 73.9254C33.7052 73.9975 33.5757 74.1132 33.4749 74.1567ZM45.0013 71.2137C46.3118 70.6479 45.8124 69.9067 45.3634 69.1438C43.8286 66.6968 41.225 66.2063 38.7152 65.7949C36.9122 65.4969 34.9511 65.3868 33.1147 66.1198C32.4091 66.4244 31.9703 66.7933 32.8157 67.5047C35.2211 69.3365 37.7698 70.8076 40.7629 71.3692C42.22 71.6969 43.6473 71.6786 45.0013 71.2137ZM38.2876 83.9192C36.0953 80.9189 33.7736 78.0343 31.9124 74.8313C33.1332 78.4902 35.6566 81.2877 38.2876 83.9192ZM28.4263 65.0942C26.2213 62.7572 23.9946 60.3698 21.7897 58.0328C23.628 60.7673 25.833 63.1043 28.4263 65.0942Z"
                              fill="#B9DCF2"/>
                        <path d="M85.2748 115.099C88.1696 113.909 91.1812 113.266 94.1493 112.523C94.5743 112.4 95.1585 112.506 95.3441 111.828C95.4793 111.172 94.9524 110.921 94.548 110.677C92.5332 109.334 91.0144 107.478 89.2871 105.832C88.1886 104.811 86.9103 103.928 85.8187 102.785C84.1704 101.044 82.3423 99.4417 80.5864 97.8676C79.6975 97.0554 79.1753 95.8457 77.9485 95.3587C76.7217 94.8718 76.5602 93.8054 77.565 92.1158C78.0817 91.2349 78.9523 90.6198 80.0497 91.2224C80.9305 91.7391 81.8332 92.3063 82.6063 92.989C87.8375 97.4879 93.0183 102.008 98.2278 106.457C99.3766 107.456 100.626 108.411 101.854 109.316C104.094 111.041 104.154 112.151 102.358 114.361C101.007 116.081 99.2648 116.893 97.0883 117.115C92.9369 117.472 88.7787 117.951 84.7303 119.101C83.9308 119.327 83.1243 119.675 82.3465 119.951C81.3957 120.242 81.02 119.926 81.1976 118.952C81.6171 116.738 81.955 116.412 85.2748 115.099ZM94.1717 104.68C96.1819 106.981 98.4291 109.001 101.122 110.529C98.7957 108.604 96.4981 106.606 94.1717 104.68Z"
                              fill="#B9DCF2"/>
                    </svg>
                    <img class="position-absolute pic-3" id="girl-balloon"
                         src="/wp-content/themes/glera/assets/images/Homepage2х/balloon_meta_02 2 (1).png" alt="">

                </div>
            </div>

        </div>
    </div>
</section>

<section class="who-we-are who-we-are-hp">
    <!--    <img class="position-absolute left" data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-left-dec.svg" alt="">-->
    <img class="position-absolute left" data-aos="zoom-in"
         src="/wp-content/themes/glera/assets/images/maps-left-circle.svg" alt="">
    <!--    <img class="position-absolute right" data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-right-dec.svg" alt="">-->
    <img class="position-absolute right" data-aos="zoom-in"
         src="/wp-content/themes/glera/assets/images/right-circle.svg" alt="">
    <div class="container who-we-are__container">
        <h2 class="who-we-are__title title-shadow-blue show-scale-center subtitle title-h2_blue" data-aos="zoom-in">
            <span class="bg-text position-relative"><?php the_field( 'about_us_title_mobile_path_1' ); ?></span> <?php the_field( 'about_us_title_mobile_path_2' ); ?></h2>
        <!--        <img style="display: block; margin: 0 auto;max-width: 400px; width: 100%" src="/wp-content/themes/glera/assets/animations/__4.gif" alt="">-->
        <div data-aos="zoom-in" class="title-about-us" id="title-about-us"></div>
        <div data-aos="zoom-in"
             class="who-we-are__text-box position-relative show-scale-center">
            <p class="who-we-are__description"><?php the_field( 'about_us_who_we_are_description_path_1' ); ?> <span><?php the_field( 'about_us_number_of_employees' ); ?></span> <?php the_field( 'about_us_who_we_are_description_path_2' ); ?> </p>
            <div class="who-we-are__caption"><?php the_field( 'about_us_who_we_are_caption' ); ?></div>
        </div>
        <div class="mascot" id="mascotHP" data-aos="zoom-in"></div>
        <div class="who-we-are__grid">
            <div class="who-we-are__item who-we-are__item-1" style="cursor: pointer">
                <!--                <svg data-aos="zoom-in" width="150" height="162" viewBox="0 0 150 121" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path class="who-we-are-circle" d="M120.625 76.0078L96.8776 99.7637L94.5388 102.103L91.6603 104.983L81.0459 115.601C73.8497 122.8 62.3357 122.8 55.1395 115.601L41.1068 101.563L39.4877 99.9437L38.4082 98.8638L37.6886 98.144L16.2798 76.7277C15.5602 76.0078 15.0205 75.2879 14.4808 74.5681C13.9411 73.8482 13.5813 73.3083 13.2215 72.5884C12.8616 72.0485 12.6817 71.5086 12.5018 71.1487C9.62333 64.4898 10.8827 56.2113 16.2798 50.8122L34.2704 32.8153L37.5087 29.5759L37.8685 29.216L48.1231 18.9577L55.6792 11.3991C57.838 9.23944 60.3567 7.79969 63.0553 6.89984C64.8544 6.35994 66.8333 6 68.8123 6C70.9712 6 73.13 6.35994 75.109 7.07982C77.0879 7.79969 78.887 8.8795 80.6861 10.3193C81.0459 10.6792 81.4057 10.8592 81.7655 11.2191L97.4173 26.8764L98.3168 27.7762L107.132 36.5947L109.651 39.1142L111.81 41.2739L120.445 49.9124C127.821 57.2911 127.821 68.989 120.625 76.0078Z"-->
                <!--                          fill="#B9DCF2"/>-->
                <!--                    <circle class="who-we-are-circle" cx="11" cy="114" r="7" fill="#F2F4F2"/>-->
                <!--                    <circle class="who-we-are-circle" cx="138" cy="12" r="12" fill="#F2F4F2"/>-->
                <!--                    <circle class="who-we-are-circle" cx="26" cy="29" r="23.5" stroke="white" stroke-width="5"/>-->
                <!--                </svg>-->
                <!--                <img data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-icon-1.svg" alt="">-->
                <div data-aos="zoom-in" class="who-we-are-icon1 who-we-are-icon" ></div>
                <h4 data-aos="zoom-in"><?php the_field( 'about_us_block_1_title' ); ?></h4>
                <p data-aos="zoom-in"><?php the_field( 'about_us_block_1_description_path_1' ); ?><span><?php the_field( 'about_us_block_1_description_text_bold' ); ?></span><?php the_field( 'about_us_block_1_description_path_2' ); ?> </p>
            </div>
            <div class="who-we-are__item who-we-are__item-2" style="cursor: pointer">
                <!--                <svg data-aos="zoom-in" width="127" height="162" viewBox="0 0 127 162" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M117.625 106.008L93.8776 129.764L91.5388 132.103L88.6603 134.983L78.0459 145.601C70.8497 152.8 59.3357 152.8 52.1395 145.601L38.1068 131.563L36.4877 129.944L35.4082 128.864L34.6886 128.144L13.2798 106.728C12.5602 106.008 12.0205 105.288 11.4808 104.568C10.9411 103.848 10.5813 103.308 10.2215 102.588C9.86165 102.049 9.68172 101.509 9.50182 101.149C6.62333 94.4898 7.88268 86.2113 13.2798 80.8122L31.2704 62.8153L34.5087 59.5759L34.8685 59.216L45.1231 48.9577L52.6792 41.3991C54.838 39.2394 57.3567 37.7997 60.0553 36.8998C61.8544 36.3599 63.8333 36 65.8123 36C67.9712 36 70.13 36.3599 72.109 37.0798C74.0879 37.7997 75.887 38.8795 77.6861 40.3193C78.0459 40.6792 78.4057 40.8592 78.7655 41.2191L94.4173 56.8764L95.3168 57.7762L104.132 66.5947L106.651 69.1142L108.81 71.2739L117.445 79.9124C124.821 87.2911 124.821 98.989 117.625 106.008Z"-->
                <!--                          fill="#FBEADF"/>-->
                <!--                    <circle cx="116" cy="40" r="11" fill="#F2F4F2"/>-->
                <!--                    <circle cx="9" cy="153" r="9" fill="#F2F4F2"/>-->
                <!--                    <path d="M80.5904 32.9098L80.579 32.9209L80.5678 32.9321L68.7973 44.7067L67.6381 45.8663L66.2114 47.2936L60.9503 52.5565C58.3599 55.1478 54.2363 55.1478 51.6459 52.5565L44.6906 45.5987L42.9455 47.3432L44.6906 45.5987L43.8881 44.7959L43.888 44.7959L43.3531 44.2607L43.353 44.2607L42.9963 43.9039L42.9963 43.9039L32.385 33.2889C32.1707 33.0745 32.001 32.8537 31.7255 32.4862C31.5088 32.1972 31.4246 32.0617 31.3373 31.887L31.2677 31.7478L31.1887 31.6292C31.1853 31.6227 31.1777 31.6075 31.1653 31.5802C31.1527 31.5525 31.1428 31.5297 31.1262 31.4913C31.12 31.4772 31.113 31.4609 31.1045 31.4415C31.0866 31.4005 31.0569 31.3323 31.0203 31.255C30.0018 28.8494 30.4866 25.8778 32.385 23.9787L41.3021 15.0585L42.9072 13.4529L42.9072 13.4529L43.0855 13.2745L43.0855 13.2745L48.1682 8.18999L51.9134 4.44351C52.6691 3.68755 53.5578 3.16781 54.5565 2.82961C55.2569 2.62259 55.979 2.5 56.6548 2.5C57.4533 2.5 58.2323 2.63402 58.9211 2.8846C59.569 3.12026 60.2031 3.483 60.9015 4.03205C61.0704 4.18658 61.2207 4.29893 61.2922 4.35239C61.2977 4.35647 61.3027 4.3602 61.3072 4.36358C61.3231 4.37554 61.3353 4.38479 61.3444 4.39169L69.0648 12.1149L69.5107 12.5609L71.2788 10.7934L69.5107 12.5609L73.8801 16.9318L75.1284 18.1806L76.8965 16.4131L75.1284 18.1806L76.1985 19.251L80.4787 23.5327C83.1874 26.2424 83.1227 30.4399 80.5904 32.9098ZM61.307 4.35431L61.3078 4.35517C61.3076 4.35489 61.3073 4.3546 61.307 4.35431L63.0666 2.59531L61.307 4.35431Z"-->
                <!--                          stroke="white" stroke-width="5"/>-->
                <!--                </svg>-->
                <!--                <img data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-icon-2.svg" alt="">-->
                <div data-aos="zoom-in" class="who-we-are-icon2 who-we-are-icon"></div>
                <h4 data-aos="zoom-in"><?php the_field( 'about_us_block_2_title' ); ?></h4>
                <p data-aos="zoom-in"><?php the_field( 'about_us_block_2_description_path_1' ); ?> <span><?php the_field( 'about_us_block_2_description_text_bold' ); ?></span>. <?php the_field( 'about_us_block_2_description_path_2' ); ?></p>
            </div>
            <div class="who-we-are__item who-we-are__item-3" style="cursor: pointer">
                <!--                <svg data-aos="zoom-in" width="137" height="162" viewBox="0 0 137 154" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M109.625 101.008L85.8776 124.764L83.5388 127.103L80.6603 129.983L70.0459 140.601C62.8497 147.8 51.3357 147.8 44.1395 140.601L30.1068 126.563L28.4877 124.944L27.4082 123.864L26.6886 123.144L5.27985 101.728C4.56022 101.008 4.02051 100.288 3.48079 99.5681C2.94107 98.8482 2.58127 98.3083 2.22146 97.5884C1.86165 97.0485 1.68172 96.5086 1.50182 96.1487C-1.37667 89.4898 -0.117322 81.2113 5.27985 75.8122L23.2704 57.8153L26.5087 54.5759L26.8685 54.216L37.1231 43.9577L44.6792 36.3991C46.838 34.2394 49.3567 32.7997 52.0553 31.8998C53.8544 31.3599 55.8333 31 57.8123 31C59.9712 31 62.13 31.3599 64.109 32.0798C66.0879 32.7997 67.887 33.8795 69.6861 35.3193C70.0459 35.6792 70.4057 35.8592 70.7655 36.2191L86.4173 51.8764L87.3168 52.7762L96.1322 61.5947L98.6509 64.1142L100.81 66.2739L109.445 74.9124C116.821 82.2911 116.821 93.989 109.625 101.008Z"-->
                <!--                          fill="#FFF9C0"/>-->
                <!--                    <circle cx="12" cy="145" r="9" fill="#F2F4F2"/>-->
                <!--                    <circle cx="87" cy="6" r="6" fill="#0085FF"/>-->
                <!--                    <circle cx="115" cy="86" r="19.5" stroke="white" stroke-width="5"/>-->
                <!--                </svg>-->

                <!--                <img data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-icon-3.svg" alt="">-->
                <div data-aos="zoom-in" class="who-we-are-icon3 who-we-are-icon"></div>
                <h4 data-aos="zoom-in"><?php the_field( 'about_us_block_3_title' ); ?></h4>
                <p data-aos="zoom-in"><span><?php the_field( 'about_us_block_3_description_text_bold' ); ?></span> <?php the_field( 'about_us_block_3_description_path_1' ); ?>
                </p>
            </div>
        </div>
        <div data-aos="zoom-in" class="who-we-are_wrap-btn">
            <!--            <a href="" class="btn btn-red who-we-are_btn effect01" >Узнать больше</a>-->
            <span class="wrap-btn-hover-1">
                <span class="json-anim-btn json-anim-left-red3"></span>
            <a href="<?php the_field( 'about_us_btn_link' ); ?>" class="btn btn-red who-we-are_btn effect01"><?php the_field( 'about_us_btn_name' ); ?></a>
            <span class="json-anim-btn json-anim-right-red3"></span>
            </span>

        </div>
        <div data-aos="zoom-in" class="who-we-are__icons icon-1 position-absolute"></div>
        <div data-aos="zoom-in" class="who-we-are__icons icon-2 position-absolute"></div>
        <div data-aos="zoom-in" class="who-we-are__icons icon-3 position-absolute"></div>
        <div data-aos="zoom-in" class="who-we-are__icons icon-4 position-absolute"></div>
    </div>
</section>

<section class="our-games">

    <div class="our-games__bottom our-games__bottom-hp position-relative">


        <div data-aos="zoom-in" class="position-absolute cannon" id="cannon"></div>
        <script>
            new spine.SpinePlayer("cannon", {
                jsonUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/sa_anim_lamptree_1/sa_anim_lamptree_1.json",
                atlasUrl: "/wp-content/themes/glera/assets/animations/home/Json_optimized/sa_anim_lamptree_1/sa_anim_lamptree_1.atlas",
                showControls: false,
                alpha: true, // Enable player translucency
                backgroundColor: "#00000000",
                premultiplyAlpha: true,
                premultipliedAlpha: true
            });
        </script>
        <!--        <img  class="position-absolute our-games__bottom-blue mob-show"-->
        <!--             src="/wp-content/themes/glera/assets/images/cap.png" alt="">-->
        <div id="corsar" class="position-absolute our-games__bottom-blue"></div>
        <div  class="position-absolute our-games-bg-white w-100"></div>
        <script class="storm"></script>
        <div class="our-games__explorer-top our-games__explorer-top-hp position-absolute our-games__z-index">
            <!--            <img class="" data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/who-we-are-albert_fear.svg" alt="">-->
            <div data-aos="zoom-in" data-aos-delay="1400"
                 class="our-games__cloud-wrap-top our-games__cloud-wrap-top-hp position-absolute">
                <!--            <img class="position-absolute" src="/wp-content/themes/glera/assets/images/cloud.svg" alt="">-->
                <p><?php the_field( 'about_us_popup_text' ); ?> <a class="underline"
                                                                                               href="/jobs/"><?php the_field( 'about_us_popup_text_link_here' ); ?></a></p>
            </div>
        </div>
        <div class="our-games__wrap-line position-relative"></div>
        <!--        <img class="geography__bottom-big position-relative" src="/wp-content/themes/glera/assets/images/geography-bg-transparent.svg" alt="">-->
    </div>
    <!--    <img class="position-absolute albert" src="/wp-content/themes/glera/assets/images/who-we-are-albert_fear.svg" alt="">-->

    <div class="container our-games__container position-relative">
        <div data-aos="zoom-in" class="circle circle_1"></div>
        <div data-aos="zoom-in" class="circle circle_2"></div>
        <div data-aos="zoom-in" class="circle circle_3"></div>
        <div data-aos="zoom-in" class="circle circle_4"></div>
        <div data-aos="zoom-in" class="circle circle_5"></div>
        <div data-aos="zoom-in" class="circle circle_6"></div>

        <h2 data-aos="zoom-in" class="our-games__title title-shadow-blue title-h2_blue subtitle"><span
                    class="bg-text bg-red"><?php the_field( 'our_games_title_mobile_path_1' ); ?></span> <?php the_field( 'our_games_title_mobile_path_2' ); ?></h2>
        <div data-aos="zoom-in" class="title-our-games" id="title-our-games"></div>

        <div data-aos="zoom-in" class="title-gaegu text-red our-games__gaegu position-absolute">
            <span class="title-gaegu__text"><?php the_field( 'our_games_flagship_text' ); ?></span>
            <img
                    class="position-absolute stone"
                    src="/wp-content/themes/glera/assets/images/Homepage2х/runa_1.png"
                    alt=""><img class="position-absolute arrow"
                                src="/wp-content/themes/glera/assets/images/arrow-red.svg"
                                alt=""></div>
    </div>
    <div data-aos="zoom-in" class="container-fluid our-games__container-fluid">
        <div class="our-games__json-wrap ">
            <!--            <img src="/wp-content/themes/glera/assets/images/our-games-json-top.svg" alt="">-->
            <div class="mahjong__animation margin-center position-relative">
                <!--                <div data-aos="zoom-in" class="mahjong__pic-1 mahjong__pic position-absolute"></div>-->
                <img data-aos="zoom-in" class="mahjong__pic-1 mahjong__pic position-absolute"
                     src="/wp-content/themes/glera/assets/images/our-games-icon2.svg" alt="">
                <img data-aos="zoom-in" class="mahjong__pic-2 mahjong__pic position-absolute"
                     src="/wp-content/themes/glera/assets/images/Homepage2х/our-games-icon1.png" alt="">
                <!--                <div data-aos="zoom-in" class="mahjong__pic-2 mahjong__pic position-absolute"></div>-->

                <div data-aos="zoom-in" class="wrap-line-mahjong">
                    <svg class="position-center our-games__line-bg" width="2585" height="391" style="opacity: 0"
                         viewBox="0 0 2585 391" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="wow2" opacity="0.3"
                              d="M2 389C94.6582 304.333 346.044 150.2 610.321 211C940.668 287 1134.04 406 1452.3 298C1770.56 190 1789.11 2.00163 2094.19 2C2395 1.99839 2341.28 336.999 2583 329.999"
                              stroke="url(#paint0_linear3)" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                        <defs>
                            <linearGradient id="paint0_linear3" x1="2239.6" y1="96.9347" x2="141.649" y2="46.0031"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF6331"/>
                                <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="1" stop-color="#FF6331"/>
                            </linearGradient>
                        </defs>
                    </svg>

                    <svg class="position-center our-games__line-bg" width="2585" height="514" viewBox="0 0 2585 514"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="wow1" opacity="0.3"
                              d="M2 319C94.6582 234.334 327.179 138.5 589 51.5C913.879 -56.4529 1187.53 20.9974 1452.3 228C1648 381 1759.42 512.002 2064.5 512C2365.3 511.999 2341.28 267 2583 260"
                              stroke="url(#paint0_linear4)" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                        <defs>
                            <linearGradient id="paint0_linear4" x1="2239.6" y1="26.9365" x2="141.645" y2="-23.9951"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF6331"/>
                                <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="1" stop-color="#FF6331"/>
                            </linearGradient>
                        </defs>
                    </svg>

                    <svg class="position-center our-games__line-bg" width="2585" height="520" style="opacity: 0"
                         viewBox="0 0 2585 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="wow3" opacity="0.3"
                              d="M2 217C94.6582 132.334 297.526 222.723 515 392.5C706.5 542 904.694 574.613 1250 392.5C1469 277 1640.42 2.00163 1945.5 2C2246.3 1.99839 2400.5 31 2583 158"
                              stroke="url(#paint0_linear5)" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                        <defs>
                            <linearGradient id="paint0_linear5" x1="2239.6" y1="-75.0625" x2="141.647" y2="-125.994"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF6331"/>
                                <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                                <stop offset="1" stop-color="#FF6331"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <svg class="position-center our-games__back-pic" width="700" height="623" viewBox="0 0 700 623"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <circle class="mahjong-animate-1" opacity="0.4" cx="566" cy="455" r="133.5" stroke="#E7E6E6"/>
                    <circle class="mahjong-animate-2" cx="184.5" cy="236.5" r="184.5" fill="#B9DCF2"/>
                    <circle class="mahjong-animate-3" cx="559" cy="452" r="109" fill="#FBEADF"/>
                    <path d="M66 191.844C66 171.661 79.2037 153.854 98.5163 147.991L526.858 17.9545C556.293 9.01837 586 31.0453 586 61.8074V431.156C586 451.339 572.796 469.146 553.484 475.009L125.142 605.046C95.7066 613.982 66 591.955 66 561.193L66 191.844Z"
                          fill="url(#paint0_linear7)"/>
                    <defs>
                        <linearGradient id="paint0_linear7" x1="521.138" y1="0.619005" x2="64.8493" y2="652.245"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#CDF2EE"/>
                            <stop offset="1" stop-color="#FFE6CD"/>
                        </linearGradient>
                    </defs>
                </svg>


                <div class="margin-center our-games-girl" id="player-container2"></div>

                <script class="restored"></script>

                <img data-aos="zoom-in" class="position-relative mahjong__title-pic"
                     src="/wp-content/themes/glera/assets/images/games/logo_mtq_en 1.svg" alt="">
                <img class="mahjong__pic-mob" src="/wp-content/themes/glera/assets/images/Homepage2х/madjong_mobile.png"
                     alt="">
            </div>
        </div>
    </div>
    <svg class="position-absolute our-games__bg-slider-things" width="1720" height="881" viewBox="0 0 1720 881"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="our-games-line-drow" opacity="0.2"
              d="M1787 173.595C1472 154.095 1101 107.596 1161 21.5795C1221 -64.437 1336.5 149.084 876 348.084C516.973 503.233 78.5 423.751 -94 348.084"
              stroke="url(#paint0_linear2)" stroke-width="3"/>
        <path class="our-games-bg-thing"
              d="M1666.59 195.91L1666.58 195.921L1666.57 195.932L1654.8 207.707L1653.64 208.866L1652.21 210.294L1646.95 215.556C1644.36 218.148 1640.24 218.148 1637.65 215.556L1630.69 208.599L1628.95 210.343L1630.69 208.599L1629.89 207.796L1629.89 207.796L1629.35 207.261L1629.35 207.261L1629 206.904L1629 206.904L1618.39 196.289C1618.17 196.074 1618 195.854 1617.73 195.486C1617.51 195.197 1617.42 195.062 1617.34 194.887L1617.27 194.748L1617.19 194.629C1617.19 194.623 1617.18 194.607 1617.17 194.58C1617.15 194.552 1617.14 194.53 1617.13 194.491C1617.12 194.477 1617.11 194.461 1617.1 194.442C1617.09 194.4 1617.06 194.332 1617.02 194.255C1616 191.849 1616.49 188.878 1618.39 186.979L1627.3 178.059L1628.91 176.453L1628.91 176.453L1629.09 176.274L1629.09 176.274L1634.17 171.19L1637.91 167.444C1638.67 166.688 1639.56 166.168 1640.56 165.83C1641.26 165.623 1641.98 165.5 1642.65 165.5C1643.45 165.5 1644.23 165.634 1644.92 165.885C1645.57 166.12 1646.2 166.483 1646.9 167.032C1647.07 167.187 1647.22 167.299 1647.29 167.352C1647.3 167.356 1647.3 167.36 1647.31 167.364C1647.32 167.376 1647.34 167.385 1647.34 167.392L1655.06 175.115L1655.51 175.561L1657.28 173.793L1655.51 175.561L1659.88 179.932L1661.13 181.181L1662.9 179.413L1661.13 181.181L1662.2 182.251L1666.48 186.533C1669.19 189.242 1669.12 193.44 1666.59 195.91ZM1647.31 167.354L1647.31 167.355C1647.31 167.355 1647.31 167.355 1647.31 167.354L1649.07 165.595L1647.31 167.354Z"
              stroke="#B9DCF2" stroke-width="5"/>
        <circle cx="1006" cy="874" r="7" fill="#FFE874"/>
        <circle cx="1545" cy="509" r="11" fill="#E6EDED"/>
        <path class="our-games-bg-thing"
              d="M194.455 717.979L194.455 717.979L193.934 717.458L193.934 717.458L193.586 717.11L193.586 717.11L193.355 716.879L193.355 716.879L186.467 709.988C186.378 709.899 186.302 709.804 186.12 709.561L184.12 711.061L186.12 709.561C185.997 709.398 185.976 709.356 185.951 709.306L185.881 709.167L185.838 709.103L185.832 709.089L185.819 709.059C185.81 709.038 185.796 709.007 185.781 708.973C185.775 708.96 185.769 708.946 185.762 708.931C185.241 707.683 185.505 706.147 186.467 705.185L192.255 699.395L193.297 698.353L193.297 698.353L193.413 698.237L193.413 698.237L196.712 694.936L199.143 692.505C199.524 692.124 199.975 691.854 200.504 691.673C200.89 691.56 201.268 691.5 201.6 691.5C202.023 691.5 202.427 691.571 202.772 691.697C203.081 691.809 203.406 691.988 203.792 692.289C203.912 692.396 204.015 692.475 204.068 692.515L209.036 697.484L209.325 697.774L212.161 700.611L212.972 701.422L212.972 701.422L213.666 702.116L213.666 702.116L216.445 704.896C217.871 706.322 217.806 708.485 216.525 709.735L216.514 709.746L216.503 709.757L208.862 717.4L208.11 718.153L207.184 719.079L208.816 720.711L207.183 719.079L203.768 722.495C202.429 723.835 200.308 723.835 198.969 722.495L194.455 717.979ZM185.855 709.141C185.855 709.141 185.855 709.14 185.854 709.139C185.855 709.14 185.855 709.141 185.855 709.141ZM204.12 692.554C204.12 692.554 204.119 692.553 204.117 692.551C204.119 692.553 204.12 692.554 204.12 692.554Z"
              stroke="#FFC43A" stroke-width="5"/>
        <defs>
            <linearGradient id="paint0_linear2" x1="1557.5" y1="158.634" x2="-18.5007" y2="418.596"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.240363" stop-color="#C58764"/>
                <stop offset="0.925308" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>

    <div class="container our-games__container position-relative">

        <h3 class="home text-center our-games__h3 position-relative">
            <img data-aos="zoom-in"
                 class="position-absolute our-games__sextant"
                 src="/wp-content/themes/glera/assets/images/Homepage2х/ep8_sextant_preview 2.png" alt="">
            <!--            <div data-aos="zoom-in" class="position-absolute our-games__sextant" id="our-games__booksfly-home"></div>-->
            <!---->
            <!--            <script>-->
            <!--                new spine.SpinePlayer("our-games__booksfly-home", {-->
            <!--                    jsonUrl: "/wp-content/themes/glera/assets/animations/home/sa_anim_book_wings_1/export_json/sa_anim_book_wings_1.json",-->
            <!--                    atlasUrl: "/wp-content/themes/glera/assets/animations/home/sa_anim_book_wings_1/export_json/sa_anim_book_wings_1.atlas",-->
            <!--                    showControls: false,-->
            <!--                    alpha: true, // Enable player translucency-->
            <!--                    backgroundColor: "#00000000",-->
            <!--                    premultiplyAlpha: true,-->
            <!--                    premultipliedAlpha: true-->
            <!--                });-->
            <!--            </script>-->
            <img data-aos="zoom-in" class="position-absolute our-games__telescope"
                 src="/wp-content/themes/glera/assets/images/Homepage2х/ep8_telescope-tube_preview 3.png" alt=""></h3>

        <p data-aos="zoom-in" class="text-center our-games__text position-relative"><?php the_field( 'our_games_description_text' ); ?>
           </p>
        <div data-aos="zoom-in" class="who-we-are_wrap-btn">
            <span class="wrap-btn-hover-2">
                <span class="json-anim-btn json-anim-left-red2"></span>
            <a href="<?php the_field( 'our_games_btn_link' ); ?>" class="btn btn-red who-we-are_btn effect01"><?php the_field( 'our_games_btn_text' ); ?></a>
            <span class="json-anim-btn json-anim-right-red2"></span>
            </span>
        </div>
        <div class="wrap-slider position-relative">
            <div class="multiple-items" data-aos="zoom-in">

	            <?php if ( get_field( 'our_games_slider_slide_1_slide_img' ) ): ?>
                <div class="text-center">
                    <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_1_slide_img' ); ?>"
                         alt="">
                    <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                    <div class="slick-title"><?php the_field( 'our_games_slider_slide_1_title' ); ?></div>
                    <p class="slick-text"><?php the_field( 'our_games_slider_slide_1_description' ); ?></p>
                </div>
	            <?php endif; ?>
                <?php if ( get_field( 'our_games_slider_slide_2_slide_img' ) ): ?>
                <div class="text-center">
                    <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_2_slide_img' ); ?>"
                         alt="">
                    <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                    <div class="slick-title"><?php the_field( 'our_games_slider_slide_2_title' ); ?></div>
                    <p class="slick-text"><?php the_field( 'our_games_slider_slide_2_description' ); ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php if ( get_field( 'our_games_slider_slide_3_slide_img' ) ): ?>
                <div class="text-center">
                    <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_3_slide_img' ); ?>"
                         alt="">
                    <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                    <div class="slick-title"><?php the_field( 'our_games_slider_slide_3_title' ); ?></div>
                    <p class="slick-text"><?php the_field( 'our_games_slider_slide_3_description' ); ?>
                    </p>
                </div>
                <?php endif; ?>
	            <?php if ( get_field( 'our_games_slider_slide_4_slide_img' ) ): ?>
                    <div class="text-center">
                        <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_4_slide_img' ); ?>"
                             alt="">
                        <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                        <div class="slick-title"><?php the_field( 'our_games_slider_slide_4_title' ); ?></div>
                        <p class="slick-text"><?php the_field( 'our_games_slider_slide_4_description' ); ?>
                        </p>
                    </div>
	            <?php endif; ?>
	            <?php if ( get_field( 'our_games_slider_slide_5_slide_img' ) ): ?>
                    <div class="text-center">
                        <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_5_slide_img' ); ?>"
                             alt="">
                        <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                        <div class="slick-title"><?php the_field( 'our_games_slider_slide_5_title' ); ?></div>
                        <p class="slick-text"><?php the_field( 'our_games_slider_slide_5_description' ); ?>
                        </p>
                    </div>
	            <?php endif; ?>
	            <?php if ( get_field( 'our_games_slider_slide_6_slide_img' ) ): ?>
                    <div class="text-center">
                        <img class="slick-img" src="<?php the_field( 'our_games_slider_slide_6_slide_img' ); ?>"
                             alt="">
                        <!--                    <a href="/" class="btn-coming-soon bg-yellow">Coming Soon</a>-->
                        <div class="slick-title"><?php the_field( 'our_games_slider_slide_6_title' ); ?></div>
                        <p class="slick-text"><?php the_field( 'our_games_slider_slide_6_description' ); ?>
                        </p>
                    </div>
	            <?php endif; ?>
            </div>
            <div data-aos="zoom-in" class="controls position-absolute"></div>
        </div>
        <div class="our-games__explorer position-absolute">
            <img data-aos="zoom-in" class="" src="/wp-content/themes/glera/assets/images/Homepage2х/explorer 2.png"
                 alt="">
            <div data-aos="zoom-in" data-aos-delay="1400" class="our-games__cloud-wrap position-absolute">
                <!--            <img class="position-absolute" src="/wp-content/themes/glera/assets/images/cloud.svg" alt="">-->
                <p><?php the_field( 'our_games_tooltip_text' ); ?>
                    <a class="underline" href="<?php the_field( 'our_games_tooltip_link' ); ?>"><?php the_field( 'our_games_tooltip_text_link' ); ?></a></p>
            </div>
        </div>
    </div>

    <img data-aos="zoom-in" class="position-absolute our-games__meta"
         src="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final 2.png" alt="">
</section>

<section class="geography">
    <div class="container">
        <div class="position-relative">
            <h2 data-aos="zoom-in" class="geography__title position-relative title-shadow-red title-h2_red subtitle">
	            <?php the_field( 'geography_title_mobile_path_1' ); ?> <span class="bg-text  position-relative"> <?php the_field( 'geography_title_mobile_path_2' ); ?></span>
            </h2>
            <img data-aos="zoom-in" class="position-absolute mini-maps"
                 src="/wp-content/themes/glera/assets/images/Homepage2х/wall_decor_base_873_484 1.png" alt="">
        </div>

        <div data-aos="zoom-in" class="title-geography" id="title-geography"></div>

        <p data-aos="zoom-in" class="geography__description"><?php the_field( 'geography_description' ); ?></p>

        <div class="geography__map-wrapper text-center position-relative">
            <!--            <img class="max-width" src="/wp-content/themes/glera/assets/images/map-georraphi.svg" alt="">-->
            <div class="map-init position-center" id="map-init"></div>
            <!--            <img data-aos="zoom-in" class="position-absolute cat" src="/wp-content/themes/glera/assets/images/cat.svg" alt="">-->
            <img data-aos="zoom-in" class="position-absolute boatanchor"
                 src="/wp-content/themes/glera/assets/images/decor_boatanchor.svg"
                 alt="">
            <!--            <img data-aos="zoom-in" class="position-absolute island" src="/wp-content/themes/glera/assets/images/decor_island.svg" alt="">-->
            <!--            <img data-aos="zoom-in" class="position-absolute ufo" src="/wp-content/themes/glera/assets/images/ufo.svg" alt="">-->
        </div>
    </div>
    <svg class="position-absolute geography__oll-bg-things" width="1529" height="1105" viewBox="0 0 1529 1105"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="1516" cy="1092" r="13" fill="#F2F4F2"/>
        <circle cx="1505" cy="875" r="11" fill="#F2F4F2"/>
        <circle cx="1207" cy="116" r="9" fill="#F2F4F2"/>
        <circle cx="200" cy="45" r="9" fill="#FBEADF"/>
        <circle cx="7.5" cy="426.5" r="7.5" fill="#FBEADF"/>
        <path d="M1386.59 32.9098L1386.58 32.9209L1386.57 32.9321L1374.8 44.7067L1373.64 45.8663L1372.21 47.2936L1366.95 52.5565C1364.36 55.1478 1360.24 55.1478 1357.65 52.5565L1350.69 45.5987L1348.95 47.3432L1350.69 45.5987L1349.89 44.7959L1349.89 44.7959L1349.35 44.2607L1349.35 44.2607L1349 43.9039L1349 43.9039L1338.39 33.2889C1338.17 33.0745 1338 32.8537 1337.73 32.4862C1337.51 32.1972 1337.42 32.0617 1337.34 31.887L1337.27 31.7478L1337.19 31.6292C1337.19 31.6227 1337.18 31.6075 1337.17 31.5802C1337.15 31.5525 1337.14 31.5297 1337.13 31.4913C1337.12 31.4772 1337.11 31.4609 1337.1 31.4415C1337.09 31.4005 1337.06 31.3323 1337.02 31.255C1336 28.8494 1336.49 25.8778 1338.39 23.9787L1347.3 15.0585L1348.91 13.4529L1348.91 13.4529L1349.09 13.2745L1349.09 13.2745L1354.17 8.18999L1357.91 4.44351C1358.67 3.68755 1359.56 3.16781 1360.56 2.82961C1361.26 2.62259 1361.98 2.5 1362.65 2.5C1363.45 2.5 1364.23 2.63402 1364.92 2.8846C1365.57 3.12026 1366.2 3.483 1366.9 4.03205C1367.07 4.18658 1367.22 4.29893 1367.29 4.35239C1367.3 4.35647 1367.3 4.3602 1367.31 4.36358C1367.32 4.37554 1367.34 4.38479 1367.34 4.39169L1375.06 12.1149L1375.51 12.5609L1377.28 10.7934L1375.51 12.5609L1379.88 16.9318L1381.13 18.1806L1382.9 16.4131L1381.13 18.1806L1382.2 19.251L1386.48 23.5327C1389.19 26.2424 1389.12 30.4399 1386.59 32.9098ZM1367.31 4.35431L1367.31 4.35517C1367.31 4.35489 1367.31 4.3546 1367.31 4.35431L1369.07 2.59531L1367.31 4.35431Z"
              stroke="#B9DCF2" stroke-width="5"/>
        <path d="M1100.45 1017.98L1100.45 1017.98L1099.93 1017.46L1099.93 1017.46L1099.59 1017.11L1099.59 1017.11L1099.35 1016.88L1099.35 1016.88L1092.47 1009.99C1092.38 1009.9 1092.3 1009.8 1092.12 1009.56L1090.12 1011.06L1092.12 1009.56C1092 1009.4 1091.98 1009.36 1091.95 1009.31L1091.88 1009.17L1091.84 1009.1L1091.83 1009.09L1091.82 1009.06C1091.81 1009.04 1091.8 1009.01 1091.78 1008.97C1091.78 1008.96 1091.77 1008.95 1091.76 1008.93C1091.24 1007.68 1091.51 1006.15 1092.47 1005.19L1098.26 999.395L1099.3 998.353L1099.3 998.353L1099.41 998.237L1099.41 998.237L1102.71 994.936L1105.14 992.505C1105.52 992.124 1105.98 991.854 1106.5 991.673C1106.89 991.56 1107.27 991.5 1107.6 991.5C1108.02 991.5 1108.43 991.571 1108.77 991.697C1109.08 991.809 1109.41 991.988 1109.79 992.289C1109.91 992.396 1110.02 992.475 1110.07 992.515L1115.04 997.484L1115.33 997.774L1118.16 1000.61L1118.97 1001.42L1118.97 1001.42L1119.67 1002.12L1119.67 1002.12L1122.44 1004.9C1123.87 1006.32 1123.81 1008.49 1122.53 1009.73L1122.51 1009.75L1122.5 1009.76L1114.86 1017.4L1114.11 1018.15L1113.18 1019.08L1114.82 1020.71L1113.18 1019.08L1109.77 1022.5C1108.43 1023.83 1106.31 1023.83 1104.97 1022.5L1100.45 1017.98ZM1091.86 1009.14C1091.86 1009.14 1091.85 1009.14 1091.85 1009.14C1091.85 1009.14 1091.86 1009.14 1091.86 1009.14ZM1110.12 992.554C1110.12 992.554 1110.12 992.553 1110.12 992.551C1110.12 992.553 1110.12 992.554 1110.12 992.554Z"
              stroke="#FFC43A" stroke-width="5"/>
    </svg>
    <!--    <img class="position-absolute geography__oll-bg-things" src="/wp-content/themes/glera/assets/images/oll-bg-things-gegraphy.svg" alt="">-->

    <!--    <img data-aos="zoom-in" class="position-absolute bg-left" src="/wp-content/themes/glera/assets/images/geography-left-bg.svg" alt="">-->
    <!--    <img data-aos="zoom-in" class="position-absolute bg-right" src="/wp-content/themes/glera/assets/images/geography-right-bg.svg" alt="">-->

    <img class="position-absolute bg-left" data-aos="zoom-in"
         src="/wp-content/themes/glera/assets/images/maps-left-circle.svg" alt="">
    <img class="position-absolute bg-right" data-aos="zoom-in"
         src="/wp-content/themes/glera/assets/images/right-circle.svg" alt="">


</section>

<section class="our-news">
    <div class="geography__bottom geography__bottom-hp position-relative">
        <!--        <img class="position-absolute geography__bottom-blue"-->
        <!--             src="/wp-content/themes/glera/assets/images/geography-blue-bg.svg" alt="">-->
        <!--        <div id="corsar" class="position-absolute geography__bottom-blue"></div>-->
        <div class="position-absolute geography__bottom-bg-white w-100"></div>
        <div class="position-absolute geography__bottom-blue hopkins" id="hopkins"></div>

        <script class="hopkinsjs"></script>
        <div class="geography__explorer position-absolute">
            <!--            <img data-aos="zoom-in" class="" src="/wp-content/themes/glera/assets/images/Alex 1.svg" alt="">-->
            <div data-aos="zoom-in" data-aos-delay="1400" class="geography__cloud-wrap position-absolute">
                <!--            <img class="position-absolute" src="/wp-content/themes/glera/assets/images/cloud.svg" alt="">-->
                <p><?php the_field( 'geography_tooltip_text' ); ?> </p>
            </div>
        </div>

        <div class="geography__wrap-line position-relative"></div>
        <!--        <img class="geography__bottom-big position-relative" src="/wp-content/themes/glera/assets/images/geography-bg-transparent.svg" alt="">-->
    </div>
    <svg class="position-absolute our-news__bg" width="1615" height="1201" viewBox="0 0 1615 1201" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path id="our-news__bg-line" opacity="0.2"
              d="M1 312.539C316 293.039 413.5 201.43 358.5 169.984C303.5 138.539 183 297.489 643.5 496.489C1002.53 651.638 1441 572.155 1613.5 496.489"
              stroke="url(#paint0_linear)" stroke-width="4"/>
        <circle class="our-news-circle-bg" opacity="0.2" cx="1112" cy="340" r="7" fill="#B008B9"/>
        <circle class=our-news-circle-bg" cx="1388" cy="210" r="10" fill="#F74C47"/>
        <circle class=our-news-circle-bg" cx="614" cy="10" r="10" fill="#B9DCF2"/>
        <circle class=our-news-circle-bg" cx="1233.5" cy="1182.5" r="13.5" fill="#FBEADF"/>
        <circle class=our-news-circle-bg" cx="185.5" cy="1165.5" r="7.5" fill="#FBEADF"/>
        <circle class=our-news-circle-bg" cx="721.5" cy="1132.5" r="7.5" fill="#B9DCF2"/>
        <circle class=our-news-circle-bg" cx="1584.5" cy="1117.5" r="7.5" fill="#FBEADF"/>
        <path class="our-news__bg--path"
              d="M431.455 1192.98L431.455 1192.98L430.934 1192.46L430.934 1192.46L430.586 1192.11L430.586 1192.11L430.355 1191.88L430.355 1191.88L423.467 1184.99C423.378 1184.9 423.302 1184.8 423.12 1184.56L421.12 1186.06L423.12 1184.56C422.997 1184.4 422.976 1184.36 422.951 1184.31L422.881 1184.17L422.838 1184.1L422.832 1184.09L422.819 1184.06C422.81 1184.04 422.796 1184.01 422.781 1183.97C422.775 1183.96 422.769 1183.95 422.762 1183.93C422.241 1182.68 422.505 1181.15 423.467 1180.19L429.255 1174.4L430.297 1173.35L430.297 1173.35L430.413 1173.24L430.413 1173.24L433.712 1169.94L436.143 1167.5C436.524 1167.12 436.975 1166.85 437.504 1166.67C437.89 1166.56 438.268 1166.5 438.6 1166.5C439.023 1166.5 439.427 1166.57 439.772 1166.7C440.081 1166.81 440.406 1166.99 440.792 1167.29C440.912 1167.4 441.015 1167.48 441.068 1167.51L446.036 1172.48L446.325 1172.77L449.161 1175.61L449.972 1176.42L449.972 1176.42L450.666 1177.12L450.666 1177.12L453.445 1179.9C454.871 1181.32 454.806 1183.49 453.525 1184.73L453.514 1184.75L453.503 1184.76L445.862 1192.4L445.11 1193.15L444.184 1194.08L445.816 1195.71L444.183 1194.08L440.768 1197.5C439.429 1198.83 437.308 1198.83 435.969 1197.5L431.455 1192.98ZM422.855 1184.14C422.855 1184.14 422.855 1184.14 422.854 1184.14C422.855 1184.14 422.855 1184.14 422.855 1184.14ZM441.12 1167.55C441.12 1167.55 441.119 1167.55 441.117 1167.55C441.119 1167.55 441.12 1167.55 441.12 1167.55Z"
              stroke="#FFC43A" stroke-width="5"/>
        <defs>
            <linearGradient id="paint0_linear" x1="-38" y1="307.039" x2="1538" y2="567" gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.240363" stop-color="#C58764"/>
                <stop offset="0.925308" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>
<!--	--><?php //get_template_part('template-parts/footer-corousel/resent-post'); ?>
<!--    <div class="container our-news__container">-->
<!--        <img data-aos="zoom-in" class="position-absolute our-news__house" src="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final 1.png" alt="">-->
<!--        <h2 data-aos="zoom-in" class="our-news__title our-news__title-hp title-shadow-red title-h2_red subtitle"><span class="text-middle-blue">Наши</span> Новости</h2>-->
<!--        <div data-aos="zoom-in" class="title-our-news" id="title-our-news"></div>-->
<!--        <div class="our-news__slider-wrap position-relative">-->
<!--            <div class="our-news__slider slick-slider">-->
<!--                <div class="our-news__slider-item first position-relative">-->
<!--                    <div class="slick-img">-->
<!--                        <img src="wp-content/themes/glera/assets/images/Group 46779.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="slick-title">Glera на SkillsUp</div>-->
<!--                    <p class="slick-text">В рамках онлайн ивента SkillsUp - Ксения Валпуцкая и Кристина Колесникова-->
<!--                        делились своим опытом в создании персонажей, а также рассказывали о том, как построить карьеру-->
<!--                        художника в геймдеве.</p>-->
<!--                </div>-->
<!--                <div class="our-news__slider-item">-->
<!--                    <div class="slick-img">-->
<!--                        <img src="/wp-content/themes/glera/assets/images/slide-2-home.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="slick-title">Летний ивент в Вильнюсе</div>-->
<!--                    <p class="slick-text">Этим летом в Вильнюсе было жарко! Вейкборд, гольф, огненное шоу, прекрасная-->
<!--                        еда и танцы до упаду. Это был незабываемый вечер в компании замечательных коллег!</p>-->
<!--                </div>-->
<!--                <div class="our-news__slider-item">-->
<!--                    <div class="slick-img">-->
<!--                        <img src="wp-content/themes/glera/assets/images/Group 46778.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="slick-title">Летний сбор в Минске</div>-->
<!--                    <p class="slick-text">В Минске мы собрались за городом, где отлично проверили время в кругу наших-->
<!--                        весёлых коллег: играли в игры, общались и наслаждались тёплым летним днём!</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div data-aos="zoom-in" id="controls-news" class="controls-news position-absolute aos-init aos-animate"></div>-->
<!--        </div>-->
<!--        <div data-aos="zoom-in" class="who-we-are_wrap-btn position-relative">-->
<!--            <span class="wrap-btn-hover-3">-->
<!--                <span class="json-anim-btn json-anim-left-red"></span>-->
<!--            <a href="jobs/" class="btn btn-red who-we-are_btn effect01">посмотреть вакансии</a>-->
<!--            <span class="json-anim-btn json-anim-right-red"></span>-->
<!--            </span>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--    <div data-aos="zoom-in" class="who-we-are_wrap-btn position-relative">-->
<!--            <span class="wrap-btn-hover-3">-->
<!--                <span class="json-anim-btn json-anim-left-red"></span>-->
<!--            <a href="/jobs/" class="btn btn-red who-we-are_btn effect01">посмотреть вакансии</a>-->
<!--            <span class="json-anim-btn json-anim-right-red"></span>-->
<!--            </span>-->
<!---->
<!--    </div>-->
    <div class="container our-news__container">
        <picture data-aos="zoom-in" class="position-absolute our-news__house">
            <source srcset="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final-1.png" media="(max-width: 991.98px)">
            <img src="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final 1.png" alt="" media="(min-width: 992px)">
        </picture>
        <h2 data-aos="zoom-in" class="our-news__title our-news__title-hp title-shadow-red title-h2_red subtitle"><span
                    class="text-middle-blue"><?php the_field( 'our_news_title_mobile_path_1' ); ?></span> <?php the_field( 'our_news_title_mobile_path_2' ); ?></h2>
        <div data-aos="zoom-in" class="title-our-news" id="title-our-news"></div>
        <div class="our-news__slide1r-wrap position-relative">
			<?php echo do_shortcode('[recent_post_carousel design="design-1"]'); ?>
            <div data-aos="zoom-in" id="controls-news" class="controls-news position-absolute"></div>
        </div>
    </div>
</section>

<?php get_footer() ?>

