<?php
/* Template Name: About Us Page */

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
            let titleHP = document.querySelector('.title-page-about-anim');
            let path2 = '<?php the_field( 'title_top_json' ); ?>';
            let animDataAbout2 = {
                name: 'AnimationAbout2',
                container: titleHP,
                renderer: 'svg',
                autoplay: true,
                loop: true,
                rendererSettings: {
                    progressiveLoad:false
                },
                path: path2
            };
            bodymovin.loadAnimation(animDataAbout2);

            // subtitle
            let gleraOurOffice = document.querySelector('.title-our-office');
            let gleraTimeTravel = document.querySelector('.title-time-travel');
            let gleraValues = document.querySelector('.title-values');
            let geography = document.querySelector('.title-geography');

            let dataGleraOurOffice = '<?php the_field( 'our_office_title_json' ); ?>';
            let dateTimeTravel = '<?php the_field( 'time_travel_json_link' ); ?>';
            let dateValues = '<?php the_field( 'glera_values_title_json' ); ?>';
            let dateGeography = '<?php the_field( 'geography_glera_title_json' ); ?>';

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

            let TitleOurOffice = {
                name: 'dataOurNews',
                container: gleraOurOffice,
                renderer: 'svg',
                autoplay: true,
                imagePreloader: '',
                loop: true,
                rendererSettings: {
                    progressiveLoad: true
                },
                path: dataGleraOurOffice
            };
            let TitleTimeTravel = {
                name: 'dateTimeTravel',
                container: gleraTimeTravel,
                renderer: 'svg',
                autoplay: true,
                imagePreloader: '',
                loop: true,
                rendererSettings: {
                    progressiveLoad: true
                },
                path: dateTimeTravel
            };
            let TitleValues = {
                name: 'gleraValues',
                container: gleraValues,
                renderer: 'svg',
                autoplay: true,
                imagePreloader: '',
                loop: true,
                rendererSettings: {
                    progressiveLoad: true
                },
                path: dateValues
            };

            //Sub title
            bodymovin.loadAnimation(TitleOurOffice);
            bodymovin.loadAnimation(TitleTimeTravel);
            bodymovin.loadAnimation(TitleValues);
            bodymovin.loadAnimation(geographyTitle);
        })
    </script>
    <section class="glera-story glera-story-a section-top">

        <svg id="circle-big" class="glera-jobs__bg-top-cirle position-absolute glera-story__bg-big circle-big" width="1474"
             height="1361"
             viewBox="0 0 1474 1361" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="737" cy="680.5" rx="737" ry="680.5" fill="#FFECA8"/>
            <path opacity="0.3"
                  d="M1450 688C1450 1043.52 1137.65 1332 752 1332C366.351 1332 54 1043.52 54 688C54 332.477 366.351 44 752 44C1137.65 44 1450 332.477 1450 688Z"
                  stroke="white" stroke-width="4"/>
            <ellipse id="ellipse-violet" cx="749" cy="687.5" rx="654" ry="603.5" style="transform-origin: right top"
                     fill="#C2B3FB"/>
            <rect class="weel" opacity="0.2" x="674.528" y="906.89" width="19.7093" height="19.7093" rx="6"
                  transform="rotate(-29.6591 674.528 906.89)" fill="#FAFBF9"/>
        </svg>
        <div class="container glera-story__container">
            <img id="energy-pic" class="position-absolute glera-story__energy-pic opacity-0"
                 src="/wp-content/themes/glera/assets/images/about/icon_energy.svg" alt="">
            <div class="glera-story__grid">
                <div class="glera-story__title">
                    <div class="wrap-title-page position-relative">
                        <div class="glera-story__bg-things position-absolute"></div>
                        <div class="glera-story__bg-thing2 position-absolute"></div>
                        <h1 class="position-relative title-page split-text subtitle" id="split"> <?php the_field( 'top_title_mob_path_1' ); ?><span><?php the_field( 'top_title_mob_path_2' ); ?></span>
                        </h1>
                        <div class="title-fade-about"><div class="title-page-about-anim"></div></div>
                    </div>
                    <div class="glera-story__cloud position-relative">
                        <img class="position-absolute"
                             src="/wp-content/themes/glera/assets/images/about/glera-story-cloud.svg" alt=""><span
                                class="text-red"><?php the_field( 'top_tooltip_text_red' ); ?></span> <?php the_field( 'top_tooltip_text' ); ?>
                        <!--                    <div class="glera-story__text-red text-red">Игры, в которые играют миллионы!</div>-->
                    </div>

                </div>
                <div class="glera-story__video-wrap">
                    <div class="glera-story__video glera-story__video-top-about position-relative">
                        <video video autoplay loop muted playsinline webkit-playinginline class="lozad" data-poster="/wp-content/themes/glera/assets/images/poster-video.jpg">
                            <source data-src="/wp-content/themes/glera/assets/video/About Us Video/Главное.mp4"
                                    type="video/mp4">
                            <!--                        <source src="/wp-content/themes/glera/assets/video/img-9070_6mfqcyLx_1.webm" type='video/webm'>-->
                        </video>
                        <img class="position-absolute glera-story__smoll-pic video-pic-top"
                             src="/wp-content/themes/glera/assets/images/about/About Us (1) (1).png" alt="">
                        <img class="position-absolute glera-story__video-things glera-story__video-things-m"
                             src="/wp-content/themes/glera/assets/images/about/video-thing.svg" alt="">
                        <!--                    <img class="position-absolute glera-story__video-circle"-->
                        <!--                         src="/wp-content/themes/glera/assets/images/about/circle-video.svg" alt="">-->
                        <svg class="position-absolute glera-story__video-circle" width="150" height="150"
                             viewbox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="80" cy="80" fill="none" r="40" stroke="#F9DBE3" stroke-width="3">
                                <animate attributeName="r" from="32" to="80" dur="1.5s" begin="0s"
                                         repeatCount="indefinite"/>
                                <animate attributeName="opacity" from="1" to="0" dur="1.5s" begin="0s"
                                         repeatCount="indefinite"/>
                            </circle>
                            <circle cx="80" cy="80" fill="#F9DBE3" r="40"/>
                        </svg>
                    </div>
                </div>
            </div>
            <svg class="position-relative arrow-down" width="105" height="139" viewBox="0 0 105 139" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M33.4749 74.1567C34.3098 76.3676 35.7851 78.1227 37.1813 79.9717C43.2794 87.8636 51.1877 93.2996 60.1521 97.4425C66.143 100.238 72.2908 102.428 78.5749 104.379C79.1305 104.558 79.7364 104.715 80.1774 105.182C80.6402 105.7 80.7856 106.175 79.8485 106.221C79.6252 106.258 79.293 106.042 79.3663 106.489C79.5288 107.974 78.4188 108.034 77.4531 108.152C75.6443 108.395 73.8769 107.902 72.1529 107.51C67.2915 106.499 62.415 105.316 57.8182 103.533C53.5101 101.865 49.4816 99.5975 45.5607 97.1642C43.0406 95.621 40.5206 94.0778 38.6834 91.7614C37.4899 90.2435 35.8221 89.2892 34.5999 87.8434C32.2999 85.0093 30 82.1751 28.4126 78.9137C27.0645 76.2067 26.4874 73.3463 26.8256 70.3898C26.931 69.3875 26.655 68.6097 25.954 67.9555C24.111 66.1798 22.347 64.3102 20.6049 62.491C17.7493 59.4781 15.4116 56.0024 13.2469 52.5119C9.75005 46.9055 6.88671 40.9658 5.45647 34.4671C4.63887 30.6342 4.06641 26.815 5.58451 22.9903C5.98552 21.98 6.52397 21.1495 7.58246 20.6925C8.03609 20.4967 8.45424 20.4956 8.80129 20.884C9.22052 21.301 8.88945 21.5037 8.64542 21.908C7.04494 24.5724 7.87404 27.324 8.45804 30.0618C10.028 37.5765 13.6427 44.1485 17.7615 50.503C20.9319 55.3534 24.541 59.8349 28.6898 63.904C29.0151 64.242 29.2327 64.7461 29.8582 64.1172C31.9283 61.8481 34.6364 60.9181 37.5987 60.7156C42.1395 60.4296 46.3664 61.3555 49.4258 65.1176C51.0603 67.1029 50.9788 68.9919 49.6292 71.1293C46.1189 76.7111 39.9709 77.1528 35.0477 74.6139C34.5929 74.3917 34.1886 74.1476 33.7339 73.9254C33.7052 73.9975 33.5757 74.1132 33.4749 74.1567ZM45.0013 71.2137C46.3118 70.6479 45.8124 69.9067 45.3634 69.1438C43.8286 66.6968 41.225 66.2063 38.7152 65.7949C36.9122 65.4969 34.9511 65.3868 33.1147 66.1198C32.4091 66.4244 31.9703 66.7933 32.8157 67.5047C35.2211 69.3365 37.7698 70.8076 40.7629 71.3692C42.22 71.6969 43.6473 71.6786 45.0013 71.2137ZM38.2876 83.9192C36.0953 80.9189 33.7736 78.0343 31.9124 74.8313C33.1332 78.4902 35.6566 81.2877 38.2876 83.9192ZM28.4263 65.0942C26.2213 62.7572 23.9946 60.3698 21.7897 58.0328C23.628 60.7673 25.833 63.1043 28.4263 65.0942Z"
                      fill="#B9DCF2"></path>
                <path d="M85.2748 115.099C88.1696 113.909 91.1812 113.266 94.1493 112.523C94.5743 112.4 95.1585 112.506 95.3441 111.828C95.4793 111.172 94.9524 110.921 94.548 110.677C92.5332 109.334 91.0144 107.478 89.2871 105.832C88.1886 104.811 86.9103 103.928 85.8187 102.785C84.1704 101.044 82.3423 99.4417 80.5864 97.8676C79.6975 97.0554 79.1753 95.8457 77.9485 95.3587C76.7217 94.8718 76.5602 93.8054 77.565 92.1158C78.0817 91.2349 78.9523 90.6198 80.0497 91.2224C80.9305 91.7391 81.8332 92.3063 82.6063 92.989C87.8375 97.4879 93.0183 102.008 98.2278 106.457C99.3766 107.456 100.626 108.411 101.854 109.316C104.094 111.041 104.154 112.151 102.358 114.361C101.007 116.081 99.2648 116.893 97.0883 117.115C92.9369 117.472 88.7787 117.951 84.7303 119.101C83.9308 119.327 83.1243 119.675 82.3465 119.951C81.3957 120.242 81.02 119.926 81.1976 118.952C81.6171 116.738 81.955 116.412 85.2748 115.099ZM94.1717 104.68C96.1819 106.981 98.4291 109.001 101.122 110.529C98.7957 108.604 96.4981 106.606 94.1717 104.68Z"
                      fill="#B9DCF2"></path>
            </svg>
        </div>
    </section>

    <section class="glera-values position-relative">
        <svg class="position-absolute pulse-circle-left" viewbox="0 0 320 320" xmlns="http://www.w3.org/2000/svg">
            <circle cx="160" cy="160" fill="none" r="80" stroke="#FBEADF66" stroke-width="1">
                <animate attributeName="r" from="64" to="160" dur="2.5s" begin="0s" repeatCount="indefinite"/>
                <animate attributeName="opacity" from="1" to="0" dur="2.5s" begin="0s" repeatCount="indefinite"/>
            </circle>
            <circle cx="160" cy="160" fill="#FBEADF66" r="80"/>
        </svg>
        <svg class="position-absolute all-bg" width="2159" height="1538" viewBox="0 0 2159 1538" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0" cx="334.5" cy="334.5" r="332.5" stroke="#D5D9D8" stroke-width="4"/>
            <ellipse opacity="0" cx="335" cy="334.5" rx="251" ry="250.5" fill="#FBEADF"/>
            <path opacity="0"
                  d="M141 1536C210 1451.33 397.2 1297.2 594 1358C840 1434 984 1553 1221 1445C1458 1337 1471.82 1149 1699 1149C1923 1149 1883 1484 2063 1477"
                  stroke="url(#paint0_linear)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                  stroke-dasharray="8.8 8.8"/>
            <circle class="pulse" opacity="0.1" cx="1976" cy="964" r="141" fill="#917AEB"/>
            <rect class="weel" x="1473" y="1114.4" width="19" height="19" rx="6"
                  transform="rotate(-29.6591 1473 1114.4)"
                  fill="#FFC0D0"/>
            <circle class="pulse" cx="674" cy="89" r="18.5" stroke="#FFECA8" stroke-width="5"/>
            <path class="draw-line" opacity="0.2"
                  d="M2158.5 633.539C1843.5 614.039 1746 522.43 1801 490.984C1856 459.539 1976.5 618.489 1516 817.489C1156.97 972.638 718.5 893.155 546 817.489"
                  stroke="url(#paint1_linear01)" stroke-width="4"/>
            <circle class="pulse" cx="1049" cy="1050" r="11" fill="#F2F4F2"/>
            <defs>
                <linearGradient id="paint0_linear" x1="1807.28" y1="1243.93" x2="244.583" y2="1215.68"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF6331"/>
                    <stop offset="0.316058" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="0.506202" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="1" stop-color="#FF6331"/>
                </linearGradient>
                <linearGradient id="paint1_linear01" x1="2197.5" y1="628.039" x2="621.5" y2="888"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#C58764" stop-opacity="0"/>
                    <stop offset="0.167571" stop-color="#C58764"/>
                    <stop offset="0.400327" stop-color="#C58764" stop-opacity="0"/>
                </linearGradient>
            </defs>
        </svg>
        <svg class="position-center anim-line" width="2844" height="578" viewBox="0 0 2844 578" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path id="smooth-line1" opacity="0.3"
                  d="M3 574.375C104.873 449.371 381.259 221.806 671.818 311.572C1035.02 423.78 1247.62 599.473 1597.53 440.02C1947.44 280.567 1967.84 3.0024 2303.26 3C2633.98 2.99763 2574.92 497.6 2840.68 487.265"
                  stroke="url(#paint0_linear)" stroke-width="5.90568" stroke-linecap="round" stroke-linejoin="round"
                  stroke-dasharray="12.99 12.99"/>
            <defs>
                <linearGradient id="paint0_linear" x1="2463.13" y1="143.164" x2="155.931" y2="101.453"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF6331"/>
                    <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="1" stop-color="#FF6331"/>
                </linearGradient>
            </defs>
        </svg>
        <svg class="position-center anim-line" style="opacity: 0;" width="2844" height="477" viewBox="0 0 2844 477"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="smooth-line2" opacity="0.3"
                  d="M3 473.375C104.873 348.371 229.844 50.7845 531 8.50003C997.5 -57 1247.62 498.473 1597.53 339.02C1947.44 179.567 2209.43 -89.0496 2486.5 100C2667.5 223.5 2649 225 2840.68 386.265"
                  stroke="url(#paint0_linear)" stroke-width="5.90568" stroke-linecap="round" stroke-linejoin="round"
                  stroke-dasharray="12.99 12.99"/>
            <defs>
                <linearGradient id="paint0_linear" x1="2463.13" y1="42.1616" x2="155.931" y2="0.451497"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF6331"/>
                    <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="1" stop-color="#FF6331"/>
                </linearGradient>
            </defs>
        </svg>
        <svg class="position-center anim-line" style="opacity: 0;" width="2844" height="560" viewBox="0 0 2844 560"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <path id="smooth-line3" opacity="0.3"
                  d="M3 556.375C104.873 431.371 274.15 254.322 531 91.5003C958.5 -179.5 1190 243 1597.53 422.021C1949.59 576.673 2151.75 204.123 2486.5 183C2748 166.5 2804 239 2840.68 469.265"
                  stroke="url(#paint0_linear)" stroke-width="5.90568" stroke-linecap="round" stroke-linejoin="round"
                  stroke-dasharray="12.99 12.99"/>
            <defs>
                <linearGradient id="paint0_linear" x1="2463.13" y1="125.162" x2="155.932" y2="83.4517"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF6331"/>
                    <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="1" stop-color="#FF6331"/>
                </linearGradient>
            </defs>
        </svg>

        <div class="container">
            <div class="glera-values__grid">
                <div class="glera-values__first position-relative">
                    <h2 data-aos="zoom-in" class="title-shadow-blue title-h2_blue subtitle"><span
                                class="bg-text"><?php the_field( 'glera_values_title_path_1' ); ?></span> <?php the_field( 'glera_values_title_path_2' ); ?></h2>
                    <div data-aos="zoom-in" class="title-values"></div>
                    <img data-aos="zoom-in" class="position-relative glera-values__parrot"
                         src="/wp-content/themes/glera/assets/images/about/GLERA PARROT.png"
                         alt="">
                </div>
                <div data-aos="zoom-in" class="glera-values__descriptin position-relative icon-1">
                    <div class="glera-values__icon-1 glera-values__icon"></div>
                    <h3><span class="text-orange"><?php the_field( 'glera_values_block_1_title_path_1' ); ?></span> <?php the_field( 'glera_values_block_1_title_path_2' ); ?></h3>
                    <p><?php the_field( 'glera_values_block_1_text' ); ?> </p>
                </div>
                <div data-aos="zoom-in" class="glera-values__descriptin position-relative icon-2">
                    <div class="glera-values__icon-2 glera-values__icon"></div>
                    <h3><span class="text-blue"><?php the_field( 'glera_values_block_2_title_path_1' ); ?></span> <?php the_field( 'glera_values_block_2_title_path_2' ); ?></h3>
                    <p><?php the_field( 'glera_values_block_2_text' ); ?> </p>
                </div>
                <div data-aos="zoom-in" class="glera-values__descriptin position-relative icon-3">
                    <div class="glera-values__icon-3 glera-values__icon"></div>
                    <h3><span class="text-green-light"><?php the_field( 'glera_values_block_3_title_path_1' ); ?></span> <?php the_field( 'glera_values_block_3_title_path_2' ); ?></h3>
                    <p><?php the_field( 'glera_values_block_3_text' ); ?> </p>
                </div>
                <div data-aos="zoom-in" class="glera-values__descriptin position-relative icon-4">
                    <div class="glera-values__icon-4 glera-values__icon"></div>
                    <h3><span class="text-orange-light"><?php the_field( 'glera_values_block_4_title_path_1' ); ?></span> <?php the_field( 'glera_values_block_4_title_path_2' ); ?></h3>
                    <p><?php the_field( 'glera_values_block_4_text' ); ?> </p>
                </div>
                <div data-aos="zoom-in" class="glera-values__descriptin position-relative icon-5">
                    <div class="glera-values__icon-5 glera-values__icon"></div>
                    <h3><?php the_field( 'glera_values_block_5_title_path_1' ); ?> <span class="text-violet"><?php the_field( 'glera_values_block_5_title_path_2' ); ?></span></h3>
                    <p><?php the_field( 'glera_values_block_5_text' ); ?> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-office our-office-a">

        <div class="our-office__bottom position-relative">
            <img class="position-absolute our-office__bottom-blue"
                 src="/wp-content/themes/glera/assets/images/about/popugai-about.png" alt="">
            <div class="position-absolute our-office__bg-white w-100"></div>
            <div class="our-office__explorer-top position-absolute our-office__explorer-top-a">
                <div data-aos="zoom-in" class="our-office__cloud-wrap-top position-absolute">
                    <!--            <img class="position-absolute" src="/wp-content/themes/glera/assets/images/cloud.svg" alt="">-->
                    <p class="text-center position-relative"><span class="text-red d-block"><?php the_field( 'glera_values_text_tooltip_red' ); ?></span>
	                    <?php the_field( 'glera_values_text_tooltip' ); ?>
                    </p>
                    <img class="position-absolute cloud-road"
                         src="/wp-content/themes/glera/assets/images/about/glera-value-cloud-road.svg" alt="">
                </div>
            </div>
            <div class="our-office__wrap-line position-relative">
                <img src="/wp-content/themes/glera/assets/images/about/glera-value-bg-bottom.svg" alt="">
            </div>
        </div>
        <svg class="position-absolute our-office__bg-things" width="1302" height="2188" viewBox="0 0 1302 2188"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="749.001" cy="936" r="24.5" stroke="#8FD4B8" stroke-width="5"/>
            <path d="M434.656 1527.46C433.42 1516.33 420.32 1487.7 434.656 1486.46C452.576 1484.91 484.954 1508.96 489.28 1486.46C493.606 1463.95 480.28 1428.46 521.28 1451.46"
                  stroke="#FEC960" stroke-width="4"/>
            <rect x="1276" y="1650.4" width="19" height="19" rx="6" transform="rotate(-29.6591 1276 1650.4)"
                  fill="#8FD4B8"/>
            <rect x="370.001" y="74.4019" width="19" height="19" rx="6" transform="rotate(-29.6591 370.001 74.4019)"
                  fill="#FFA654"/>
            <rect x="358.001" y="2171.4" width="19" height="19" rx="6" transform="rotate(-29.6591 358.001 2171.4)"
                  fill="#B9DCF2"/>
            <g id="point-ap-our-offices" clip-path="url(#clip0)">
                <path d="M59.8649 35.8708C85.3404 20.6062 118.485 28.9135 133.75 54.389C139.021 63.186 142.22 73.962 143.258 86.4169C144.081 96.2929 143.555 107.25 141.694 118.982C138.536 138.901 132.706 153.961 132.46 154.592C132.29 155.026 131.985 155.375 131.606 155.602C131.227 155.829 130.775 155.934 130.313 155.879C129.64 155.799 113.61 153.836 94.5569 147.226C83.3335 143.333 73.4238 138.629 65.1036 133.246C54.6106 126.456 46.6172 118.553 41.3462 109.756C26.0816 84.2804 34.3889 51.1356 59.8649 35.8708Z"
                      fill="#FFE571"/>
                <path d="M59.8746 35.8671C61.5964 34.8354 63.3544 33.9149 65.1384 33.0967C43.5759 49.4744 37.3128 79.8929 51.5457 103.647C56.8167 112.444 64.8101 120.347 75.3031 127.136C83.6235 132.52 93.533 137.224 104.756 141.117C117.014 145.369 128.019 147.698 134.49 148.84C133.356 152.302 132.558 154.363 132.47 154.589C132.3 155.022 131.994 155.372 131.616 155.598C131.237 155.825 130.785 155.93 130.323 155.875C129.649 155.795 113.62 153.832 94.5668 147.223C83.3434 143.329 73.4337 138.625 65.1135 133.242C54.6205 126.452 46.6271 118.549 41.3561 109.752C26.0913 84.2767 34.3986 51.132 59.8746 35.8671Z"
                      fill="#FFC238"/>
                <path d="M68.3039 49.9476C86.0184 39.3334 109.066 45.1095 119.681 62.8245C130.295 80.5389 124.518 103.586 106.804 114.201C89.0886 124.815 66.0417 119.039 55.4273 101.324C44.8127 83.6095 50.589 60.5622 68.3039 49.9476Z"
                      fill="#FFC238"/>
                <path d="M64.9964 91.4878C63.3738 91.103 62.1339 89.8542 61.7609 88.2287C61.3879 86.6032 61.9587 84.9388 63.2513 83.8849L72.8172 76.0836C72.8832 76.0297 72.9184 75.947 72.9116 75.8624L71.9083 63.5598C71.7729 61.8975 72.5774 60.3324 74.0076 59.4754C75.4381 58.6183 77.1976 58.6471 78.5995 59.5506L88.9742 66.2376C89.0461 66.2838 89.1357 66.2918 89.2147 66.2591L100.605 61.5033C102.144 60.8606 103.881 61.1423 105.138 62.2379C106.396 63.3334 106.912 65.0157 106.486 66.628L103.332 78.5618C103.31 78.6445 103.331 78.7321 103.386 78.7966L111.429 88.1598C112.516 89.425 112.785 91.164 112.131 92.6983C111.478 94.2329 110.037 95.2435 108.372 95.3365L96.0479 96.0247C95.9627 96.0294 95.8854 96.076 95.8412 96.1486L89.4213 106.691C89.0438 107.311 88.5341 107.811 87.9413 108.166C87.171 108.628 86.261 108.845 85.3227 108.762C83.6615 108.614 82.2547 107.557 81.6516 106.002L77.1885 94.4941C77.1576 94.4144 77.0898 94.3553 77.0067 94.3354L64.9964 91.4878Z"
                      fill="#F75147"/>
            </g>
            <path d="M1171.27 411.101L1178.36 406.439L1183.88 408.77L1192.55 401L1201.21 405.662L1209.09 404.885L1209.88 411.878L1213.82 409.547L1220.91 405.662L1224.06 410.324L1228.79 411.878L1228 416.54L1224.85 420.424L1228.79 424.309L1226.43 430.525L1231.94 433.633L1235.09 445.288L1241.4 446.065L1240.61 456.166L1249.27 453.835V458.496L1254 462.381L1246.91 470.151L1234.3 468.597L1235.09 482.583H1238.24V492.684L1227.21 493.46L1222.49 498.899L1221.7 509L1216.18 502.784L1209.88 505.892L1205.15 505.115L1203.58 499.676L1198.06 505.892L1190.97 498.122L1185.46 504.338C1185.46 504.338 1178.36 495.014 1172.85 495.014C1167.33 495.014 1147.64 492.683 1145.27 493.46C1142.91 494.237 1130.3 504.338 1130.3 504.338L1129.52 491.13L1124 487.245L1127.94 481.029C1127.94 481.029 1134.24 475.59 1134.24 474.036C1135.03 472.482 1131.09 460.827 1130.3 459.273C1129.52 457.719 1129.52 449.95 1129.52 449.95C1129.52 449.95 1138.18 450.727 1141.33 449.173C1145.27 447.619 1155.52 444.511 1155.52 442.18C1155.52 439.849 1157.88 428.194 1157.88 428.194L1170.49 420.424L1168.12 417.317L1171.27 411.101Z"
                  fill="#AA2C28"/>
            <path d="M1171.27 404.101L1178.36 399.439L1183.88 401.77L1192.55 394L1201.21 398.662L1209.09 397.885L1209.88 404.878L1213.82 402.547L1220.91 398.662L1224.06 403.324L1228.79 404.878L1228 409.54L1224.85 413.424L1228.79 417.309L1226.43 423.525L1231.94 426.633L1235.09 438.288L1241.4 439.065L1240.61 449.166L1249.27 446.835V451.496L1254 455.381L1246.91 463.151L1234.3 461.597L1235.09 475.583H1238.24V485.684L1227.21 486.46L1222.49 491.899L1221.7 502L1216.18 495.784L1209.88 498.892L1205.15 498.115L1203.58 492.676L1198.06 498.892L1190.97 491.122L1185.46 497.338C1185.46 497.338 1178.36 488.014 1172.85 488.014C1167.33 488.014 1147.64 485.683 1145.27 486.46C1142.91 487.237 1130.3 497.338 1130.3 497.338L1129.52 484.13L1124 480.245L1127.94 474.029C1127.94 474.029 1134.24 468.59 1134.24 467.036C1135.03 465.482 1131.09 453.827 1130.3 452.273C1129.52 450.719 1129.52 442.95 1129.52 442.95C1129.52 442.95 1138.18 443.727 1141.33 442.173C1145.27 440.619 1155.52 437.511 1155.52 435.18C1155.52 432.849 1157.88 421.194 1157.88 421.194L1170.49 413.424L1168.12 410.317L1171.27 404.101Z"
                  fill="#F74C47"/>
            <path class="pulse-top2"
                  d="M1190 387C1175.96 387 1164.53 398.598 1164.53 412.854C1164.53 417.776 1165.85 423.003 1168.46 428.387C1170.53 432.657 1173.4 437.038 1177.01 441.41C1183.13 448.833 1189.16 453.595 1189.41 453.795C1189.58 453.931 1189.79 454 1190 454C1190.21 454 1190.42 453.931 1190.59 453.795C1190.85 453.596 1196.87 448.833 1202.99 441.41C1206.6 437.038 1209.48 432.657 1211.54 428.387C1214.15 423.003 1215.47 417.776 1215.47 412.854C1215.47 398.598 1204.04 387 1190 387Z"
                  fill="#FFE571"/>
            <path class="pulse-top2"
                  d="M1190 387C1189.05 387 1188.11 387.055 1187.19 387.158C1199.92 388.582 1209.85 399.561 1209.85 412.854C1209.85 417.776 1208.53 423.003 1205.92 428.387C1203.85 432.657 1200.98 437.038 1197.37 441.41C1193.43 446.185 1189.54 449.859 1187.19 451.926C1188.49 453.072 1189.32 453.724 1189.41 453.795C1189.58 453.931 1189.79 454 1190 454C1190.21 454 1190.41 453.931 1190.59 453.795C1190.84 453.596 1196.87 448.833 1202.99 441.41C1206.6 437.038 1209.47 432.657 1211.54 428.387C1214.14 423.003 1215.47 417.776 1215.47 412.854C1215.47 398.598 1204.04 387 1190 387Z"
                  fill="#FFC238"/>
            <path class="pulse-top2"
                  d="M1190 394.877C1180.24 394.877 1172.29 402.942 1172.29 412.855C1172.29 422.768 1180.24 430.833 1190 430.833C1199.77 430.833 1207.71 422.768 1207.71 412.855C1207.71 402.942 1199.77 394.877 1190 394.877Z"
                  fill="#FFC238"/>
            <path class="pulse-top2"
                  d="M1201.44 411.167C1202 410.608 1202.2 409.788 1201.96 409.027C1201.71 408.265 1201.08 407.721 1200.3 407.606L1194.52 406.754C1194.48 406.748 1194.45 406.723 1194.43 406.686L1191.84 401.373C1191.5 400.655 1190.79 400.209 1190 400.209C1189.21 400.209 1188.51 400.655 1188.16 401.373L1185.57 406.686C1185.56 406.723 1185.52 406.748 1185.48 406.754L1179.71 407.606C1178.92 407.721 1178.29 408.266 1178.05 409.027C1177.8 409.788 1178 410.608 1178.57 411.167L1182.74 415.303C1182.77 415.332 1182.79 415.373 1182.78 415.413L1181.79 421.253C1181.66 422.041 1181.97 422.824 1182.61 423.294C1183.25 423.765 1184.08 423.826 1184.78 423.453L1189.94 420.696C1189.98 420.677 1190.02 420.677 1190.06 420.696L1195.22 423.453C1195.53 423.615 1195.86 423.695 1196.18 423.695C1196.61 423.695 1197.03 423.56 1197.39 423.294C1198.03 422.824 1198.34 422.041 1198.21 421.252L1197.22 415.413C1197.21 415.372 1197.23 415.331 1197.26 415.303L1201.44 411.167Z"
                  fill="#F75147"/>
            <defs>
                <clipPath id="clip0">
                    <rect width="139.58" height="139.58" fill="white"
                          transform="matrix(-0.857801 0.513982 0.513982 0.857801 119.731 0)"/>
                </clipPath>
            </defs>
        </svg>
        <div class="container our-office__container position-relative">
            <h2 data-aos="zoom-in" class="text-center title-shadow-red title-h2_red subtitle"><span class="text-violet"><?php the_field( 'our_office_title_path_1' ); ?> </span><?php the_field( 'our_office_title_path_2' ); ?>
            </h2>
            <div data-aos="zoom-in" class="title-our-office" id="title-our-office"></div>
            <p data-aos="zoom-in" class="text-center our-office__caption"><?php the_field( 'our_office_text_caption_path_1' ); ?> <span
                        class="text-red"><?php the_field( 'our_office_text_caption_red' ); ?></span><br>
	            <?php the_field( 'our_office_text_caption_path_2' ); ?></p>
            <div class="our-office__grid-sliders">

                <div data-aos="zoom-in" class="our-office__row-slide left-row">
                    <div
                         class="swiper wrap-slider left position-relative our-office_slider1 about-slider">
                        <span class="json-anim-btn blick-left opacity-1" id="blick-left3"></span>
                        <span class="json-anim-btn blick-right opacity-1" id="blick-right3"></span>
                        <div class="swiper-wrapper">
                            <?php if( get_field('our_office_slider_1_slide_1') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_1'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_2') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_2'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_3') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_3'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_4') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_4'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_5') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_5'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_6') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_6'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_7') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_7'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_8') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_8'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_9') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_9'); ?>"
                                        alt=""></div>
                            <?php endif; ?>

                            <?php if( get_field('our_office_slider_1_slide_10') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_1_slide_10'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
                        </div>
                        <div class="controls-news position-absolute">
                            <button data-aos="zoom-in" class="slide-next1 slide-next btn-slide"></button>
                            <button data-aos="zoom-in" class="slide-prev1 slide-prev btn-slide"></button>
                        </div>
                    </div>
                    <div class="our-office__text">
                        <h4 data-aos="zoom-in"><?php the_field( 'our_office_block_slide_1_title' ); ?></h4>
                        <p data-aos="zoom-in"><?php the_field( 'our_office_block_slide_1_text' ); ?></p>
                    </div>
                </div>

                <div class="our-office__row-slide right-row">
                    <div class="our-office__text">
                        <h4 data-aos="zoom-in"><?php the_field( 'our_office_block_slide_2_title' ); ?></h4>
                        <p data-aos="zoom-in"><?php the_field( 'our_office_block_slide_2_text' ); ?></p>
                    </div>
                    <div data-aos="zoom-in" class="swiper wrap-slider right position-relative our-office_slider2 about-slider">
                        <div class="swiper-wrapper">
	                        <?php if( get_field('our_office_slider_2_slide_1') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_1'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_2') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_2'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_3') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_3'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_4') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_4'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_5') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_5'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_6') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_6'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_7') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_7'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_8') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_8'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_9') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_9'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_2_slide_10') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_2_slide_10'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
                        </div>
                        <div class="controls-news position-absolute">
                            <button data-aos="zoom-in" class="slide-next2 slide-next btn-slide"></button>
                            <button data-aos="zoom-in" class="slide-prev2 slide-prev btn-slide"></button>
                        </div>
                    </div>
                </div>

                <div  class="our-office__row-slide left-row">
                    <div data-aos="zoom-in" class="swiper wrap-slider left position-relative our-office_slider3 about-slider">
                        <span class="json-anim-btn blick-left opacity-1" id="blick-left2"></span>
                        <span class="json-anim-btn blick-right opacity-1" id="blick-right2"></span>
                        <div class="swiper-wrapper">
	                        <?php if( get_field('our_office_slider_3_slide_1') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_1'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_2') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_2'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_3') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_3'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_4') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_4'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_5') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_5'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_6') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_6'); ?>"
                                        alt=""></div>
                                        <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_7') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_7'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_8') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_8'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_9') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_9'); ?>"
                                        alt=""></div>
                                        <?php endif; ?>
	                        <?php if( get_field('our_office_slider_3_slide_10') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('our_office_slider_3_slide_10'); ?>"
                                        alt=""></div>
                            <?php endif; ?>
                        </div>
                        <div class="controls-news position-absolute">
                            <button data-aos="zoom-in" class="slide-next3 slide-next btn-slide"></button>
                            <button data-aos="zoom-in" class="slide-prev3 slide-prev btn-slide"></button>
                        </div>
                    </div>
                    <div class="our-office__text">
                        <h4 data-aos="zoom-in"><?php the_field( 'our_office_block_slide_3_title' ); ?></h4>
                        <p data-aos="zoom-in"><?php the_field( 'our_office_block_slide_3_text' ); ?> </p>
                    </div>
                </div>

            </div>
            <div class="our-office__workflow">
                <div class="our-office__workflow-text">
	                <?php the_field( 'our_office_block_video_title' ); ?>

	                <?php the_field( 'our_office_block_video_list' ); ?>

                </div>
                <div data-aos="zoom-in" class="our-office__workflow-video position-relative">
                    <div data-aos="zoom-in" class="circle-bg position-absolute pulse"></div>
                    <video class="position-relative" video autoplay loop muted playsinline webkit-playinginline
                           preload="/wp-content/themes/glera/assets/images/poster-video.jpg">
                        <source src="/wp-content/themes/glera/assets/video/About Us Video/2-2.mp4"
                                type="video/mp4">
                    </video>
                    <img data-aos="zoom-in" class="position-absolute decor-bg"
                         src="/wp-content/themes/glera/assets/images/about/workflow-pic-video-v3.svg" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="time-travel">
        <!--    <div class="our-office__bottom position-relative">-->
        <!--        <img class="position-absolute bg-line" src="/wp-content/themes/glera/assets/images/about/bg-line.svg" alt="">-->
        <!--        <img data-aos="zoom-in" class="position-absolute our-office__bottom-blue"-->
        <!--             src="/wp-content/themes/glera/assets/images/about/time-travel-man.svg" alt="">-->
        <!--        <div class="position-absolute our-office__bg-white w-100"></div>-->
        <!--        <div data-aos="zoom-in" class="our-office__explorer-top position-absolute">-->
        <!--            <div class="our-office__cloud-wrap-top position-absolute">-->
        <!---->
        <!--                <p class="text-center position-relative"><span class="text-red">Мы не хотим останавливаться.</span> У-->
        <!--                    нас грандиозные планы, в том числе открытие новых офисов компании. Ведь для тех, кто создает-->
        <!--                    уникальные игровые миры, <span class="text-violet d-block">границ не существует!</span></p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="our-office__wrap-line position-relative">-->
        <!--            <img src="/wp-content/themes/glera/assets/images/geography-bg-transparent.svg" alt="">-->
        <!--        </div>-->
        <!--    </div>-->

        <div class="geography__bottom position-relative">
            <!--        <img class="position-absolute geography__bottom-blue"-->
            <!--             src="/wp-content/themes/glera/assets/images/geography-blue-bg.svg" alt="">-->
            <!--        <div id="corsar" class="position-absolute geography__bottom-blue"></div>-->
            <div class="position-absolute geography__bottom-bg-white w-100"></div>
            <div class="position-absolute geography__bottom-blue nefertiti" id="nefertiti"></div>

            <script>
                new spine.SpinePlayer("nefertiti", {
                    jsonUrl: "/wp-content/themes/glera/assets/animations/about/bubble_nefertiti 2/nefertiti_bubble.json",
                    atlasUrl: "/wp-content/themes/glera/assets/animations/about/bubble_nefertiti 2/nefertiti_bubble.atlas",
                    showControls: false,
                    alpha: true, // Enable player translucency
                    backgroundColor: "#00000000",
                    premultiplyAlpha: true,
                    premultipliedAlpha: true
                });
            </script>
            <div data-aos="zoom-in" class="our-office__explorer-top our-office__explorer-top-a2  position-absolute">
                <div class="our-office__cloud-wrap-top position-absolute">
                    <img class="position-absolute cloud-road"
                         src="/wp-content/themes/glera/assets/images/about/claud-road.svg" alt="">
                    <p class="text-center position-relative"><span class="text-red"><?php the_field( 'our_office_tooltip_text_red' ); ?></span>
	                    <?php the_field( 'our_office_tooltip_text' ); ?> <span class="text-violet d-block"><?php the_field( 'our_office_tooltip_text_violet' ); ?></span></p>
                </div>
            </div>

            <div class="geography__wrap-line position-relative"></div>
            <!--        <img class="geography__bottom-big position-relative" src="/wp-content/themes/glera/assets/images/geography-bg-transparent.svg" alt="">-->
        </div>

        <div class="container time-travel__container position-relative">
            <svg class="position-absolute bg-things" width="1355" height="363" viewBox="0 0 1355 363" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <circle class="pulse1" cx="1328" cy="27" r="24.5" stroke="#8FD4B8" stroke-width="5"/>
                <path d="M8.65501 212.457C7.41914 201.333 -5.68078 172.699 8.65533 171.457C26.5755 169.905 58.9535 193.965 63.2791 171.457C67.6046 148.95 54.2793 113.457 95.2793 136.457"
                      stroke="#FEC960" stroke-width="4"/>
                <circle class="pulse" cx="706" cy="352" r="11" fill="#CEF3EE"/>
            </svg>
            <div data-aos="zoom-in" class="title-gaegu text-red our-games__gaegu our-games__gaegu-ap position-absolute"><?php the_field( 'time_travel_signature' ); ?><img
                        data-aos="zoom-in"
                        class="position-absolute arrow"
                        src="/wp-content/themes/glera/assets/images/about/arrow-left.svg" alt=""></div>
            <h2 data-aos="zoom-in" class="time-travel__title title-shadow-blue title-h2_blue subtitle"><span
                        class="text-red d-block"><?php the_field( 'time_travel_title_path_1' ); ?></span> <?php the_field( 'time_travel_title_path_2' ); ?></h2>
            <div data-aos="zoom-in" class="title-time-travel" id="title-time-travel"></div>
            <div class="time-travel__graphic position-relative">
                <div data-aos="zoom-in" class="wrap-time-line position-relative text-center ">
                    <svg class="diagram-svg" width="1252" height="649" viewBox="0 0 1252 649" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                            <path id="time-line" d="M32 601C32 601 87.5 510.5 164.5 510.5C241.5 510.5 240 459.5 296 456.5C352 453.5 376 411 428 397.5C480 384 512.5 349.5 560.5 337C608.5 324.5 651.5 331 692.5 316C733.5 301 763 270 824 262C885 254 909 188 956 175C1003 162 1047 161 1088 140.5C1129 120 1168 45.3422 1220.5 30.6711" stroke="#FFA654" stroke-width="6"/>
                        </g>
                        <rect x="31.25" y="603.75" width="1189.5" height="0.5" stroke="#D1D1D1" stroke-width="0.5"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 33 601)" fill="#35BEDC"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 165 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 297 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 429 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 561 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 693 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 825 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 957 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 1089 601)" fill="#FFA654"/>
                        <rect width="2" height="6" transform="matrix(-1 0 0 1 1221 601)" fill="#FFA654"/>
                        <rect opacity="0.2" width="2" height="91" transform="matrix(-1 0 0 1 165 510)" fill="url(#paint0_linear)"/>
                        <rect opacity="0.2" width="2" height="112" transform="matrix(-1 0 0 1 297 489)" fill="url(#paint1_linear)"/>
                        <rect opacity="0.2" width="2" height="152" transform="matrix(-1 0 0 1 429 449)" fill="url(#paint2_linear)"/>
                        <rect opacity="0.2" width="2" height="198" transform="matrix(-1 0 0 1 561 403)" fill="url(#paint3_linear)"/>
                        <rect opacity="0.2" width="2" height="231" transform="matrix(-1 0 0 1 693 370)" fill="url(#paint4_linear)"/>
                        <rect opacity="0.2" width="2" height="279" transform="matrix(-1 0 0 1 825 322)" fill="url(#paint5_linear)"/>
                        <rect opacity="0.2" width="2" height="370" transform="matrix(-1 0 0 1 957 231)" fill="url(#paint6_linear)"/>
                        <rect opacity="0.2" width="2" height="403" transform="matrix(-1 0 0 1 1089 198)" fill="url(#paint7_linear)"/>
                        <rect opacity="0.2" width="2" height="503" transform="matrix(-1 0 0 1 1221 98)" fill="url(#paint8_linear)"/>
                        <circle r="8" transform="matrix(-1 0 0 1 164 511)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 164 511)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 296 457)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 296 457)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 428 398)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 428 398)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 560 338)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 560 338)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 692 317)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 692 317)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 824 263)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 824 263)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 956 176)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 956 176)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 1088 142)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 1088 142)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle cx="1220" cy="32" r="8" fill="white"/>
                        <circle cx="1220" cy="32" r="6.25" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <circle r="8" transform="matrix(-1 0 0 1 32 602)" fill="white"/>
                        <circle r="6.25" transform="matrix(-1 0 0 1 32 602)" fill="#FFA654" stroke="white" stroke-width="2.5"/>
                        <path d="M9.68188 638.096H16.1499L15.5779 641H3.91788L4.37988 638.69L11.3979 633.19C12.2485 632.501 12.8352 631.921 13.1579 631.452C13.4952 630.983 13.6639 630.491 13.6639 629.978C13.6639 629.465 13.4659 629.054 13.0699 628.746C12.6885 628.438 12.1312 628.284 11.3979 628.284C10.7819 628.284 10.1879 628.423 9.61588 628.702C9.04388 628.981 8.54522 629.377 8.11988 629.89L5.72188 628.152C6.35255 627.287 7.21788 626.605 8.31788 626.106C9.41788 625.593 10.6205 625.336 11.9259 625.336C12.9965 625.336 13.9352 625.512 14.7419 625.864C15.5632 626.216 16.1939 626.707 16.6339 627.338C17.0885 627.969 17.3159 628.68 17.3159 629.472C17.3159 630.425 17.0519 631.32 16.5239 632.156C15.9959 632.992 15.0792 633.916 13.7739 634.928L9.68188 638.096ZM24.8915 641.264C23.1755 641.264 21.8188 640.751 20.8215 639.724C19.8241 638.683 19.3255 637.253 19.3255 635.434C19.3255 633.586 19.6628 631.892 20.3375 630.352C21.0268 628.812 21.9801 627.595 23.1975 626.7C24.4148 625.791 25.8008 625.336 27.3555 625.336C29.0715 625.336 30.4281 625.857 31.4255 626.898C32.4228 627.925 32.9215 629.347 32.9215 631.166C32.9215 633.014 32.5768 634.708 31.8875 636.248C31.2128 637.788 30.2668 639.013 29.0495 639.922C27.8321 640.817 26.4461 641.264 24.8915 641.264ZM25.2215 638.25C26.0721 638.25 26.8055 637.883 27.4215 637.15C28.0521 636.417 28.5288 635.507 28.8515 634.422C29.1741 633.322 29.3355 632.266 29.3355 631.254C29.3355 630.271 29.1301 629.545 28.7195 629.076C28.3235 628.592 27.7588 628.35 27.0255 628.35C26.1748 628.35 25.4341 628.717 24.8035 629.45C24.1875 630.183 23.7181 631.1 23.3955 632.2C23.0728 633.285 22.9115 634.334 22.9115 635.346C22.9115 636.329 23.1095 637.062 23.5055 637.546C23.9161 638.015 24.4881 638.25 25.2215 638.25ZM42.7847 625.6L39.7047 641H36.1407L38.6487 628.46H35.5687L36.1407 625.6H42.7847ZM50.288 641.264C48.572 641.264 47.2153 640.751 46.218 639.724C45.2206 638.683 44.722 637.253 44.722 635.434C44.722 633.586 45.0593 631.892 45.734 630.352C46.4233 628.812 47.3766 627.595 48.594 626.7C49.8113 625.791 51.1973 625.336 52.752 625.336C54.468 625.336 55.8246 625.857 56.822 626.898C57.8193 627.925 58.318 629.347 58.318 631.166C58.318 633.014 57.9733 634.708 57.284 636.248C56.6093 637.788 55.6633 639.013 54.446 639.922C53.2286 640.817 51.8426 641.264 50.288 641.264ZM50.618 638.25C51.4686 638.25 52.202 637.883 52.818 637.15C53.4486 636.417 53.9253 635.507 54.248 634.422C54.5706 633.322 54.732 632.266 54.732 631.254C54.732 630.271 54.5266 629.545 54.116 629.076C53.72 628.592 53.1553 628.35 52.422 628.35C51.5713 628.35 50.8306 628.717 50.2 629.45C49.584 630.183 49.1146 631.1 48.792 632.2C48.4693 633.285 48.308 634.334 48.308 635.346C48.308 636.329 48.506 637.062 48.902 637.546C49.3126 638.015 49.8846 638.25 50.618 638.25Z" fill="#31496B"/>
                        <path d="M143.649 637.096H150.117L149.545 640H137.885L138.347 637.69L145.365 632.19C146.215 631.501 146.802 630.921 147.125 630.452C147.462 629.983 147.631 629.491 147.631 628.978C147.631 628.465 147.433 628.054 147.037 627.746C146.655 627.438 146.098 627.284 145.365 627.284C144.749 627.284 144.155 627.423 143.583 627.702C143.011 627.981 142.512 628.377 142.087 628.89L139.689 627.152C140.319 626.287 141.185 625.605 142.285 625.106C143.385 624.593 144.587 624.336 145.893 624.336C146.963 624.336 147.902 624.512 148.709 624.864C149.53 625.216 150.161 625.707 150.601 626.338C151.055 626.969 151.283 627.68 151.283 628.472C151.283 629.425 151.019 630.32 150.491 631.156C149.963 631.992 149.046 632.916 147.741 633.928L143.649 637.096ZM158.858 640.264C157.142 640.264 155.786 639.751 154.788 638.724C153.791 637.683 153.292 636.253 153.292 634.434C153.292 632.586 153.63 630.892 154.304 629.352C154.994 627.812 155.947 626.595 157.164 625.7C158.382 624.791 159.768 624.336 161.322 624.336C163.038 624.336 164.395 624.857 165.392 625.898C166.39 626.925 166.888 628.347 166.888 630.166C166.888 632.014 166.544 633.708 165.854 635.248C165.18 636.788 164.234 638.013 163.016 638.922C161.799 639.817 160.413 640.264 158.858 640.264ZM159.188 637.25C160.039 637.25 160.772 636.883 161.388 636.15C162.019 635.417 162.496 634.507 162.818 633.422C163.141 632.322 163.302 631.266 163.302 630.254C163.302 629.271 163.097 628.545 162.686 628.076C162.29 627.592 161.726 627.35 160.992 627.35C160.142 627.35 159.401 627.717 158.77 628.45C158.154 629.183 157.685 630.1 157.362 631.2C157.04 632.285 156.878 633.334 156.878 634.346C156.878 635.329 157.076 636.062 157.472 636.546C157.883 637.015 158.455 637.25 159.188 637.25ZM176.752 624.6L173.672 640H170.108L172.616 627.46H169.536L170.108 624.6H176.752ZM182.979 637.096H189.447L188.875 640H177.215L177.677 637.69L184.695 632.19C185.545 631.501 186.132 630.921 186.455 630.452C186.792 629.983 186.961 629.491 186.961 628.978C186.961 628.465 186.763 628.054 186.367 627.746C185.985 627.438 185.428 627.284 184.695 627.284C184.079 627.284 183.485 627.423 182.913 627.702C182.341 627.981 181.842 628.377 181.417 628.89L179.019 627.152C179.649 626.287 180.515 625.605 181.615 625.106C182.715 624.593 183.917 624.336 185.223 624.336C186.293 624.336 187.232 624.512 188.039 624.864C188.86 625.216 189.491 625.707 189.931 626.338C190.385 626.969 190.613 627.68 190.613 628.472C190.613 629.425 190.349 630.32 189.821 631.156C189.293 631.992 188.376 632.916 187.071 633.928L182.979 637.096Z" fill="#31496B"/>
                        <path d="M275.627 637.096H282.095L281.523 640H269.863L270.325 637.69L277.343 632.19C278.194 631.501 278.781 630.921 279.103 630.452C279.441 629.983 279.609 629.491 279.609 628.978C279.609 628.465 279.411 628.054 279.015 627.746C278.634 627.438 278.077 627.284 277.343 627.284C276.727 627.284 276.133 627.423 275.561 627.702C274.989 627.981 274.491 628.377 274.065 628.89L271.667 627.152C272.298 626.287 273.163 625.605 274.263 625.106C275.363 624.593 276.566 624.336 277.871 624.336C278.942 624.336 279.881 624.512 280.687 624.864C281.509 625.216 282.139 625.707 282.579 626.338C283.034 626.969 283.261 627.68 283.261 628.472C283.261 629.425 282.997 630.32 282.469 631.156C281.941 631.992 281.025 632.916 279.719 633.928L275.627 637.096ZM290.837 640.264C289.121 640.264 287.764 639.751 286.767 638.724C285.769 637.683 285.271 636.253 285.271 634.434C285.271 632.586 285.608 630.892 286.283 629.352C286.972 627.812 287.925 626.595 289.143 625.7C290.36 624.791 291.746 624.336 293.301 624.336C295.017 624.336 296.373 624.857 297.371 625.898C298.368 626.925 298.867 628.347 298.867 630.166C298.867 632.014 298.522 633.708 297.833 635.248C297.158 636.788 296.212 638.013 294.995 638.922C293.777 639.817 292.391 640.264 290.837 640.264ZM291.167 637.25C292.017 637.25 292.751 636.883 293.367 636.15C293.997 635.417 294.474 634.507 294.797 633.422C295.119 632.322 295.281 631.266 295.281 630.254C295.281 629.271 295.075 628.545 294.665 628.076C294.269 627.592 293.704 627.35 292.971 627.35C292.12 627.35 291.379 627.717 290.749 628.45C290.133 629.183 289.663 630.1 289.341 631.2C289.018 632.285 288.857 633.334 288.857 634.346C288.857 635.329 289.055 636.062 289.451 636.546C289.861 637.015 290.433 637.25 291.167 637.25ZM308.73 624.6L305.65 640H302.086L304.594 627.46H301.514L302.086 624.6H308.73ZM322.635 626.91L318.323 630.936C319.394 631.185 320.223 631.647 320.809 632.322C321.396 632.997 321.689 633.833 321.689 634.83C321.689 635.871 321.381 636.803 320.765 637.624C320.164 638.445 319.321 639.091 318.235 639.56C317.15 640.029 315.918 640.264 314.539 640.264C313.41 640.264 312.354 640.11 311.371 639.802C310.389 639.494 309.567 639.054 308.907 638.482L310.623 635.864C311.137 636.304 311.753 636.649 312.471 636.898C313.205 637.147 313.975 637.272 314.781 637.272C315.837 637.272 316.651 637.081 317.223 636.7C317.795 636.304 318.081 635.754 318.081 635.05C318.081 634.493 317.869 634.082 317.443 633.818C317.033 633.539 316.402 633.4 315.551 633.4H313.923L314.385 631.046L318.213 627.46H311.701L312.295 624.6H323.075L322.635 626.91Z" fill="#31496B"/>
                        <path d="M406.553 637.096H413.021L412.449 640H400.789L401.251 637.69L408.269 632.19C409.12 631.501 409.706 630.921 410.029 630.452C410.366 629.983 410.535 629.491 410.535 628.978C410.535 628.465 410.337 628.054 409.941 627.746C409.56 627.438 409.002 627.284 408.269 627.284C407.653 627.284 407.059 627.423 406.487 627.702C405.915 627.981 405.416 628.377 404.991 628.89L402.593 627.152C403.224 626.287 404.089 625.605 405.189 625.106C406.289 624.593 407.492 624.336 408.797 624.336C409.868 624.336 410.806 624.512 411.613 624.864C412.434 625.216 413.065 625.707 413.505 626.338C413.96 626.969 414.187 627.68 414.187 628.472C414.187 629.425 413.923 630.32 413.395 631.156C412.867 631.992 411.95 632.916 410.645 633.928L406.553 637.096ZM421.763 640.264C420.047 640.264 418.69 639.751 417.693 638.724C416.695 637.683 416.197 636.253 416.197 634.434C416.197 632.586 416.534 630.892 417.209 629.352C417.898 627.812 418.851 626.595 420.069 625.7C421.286 624.791 422.672 624.336 424.227 624.336C425.943 624.336 427.299 624.857 428.297 625.898C429.294 626.925 429.793 628.347 429.793 630.166C429.793 632.014 429.448 633.708 428.759 635.248C428.084 636.788 427.138 638.013 425.921 638.922C424.703 639.817 423.317 640.264 421.763 640.264ZM422.093 637.25C422.943 637.25 423.677 636.883 424.293 636.15C424.923 635.417 425.4 634.507 425.723 633.422C426.045 632.322 426.207 631.266 426.207 630.254C426.207 629.271 426.001 628.545 425.591 628.076C425.195 627.592 424.63 627.35 423.897 627.35C423.046 627.35 422.305 627.717 421.675 628.45C421.059 629.183 420.589 630.1 420.267 631.2C419.944 632.285 419.783 633.334 419.783 634.346C419.783 635.329 419.981 636.062 420.377 636.546C420.787 637.015 421.359 637.25 422.093 637.25ZM439.656 624.6L436.576 640H433.012L435.52 627.46H432.44L433.012 624.6H439.656ZM455.013 636.766H452.483L451.845 640H448.369L449.029 636.766H440.735L441.197 634.368L450.261 624.6H454.155L445.707 633.862H449.755L450.327 630.98H453.649L453.077 633.862H455.607L455.013 636.766Z" fill="#31496B"/>
                        <path d="M538.633 637.096H545.101L544.529 640H532.869L533.331 637.69L540.349 632.19C541.2 631.501 541.786 630.921 542.109 630.452C542.446 629.983 542.615 629.491 542.615 628.978C542.615 628.465 542.417 628.054 542.021 627.746C541.64 627.438 541.082 627.284 540.349 627.284C539.733 627.284 539.139 627.423 538.567 627.702C537.995 627.981 537.496 628.377 537.071 628.89L534.673 627.152C535.304 626.287 536.169 625.605 537.269 625.106C538.369 624.593 539.572 624.336 540.877 624.336C541.948 624.336 542.886 624.512 543.693 624.864C544.514 625.216 545.145 625.707 545.585 626.338C546.04 626.969 546.267 627.68 546.267 628.472C546.267 629.425 546.003 630.32 545.475 631.156C544.947 631.992 544.03 632.916 542.725 633.928L538.633 637.096ZM553.843 640.264C552.127 640.264 550.77 639.751 549.773 638.724C548.775 637.683 548.277 636.253 548.277 634.434C548.277 632.586 548.614 630.892 549.289 629.352C549.978 627.812 550.931 626.595 552.149 625.7C553.366 624.791 554.752 624.336 556.307 624.336C558.023 624.336 559.379 624.857 560.377 625.898C561.374 626.925 561.873 628.347 561.873 630.166C561.873 632.014 561.528 633.708 560.839 635.248C560.164 636.788 559.218 638.013 558.001 638.922C556.783 639.817 555.397 640.264 553.843 640.264ZM554.173 637.25C555.023 637.25 555.757 636.883 556.373 636.15C557.003 635.417 557.48 634.507 557.803 633.422C558.125 632.322 558.287 631.266 558.287 630.254C558.287 629.271 558.081 628.545 557.671 628.076C557.275 627.592 556.71 627.35 555.977 627.35C555.126 627.35 554.385 627.717 553.755 628.45C553.139 629.183 552.669 630.1 552.347 631.2C552.024 632.285 551.863 633.334 551.863 634.346C551.863 635.329 552.061 636.062 552.457 636.546C552.867 637.015 553.439 637.25 554.173 637.25ZM571.736 624.6L568.656 640H565.092L567.6 627.46H564.52L565.092 624.6H571.736ZM581.131 630.342C582.011 630.342 582.825 630.518 583.573 630.87C584.336 631.222 584.937 631.735 585.377 632.41C585.832 633.07 586.059 633.862 586.059 634.786C586.059 635.886 585.795 636.854 585.267 637.69C584.739 638.511 584.006 639.149 583.067 639.604C582.128 640.044 581.072 640.264 579.899 640.264C578.667 640.264 577.582 640.022 576.643 639.538C575.704 639.054 574.971 638.343 574.443 637.404C573.93 636.451 573.673 635.299 573.673 633.95C573.673 632.395 574.003 630.885 574.663 629.418C575.323 627.937 576.35 626.719 577.743 625.766C579.136 624.813 580.867 624.336 582.935 624.336C583.786 624.336 584.592 624.431 585.355 624.622C586.118 624.798 586.741 625.047 587.225 625.37L585.619 627.988C584.886 627.489 583.918 627.24 582.715 627.24C581.292 627.24 580.148 627.643 579.283 628.45C578.432 629.257 577.868 630.291 577.589 631.552C578.498 630.745 579.679 630.342 581.131 630.342ZM579.855 637.602C580.632 637.602 581.27 637.375 581.769 636.92C582.282 636.465 582.539 635.857 582.539 635.094C582.539 634.449 582.312 633.943 581.857 633.576C581.417 633.195 580.83 633.004 580.097 633.004C579.276 633.004 578.608 633.231 578.095 633.686C577.582 634.141 577.325 634.72 577.325 635.424C577.325 636.04 577.545 636.561 577.985 636.986C578.44 637.397 579.063 637.602 579.855 637.602Z" fill="#31496B"/>
                        <path d="M671.316 637.096H677.784L677.212 640H665.552L666.014 637.69L673.032 632.19C673.882 631.501 674.469 630.921 674.792 630.452C675.129 629.983 675.298 629.491 675.298 628.978C675.298 628.465 675.1 628.054 674.704 627.746C674.322 627.438 673.765 627.284 673.032 627.284C672.416 627.284 671.822 627.423 671.25 627.702C670.678 627.981 670.179 628.377 669.754 628.89L667.356 627.152C667.986 626.287 668.852 625.605 669.952 625.106C671.052 624.593 672.254 624.336 673.56 624.336C674.63 624.336 675.569 624.512 676.376 624.864C677.197 625.216 677.828 625.707 678.268 626.338C678.722 626.969 678.95 627.68 678.95 628.472C678.95 629.425 678.686 630.32 678.158 631.156C677.63 631.992 676.713 632.916 675.408 633.928L671.316 637.096ZM686.525 640.264C684.809 640.264 683.453 639.751 682.455 638.724C681.458 637.683 680.959 636.253 680.959 634.434C680.959 632.586 681.297 630.892 681.971 629.352C682.661 627.812 683.614 626.595 684.831 625.7C686.049 624.791 687.435 624.336 688.989 624.336C690.705 624.336 692.062 624.857 693.059 625.898C694.057 626.925 694.555 628.347 694.555 630.166C694.555 632.014 694.211 633.708 693.521 635.248C692.847 636.788 691.901 638.013 690.683 638.922C689.466 639.817 688.08 640.264 686.525 640.264ZM686.855 637.25C687.706 637.25 688.439 636.883 689.055 636.15C689.686 635.417 690.163 634.507 690.485 633.422C690.808 632.322 690.969 631.266 690.969 630.254C690.969 629.271 690.764 628.545 690.353 628.076C689.957 627.592 689.393 627.35 688.659 627.35C687.809 627.35 687.068 627.717 686.437 628.45C685.821 629.183 685.352 630.1 685.029 631.2C684.707 632.285 684.545 633.334 684.545 634.346C684.545 635.329 684.743 636.062 685.139 636.546C685.55 637.015 686.122 637.25 686.855 637.25ZM704.419 624.6L701.339 640H697.775L700.283 627.46H697.203L697.775 624.6H704.419ZM720.15 624.6L719.688 626.91L711.46 640H707.5L715.398 627.504H710.404L709.898 630.012H706.73L707.808 624.6H720.15Z" fill="#31496B"/>
                        <path d="M802.375 637.096H808.843L808.271 640H796.611L797.073 637.69L804.091 632.19C804.942 631.501 805.529 630.921 805.851 630.452C806.189 629.983 806.357 629.491 806.357 628.978C806.357 628.465 806.159 628.054 805.763 627.746C805.382 627.438 804.825 627.284 804.091 627.284C803.475 627.284 802.881 627.423 802.309 627.702C801.737 627.981 801.239 628.377 800.813 628.89L798.415 627.152C799.046 626.287 799.911 625.605 801.011 625.106C802.111 624.593 803.314 624.336 804.619 624.336C805.69 624.336 806.629 624.512 807.435 624.864C808.257 625.216 808.887 625.707 809.327 626.338C809.782 626.969 810.009 627.68 810.009 628.472C810.009 629.425 809.745 630.32 809.217 631.156C808.689 631.992 807.773 632.916 806.467 633.928L802.375 637.096ZM817.585 640.264C815.869 640.264 814.512 639.751 813.515 638.724C812.518 637.683 812.019 636.253 812.019 634.434C812.019 632.586 812.356 630.892 813.031 629.352C813.72 627.812 814.674 626.595 815.891 625.7C817.108 624.791 818.494 624.336 820.049 624.336C821.765 624.336 823.122 624.857 824.119 625.898C825.116 626.925 825.615 628.347 825.615 630.166C825.615 632.014 825.27 633.708 824.581 635.248C823.906 636.788 822.96 638.013 821.743 638.922C820.526 639.817 819.14 640.264 817.585 640.264ZM817.915 637.25C818.766 637.25 819.499 636.883 820.115 636.15C820.746 635.417 821.222 634.507 821.545 633.422C821.868 632.322 822.029 631.266 822.029 630.254C822.029 629.271 821.824 628.545 821.413 628.076C821.017 627.592 820.452 627.35 819.719 627.35C818.868 627.35 818.128 627.717 817.497 628.45C816.881 629.183 816.412 630.1 816.089 631.2C815.766 632.285 815.605 633.334 815.605 634.346C815.605 635.329 815.803 636.062 816.199 636.546C816.61 637.015 817.182 637.25 817.915 637.25ZM835.478 624.6L832.398 640H828.834L831.342 627.46H828.262L828.834 624.6H835.478ZM848.151 632.168C849.281 632.916 849.845 633.928 849.845 635.204C849.845 636.231 849.559 637.125 848.987 637.888C848.43 638.651 847.645 639.237 846.633 639.648C845.621 640.059 844.455 640.264 843.135 640.264C841.874 640.264 840.774 640.088 839.835 639.736C838.897 639.384 838.171 638.878 837.657 638.218C837.144 637.558 836.887 636.795 836.887 635.93C836.887 634.918 837.159 634.045 837.701 633.312C838.244 632.579 839.021 632.014 840.033 631.618C839.197 630.958 838.779 630.1 838.779 629.044C838.779 628.091 839.036 627.262 839.549 626.558C840.077 625.839 840.803 625.289 841.727 624.908C842.666 624.527 843.729 624.336 844.917 624.336C846.047 624.336 847.044 624.505 847.909 624.842C848.775 625.165 849.449 625.627 849.933 626.228C850.417 626.829 850.659 627.533 850.659 628.34C850.659 629.22 850.439 629.983 849.999 630.628C849.574 631.273 848.958 631.787 848.151 632.168ZM844.851 626.954C844.089 626.954 843.473 627.145 843.003 627.526C842.549 627.893 842.321 628.406 842.321 629.066C842.321 629.594 842.519 630.012 842.915 630.32C843.326 630.628 843.883 630.782 844.587 630.782C845.35 630.782 845.959 630.599 846.413 630.232C846.883 629.851 847.117 629.345 847.117 628.714C847.117 628.171 846.912 627.746 846.501 627.438C846.091 627.115 845.541 626.954 844.851 626.954ZM843.201 637.646C844.125 637.646 844.859 637.433 845.401 637.008C845.959 636.568 846.237 635.974 846.237 635.226C846.237 634.61 845.995 634.126 845.511 633.774C845.027 633.407 844.36 633.224 843.509 633.224C842.585 633.224 841.845 633.437 841.287 633.862C840.745 634.287 840.473 634.867 840.473 635.6C840.473 636.231 840.723 636.729 841.221 637.096C841.72 637.463 842.38 637.646 843.201 637.646Z" fill="#31496B"/>
                        <path d="M934.633 637.096H941.101L940.529 640H928.869L929.331 637.69L936.349 632.19C937.2 631.501 937.786 630.921 938.109 630.452C938.446 629.983 938.615 629.491 938.615 628.978C938.615 628.465 938.417 628.054 938.021 627.746C937.64 627.438 937.082 627.284 936.349 627.284C935.733 627.284 935.139 627.423 934.567 627.702C933.995 627.981 933.496 628.377 933.071 628.89L930.673 627.152C931.304 626.287 932.169 625.605 933.269 625.106C934.369 624.593 935.572 624.336 936.877 624.336C937.948 624.336 938.886 624.512 939.693 624.864C940.514 625.216 941.145 625.707 941.585 626.338C942.04 626.969 942.267 627.68 942.267 628.472C942.267 629.425 942.003 630.32 941.475 631.156C940.947 631.992 940.03 632.916 938.725 633.928L934.633 637.096ZM949.843 640.264C948.127 640.264 946.77 639.751 945.773 638.724C944.775 637.683 944.277 636.253 944.277 634.434C944.277 632.586 944.614 630.892 945.289 629.352C945.978 627.812 946.931 626.595 948.149 625.7C949.366 624.791 950.752 624.336 952.307 624.336C954.023 624.336 955.379 624.857 956.377 625.898C957.374 626.925 957.873 628.347 957.873 630.166C957.873 632.014 957.528 633.708 956.839 635.248C956.164 636.788 955.218 638.013 954.001 638.922C952.783 639.817 951.397 640.264 949.843 640.264ZM950.173 637.25C951.023 637.25 951.757 636.883 952.373 636.15C953.003 635.417 953.48 634.507 953.803 633.422C954.125 632.322 954.287 631.266 954.287 630.254C954.287 629.271 954.081 628.545 953.671 628.076C953.275 627.592 952.71 627.35 951.977 627.35C951.126 627.35 950.385 627.717 949.755 628.45C949.139 629.183 948.669 630.1 948.347 631.2C948.024 632.285 947.863 633.334 947.863 634.346C947.863 635.329 948.061 636.062 948.457 636.546C948.867 637.015 949.439 637.25 950.173 637.25ZM967.736 624.6L964.656 640H961.092L963.6 627.46H960.52L961.092 624.6H967.736ZM976.185 624.336C977.417 624.336 978.495 624.578 979.419 625.062C980.358 625.546 981.084 626.265 981.597 627.218C982.125 628.157 982.389 629.301 982.389 630.65C982.389 632.205 982.059 633.723 981.399 635.204C980.739 636.671 979.712 637.881 978.319 638.834C976.926 639.787 975.202 640.264 973.149 640.264C972.298 640.264 971.484 640.176 970.707 640C969.944 639.809 969.321 639.553 968.837 639.23L970.465 636.612C971.198 637.111 972.159 637.36 973.347 637.36C974.784 637.36 975.928 636.957 976.779 636.15C977.644 635.343 978.216 634.302 978.495 633.026C977.615 633.847 976.464 634.258 975.041 634.258C974.117 634.258 973.274 634.082 972.511 633.73C971.748 633.378 971.14 632.872 970.685 632.212C970.23 631.537 970.003 630.738 970.003 629.814C970.003 628.714 970.267 627.753 970.795 626.932C971.338 626.096 972.078 625.458 973.017 625.018C973.956 624.563 975.012 624.336 976.185 624.336ZM975.965 631.596C976.801 631.596 977.476 631.369 977.989 630.914C978.502 630.459 978.759 629.88 978.759 629.176C978.759 628.56 978.532 628.047 978.077 627.636C977.622 627.211 977.006 626.998 976.229 626.998C975.437 626.998 974.792 627.225 974.293 627.68C973.794 628.135 973.545 628.743 973.545 629.506C973.545 630.151 973.765 630.665 974.205 631.046C974.645 631.413 975.232 631.596 975.965 631.596Z" fill="#31496B"/>
                        <path d="M1064.52 637.096H1070.99L1070.42 640H1058.76L1059.22 637.69L1066.24 632.19C1067.09 631.501 1067.68 630.921 1068 630.452C1068.34 629.983 1068.5 629.491 1068.5 628.978C1068.5 628.465 1068.31 628.054 1067.91 627.746C1067.53 627.438 1066.97 627.284 1066.24 627.284C1065.62 627.284 1065.03 627.423 1064.46 627.702C1063.88 627.981 1063.39 628.377 1062.96 628.89L1060.56 627.152C1061.19 626.287 1062.06 625.605 1063.16 625.106C1064.26 624.593 1065.46 624.336 1066.77 624.336C1067.84 624.336 1068.78 624.512 1069.58 624.864C1070.4 625.216 1071.03 625.707 1071.47 626.338C1071.93 626.969 1072.16 627.68 1072.16 628.472C1072.16 629.425 1071.89 630.32 1071.36 631.156C1070.84 631.992 1069.92 632.916 1068.61 633.928L1064.52 637.096ZM1079.73 640.264C1078.02 640.264 1076.66 639.751 1075.66 638.724C1074.66 637.683 1074.17 636.253 1074.17 634.434C1074.17 632.586 1074.5 630.892 1075.18 629.352C1075.87 627.812 1076.82 626.595 1078.04 625.7C1079.26 624.791 1080.64 624.336 1082.2 624.336C1083.91 624.336 1085.27 624.857 1086.27 625.898C1087.26 626.925 1087.76 628.347 1087.76 630.166C1087.76 632.014 1087.42 633.708 1086.73 635.248C1086.05 636.788 1085.11 638.013 1083.89 638.922C1082.67 639.817 1081.29 640.264 1079.73 640.264ZM1080.06 637.25C1080.91 637.25 1081.65 636.883 1082.26 636.15C1082.89 635.417 1083.37 634.507 1083.69 633.422C1084.01 632.322 1084.18 631.266 1084.18 630.254C1084.18 629.271 1083.97 628.545 1083.56 628.076C1083.16 627.592 1082.6 627.35 1081.87 627.35C1081.02 627.35 1080.27 627.717 1079.64 628.45C1079.03 629.183 1078.56 630.1 1078.24 631.2C1077.91 632.285 1077.75 633.334 1077.75 634.346C1077.75 635.329 1077.95 636.062 1078.35 636.546C1078.76 637.015 1079.33 637.25 1080.06 637.25ZM1094.24 637.096H1100.71L1100.13 640H1088.47L1088.94 637.69L1095.95 632.19C1096.8 631.501 1097.39 630.921 1097.71 630.452C1098.05 629.983 1098.22 629.491 1098.22 628.978C1098.22 628.465 1098.02 628.054 1097.63 627.746C1097.24 627.438 1096.69 627.284 1095.95 627.284C1095.34 627.284 1094.74 627.423 1094.17 627.702C1093.6 627.981 1093.1 628.377 1092.68 628.89L1090.28 627.152C1090.91 626.287 1091.77 625.605 1092.87 625.106C1093.97 624.593 1095.18 624.336 1096.48 624.336C1097.55 624.336 1098.49 624.512 1099.3 624.864C1100.12 625.216 1100.75 625.707 1101.19 626.338C1101.64 626.969 1101.87 627.68 1101.87 628.472C1101.87 629.425 1101.61 630.32 1101.08 631.156C1100.55 631.992 1099.63 632.916 1098.33 633.928L1094.24 637.096ZM1109.45 640.264C1107.73 640.264 1106.37 639.751 1105.38 638.724C1104.38 637.683 1103.88 636.253 1103.88 634.434C1103.88 632.586 1104.22 630.892 1104.89 629.352C1105.58 627.812 1106.54 626.595 1107.75 625.7C1108.97 624.791 1110.36 624.336 1111.91 624.336C1113.63 624.336 1114.98 624.857 1115.98 625.898C1116.98 626.925 1117.48 628.347 1117.48 630.166C1117.48 632.014 1117.13 633.708 1116.44 635.248C1115.77 636.788 1114.82 638.013 1113.61 638.922C1112.39 639.817 1111 640.264 1109.45 640.264ZM1109.78 637.25C1110.63 637.25 1111.36 636.883 1111.98 636.15C1112.61 635.417 1113.08 634.507 1113.41 633.422C1113.73 632.322 1113.89 631.266 1113.89 630.254C1113.89 629.271 1113.69 628.545 1113.28 628.076C1112.88 627.592 1112.31 627.35 1111.58 627.35C1110.73 627.35 1109.99 627.717 1109.36 628.45C1108.74 629.183 1108.27 630.1 1107.95 631.2C1107.63 632.285 1107.47 633.334 1107.47 634.346C1107.47 635.329 1107.67 636.062 1108.06 636.546C1108.47 637.015 1109.04 637.25 1109.78 637.25Z" fill="#31496B"/>
                        <path d="M1199.65 637.096H1206.12L1205.54 640H1193.88L1194.35 637.69L1201.36 632.19C1202.22 631.501 1202.8 630.921 1203.12 630.452C1203.46 629.983 1203.63 629.491 1203.63 628.978C1203.63 628.465 1203.43 628.054 1203.04 627.746C1202.66 627.438 1202.1 627.284 1201.36 627.284C1200.75 627.284 1200.15 627.423 1199.58 627.702C1199.01 627.981 1198.51 628.377 1198.09 628.89L1195.69 627.152C1196.32 626.287 1197.18 625.605 1198.28 625.106C1199.38 624.593 1200.59 624.336 1201.89 624.336C1202.96 624.336 1203.9 624.512 1204.71 624.864C1205.53 625.216 1206.16 625.707 1206.6 626.338C1207.06 626.969 1207.28 627.68 1207.28 628.472C1207.28 629.425 1207.02 630.32 1206.49 631.156C1205.96 631.992 1205.05 632.916 1203.74 633.928L1199.65 637.096ZM1214.86 640.264C1213.14 640.264 1211.79 639.751 1210.79 638.724C1209.79 637.683 1209.29 636.253 1209.29 634.434C1209.29 632.586 1209.63 630.892 1210.3 629.352C1210.99 627.812 1211.95 626.595 1213.16 625.7C1214.38 624.791 1215.77 624.336 1217.32 624.336C1219.04 624.336 1220.39 624.857 1221.39 625.898C1222.39 626.925 1222.89 628.347 1222.89 630.166C1222.89 632.014 1222.54 633.708 1221.85 635.248C1221.18 636.788 1220.23 638.013 1219.02 638.922C1217.8 639.817 1216.41 640.264 1214.86 640.264ZM1215.19 637.25C1216.04 637.25 1216.77 636.883 1217.39 636.15C1218.02 635.417 1218.5 634.507 1218.82 633.422C1219.14 632.322 1219.3 631.266 1219.3 630.254C1219.3 629.271 1219.1 628.545 1218.69 628.076C1218.29 627.592 1217.73 627.35 1216.99 627.35C1216.14 627.35 1215.4 627.717 1214.77 628.45C1214.15 629.183 1213.68 630.1 1213.36 631.2C1213.04 632.285 1212.88 633.334 1212.88 634.346C1212.88 635.329 1213.08 636.062 1213.47 636.546C1213.88 637.015 1214.45 637.25 1215.19 637.25ZM1229.36 637.096H1235.83L1235.26 640H1223.6L1224.06 637.69L1231.08 632.19C1231.93 631.501 1232.52 630.921 1232.84 630.452C1233.18 629.983 1233.35 629.491 1233.35 628.978C1233.35 628.465 1233.15 628.054 1232.75 627.746C1232.37 627.438 1231.81 627.284 1231.08 627.284C1230.46 627.284 1229.87 627.423 1229.3 627.702C1228.73 627.981 1228.23 628.377 1227.8 628.89L1225.4 627.152C1226.03 626.287 1226.9 625.605 1228 625.106C1229.1 624.593 1230.3 624.336 1231.61 624.336C1232.68 624.336 1233.62 624.512 1234.42 624.864C1235.24 625.216 1235.88 625.707 1236.32 626.338C1236.77 626.969 1237 627.68 1237 628.472C1237 629.425 1236.73 630.32 1236.21 631.156C1235.68 631.992 1234.76 632.916 1233.46 633.928L1229.36 637.096ZM1246.73 624.6L1243.65 640H1240.08L1242.59 627.46H1239.51L1240.08 624.6H1246.73Z" fill="#31496B"/>
                        <defs>
                            <filter id="filter0_d" x="29.4441" y="27.7817" width="1218.86" height="584.787" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dx="24" dy="7"/>
                                <feGaussianBlur stdDeviation="1.5"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0875174 0 0 0 0 0.108349 0 0 0 0 0.295833 0 0 0 0.07 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear" x1="1" y1="0" x2="1" y2="91" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear" x1="1" y1="0" x2="1" y2="112" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear" x1="1" y1="0" x2="1" y2="152" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear" x1="1" y1="0" x2="1" y2="198" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint4_linear" x1="1" y1="0" x2="1" y2="231" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint5_linear" x1="1" y1="0" x2="1" y2="279" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint6_linear" x1="1" y1="0" x2="1" y2="370" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint7_linear" x1="1" y1="0" x2="1" y2="403" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                            <linearGradient id="paint8_linear" x1="1" y1="0" x2="1" y2="503" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#31496B" stop-opacity="0"/>
                                <stop offset="1" stop-color="#31496B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                        <img class="time-line-circle position-absolute" src="/wp-content/themes/glera/assets/images/about/circle-time-line.svg" alt="">
                    <div class="tab-menu">
                        <ul class="tabs-time-line">
                            <li><a href="#" class="tab-a active-a year year-tl2010 position-absolute" data-id="tab1"><span class="date-mob">2010</span></a></li>
                            <li><a href="#" class="tab-a year year-tl2012 position-absolute" data-id="tab2"><span class="date-mob">2012</span></a></li>
                            <li><a href="" class="tab-a year year-tl2013 position-absolute" data-id="tab3"><span class="date-mob">2013</span></a></li>
                            <li><a href="" class="tab-a year year-tl2014 position-absolute" data-id="tab4"><span class="date-mob">2014</span></a></li>
                            <li><a href="" class="tab-a year year-tl2016 position-absolute" data-id="tab5"><span class="date-mob">2016</span></a></li>
                            <li><a href="" class="tab-a year year-tl2017 position-absolute" data-id="tab6"><span class="date-mob">2017</span></a></li>
                            <li><a href="" class="tab-a year year-tl2018 position-absolute" data-id="tab7"><span class="date-mob">2018</span></a></li>
                            <li><a href="" class="tab-a year year-tl2019 position-absolute" data-id="tab8"><span class="date-mob">2019</span></a></li>
                            <li><a href="" class="tab-a year year-tl2020 position-absolute" data-id="tab9"><span class="date-mob">2020</span></a></li>
                            <li><a href="" class="tab-a year year-tl2021 position-absolute" data-id="tab10"><span class="date-mob">2021</span></a></li>
                        </ul>
                    </div><!--end of tab-menu-->
                    <div  class="tab tab-time-life text-left tab-active" data-id="tab1">
                        <div class="time-travel__info-block info-block-tl2010 position-absolute">
                            <h4 class="bg-blue" data-aos="zoom-in"><?php the_field( 'time_travel_block_1_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_1_text' ); ?></p>
                        </div>
                    </div><!--end of tab one-->
                    <div  class="tab tab-time-life text-left" data-id="tab2">
                        <div class="time-travel__info-block info-block-tl2012 position-absolute">
                            <h4 class="bg-red" data-aos="zoom-in"><?php the_field( 'time_travel_block_2_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_2_text' ); ?> </p>
                        </div>

                    </div><!--end of tab two-->
                    <div class="tab tab-time-life text-left" data-id="tab3">
                        <div class="time-travel__info-block info-block-tl2013 position-absolute">
                            <h4 class="bg-violet" data-aos="zoom-in"><?php the_field( 'time_travel_block_3_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_3_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab4">
                        <div class="time-travel__info-block info-block-tl2014 position-absolute">
                            <h4 class="bg-green" data-aos="zoom-in"><?php the_field( 'time_travel_block_4_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_4_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab5">
                        <div class="time-travel__info-block info-block-tl2016 position-absolute">
                            <h4 class="bg-red" data-aos="zoom-in"><?php the_field( 'time_travel_block_5_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_5_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div class="tab tab-time-life text-left" data-id="tab6">
                        <div class="time-travel__info-block info-block-tl2017 position-absolute">
                            <h4 class="bg-blue" data-aos="zoom-in"><?php the_field( 'time_travel_block_6_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_6_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab7">
                        <div class="time-travel__info-block info-block-tl2018 position-absolute">
                            <h4 class="bg-violet" data-aos="zoom-in"><?php the_field( 'time_travel_block_7_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_7_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab8">
                        <div class="time-travel__info-block info-block-tl2019 position-absolute">
                            <h4 class="bg-green" data-aos="zoom-in"><?php the_field( 'time_travel_block_8_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_8_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab9">
                        <div class="time-travel__info-block info-block-tl2020 position-absolute">
                            <h4 class="bg-red" data-aos="zoom-in"><?php the_field( 'time_travel_block_9_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_9_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                    <div  class="tab tab-time-life text-left" data-id="tab10">
                        <div class="time-travel__info-block info-block-tl2021 position-absolute">
                            <h4 class="bg-blue" data-aos="zoom-in"><?php the_field( 'time_travel_block_10_title' ); ?></h4>
                            <p data-aos="zoom-in"><?php the_field( 'time_travel_block_10_text' ); ?></p>
                        </div>
                    </div><!--end of tab three-->
                </div>
            </div>
        </div>
    </section>


    <section class="geography geography-about">
        <div class="container">
            <div class="position-relative">
                <h2 data-aos="zoom-in"
                    class="geography__title position-relative title-shadow-red title-h2_red subtitle"><?php the_field( 'geography_glera_title_path_1' ); ?> <span
                            class="bg-text  position-relative"><?php the_field( 'geography_glera_title_path_2' ); ?></span>
                </h2>
                <img class="position-absolute mini-maps" src="/wp-content/themes/glera/assets/images/mini-maps.svg"
                     alt="">
            </div>

            <div data-aos="zoom-in" class="title-geography" id="title-geography"></div>

            <p data-aos="zoom-in" class="geography__description"><?php the_field( 'geography_glera_caption_text' ); ?></p>

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

    <section class="remote-work">
        <div class="container">
            <div class="our-office__workflow position-relative">
                <div class="our-office__workflow-text">
                    <h3 data-aos="zoom-in"><?php the_field( 'geography_glera_remote_work_title_path_1' ); ?> <span class="text-orange"><?php the_field( 'geography_glera_remote_work_title_path_2' ); ?></span></h3>
                    <p data-aos="zoom-in"><?php the_field( 'geography_glera_remote_work_text' ); ?> </p>
                    <div data-aos="zoom-in" class="text-red geography-text position-relative"><?php the_field( 'geography_glera_remote_work_text_red' ); ?>
                    </div>
                </div>
                <div class="glera-story__video-wrap">
                    <div data-aos="zoom-in"
                         class="glera-story__video glera-story__video-a-top glera-story__robot position-relative">
                        <!--                    <video autoplay loop muted preload="/wp-content/themes/glera/assets/images/poster-video.jpg">-->
                        <!--                        <source src="/wp-content/themes/glera/assets/video/img-9070_6mfqcyLx_origin (1).mp4"-->
                        <!--                                type="video/mp4">-->
                        <!--                    </video>-->
                        <img class="glera-story__pic"
                             src="/wp-content/themes/glera/assets/images/about/post-pic.jpg" alt="">
                        <div data-aos="zoom-in" class="position-absolute glera-story__video-pic robot-post"
                             id="player-container2-test-2"></div>

                        <img class="position-absolute glera-story__video-things"
                             src="/wp-content/themes/glera/assets/images/about/post_robot.png" alt="">
                        <!--                                        <img class="position-absolute glera-story__video-circle"-->
                        <!--                                             src="/wp-content/themes/glera/assets/images/about/post_robot.png" alt="">-->
                    </div>
                </div>
                <img data-aos="zoom-in" class="position-absolute our-office__arrow"
                     src="/wp-content/themes/glera/assets/images/arrow-about-orange.svg" alt="">
            </div>
            <div data-aos="zoom-in" class="who-we-are_wrap-btn">
            <span class="wrap-btn-hover-3">
                <span class="json-anim-btn json-anim-left-red"></span>
            <a href="<?php the_field( 'geography_glera_btn_link' ); ?>" class="btn btn-red who-we-are_btn effect01"><?php the_field( 'geography_glera_btn_text' ); ?></a>
            <span class="json-anim-btn json-anim-right-red"></span>
            </span>
            </div>
        </div>
    </section>


<?php get_footer() ?>