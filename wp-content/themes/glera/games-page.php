<?php
/* Template Name: Glera Games Page */

/**
 * games-page.php
 *
 * the Glera Games template
 *
 *
 *
 * @package glera
 *
 */
?>
<?php get_header() ?>

<section class="glera-games section-top">
    <svg class="position-absolute glera-life__things-top" width="1015" height="779" viewBox="0 0 1015 779" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3"
              d="M1.00024 634C34.1201 594.039 127.038 492.551 246.164 490.457C424.604 487.321 526.944 558.317 692.693 479.579C828.122 415.244 753.077 180.208 937.837 172.951"
              stroke="#43B97F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
              stroke-dasharray="8.8 8.8"/>
        <circle opacity="0.2" cx="570.5" cy="27.5" r="25" stroke="#FD7E40" stroke-width="5"/>
        <circle cx="121.5" cy="393.5" r="12" stroke="#BEEFD7" stroke-width="5"/>
        <path d="M453 690C487.363 668.667 547.695 626 514.123 626C472.158 626 470.333 664.588 507.737 672.118C537.66 678.141 553.047 668.353 557 662.706"
              stroke="#B9DCF2" stroke-width="3"/>
    </svg>
    <svg class="glera-jobs__bg-top-cirle position-absolute circle-big" width="1474" height="1361" viewBox="0 0 1474 1361"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse id="ellipse-violet" cx="737" cy="680.5" rx="737" ry="680.5" style="transform-origin: right top" fill="#CCE9FB"/>
        <path opacity="0.3"
              d="M1450 688C1450 1043.52 1137.65 1332 752 1332C366.351 1332 54 1043.52 54 688C54 332.477 366.351 44 752 44C1137.65 44 1450 332.477 1450 688Z"
              stroke="white" stroke-width="4"/>
        <ellipse cx="749" cy="687.5" rx="654" ry="603.5" fill="#FDE6D7"/>
        <circle opacity="0.3" cx="703" cy="852" r="19" fill="white"/>
    </svg>
    <div class="position-absolute glera-games__animation-booksfly" id="player-container-booksfly"
         style="width: 132px; height: 191px;"></div>

    <div class="container glera-life__container">
        <div class="glera-life__row">
            <div class="glera-life__title-wrap">
                <h1 class="glera-life__title title-page position-relative">
                    Glera<span class="text-orange"> Games</span>
                </h1>
                <p class="glera-life__cloud-text position-relative"><span
                            class="text-red">Хотите отправиться с нами в увлекательное приключение? </span> Проверяйте актуальные вакансии и присоединяйтесь к команде!</p>
            </div>
            <div class="glera-life__video-wrap position-relative glera-games__video-wrap">
                <img src="/wp-content/themes/glera/assets/images/games/games-top-pic-v2.svg" alt="">
                <div class="mascot position-absolute" id="mascot"></div>
            </div>
        </div>
    </div>
</section>

<section class="mahjong">
    <img class="position-top-volny" src="/wp-content/themes/glera/assets/images/games/top-bg.svg" alt="">
    <img class="position-bottom-volny jobs-bg" src="/wp-content/themes/glera/assets/images/games/bottom-bg.svg" alt="">
    <img class="position-center mahjong__bg-line" src="/wp-content/themes/glera/assets/images/games/mahjong-line-bg.svg" alt="">
    <div class="position-absolute mahjong__animation-bob" id="player-container1"
         style="width: 223px; height: 211px;"></div>
    <div class="position-absolute mahjong__animation-fontan" id="player-fountain"
         style="width: 223px; height: 211px;"></div>
    <div class="container">
        <div class="mahjong__row">
            <div class="mahjong__animation position-relative">
                <div class="mahjong__pic-1 mahjong__pic position-absolute"></div>
                <div class="mahjong__pic-2 mahjong__pic position-absolute"></div>
                <svg class="position-center" width="700" height="623" viewBox="0 0 700 623" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <circle class="mahjong-animate-1" opacity="0.4" cx="566" cy="455" r="133.5" stroke="#D1C2FC"/>
                    <circle class="mahjong-animate-2" cx="184.5" cy="236.5" r="184.5" fill="#B9DCF2"/>
                    <circle class="mahjong-animate-3" cx="559" cy="452" r="109" fill="#FBEADF"/>
                    <path d="M66 191.844C66 171.661 79.2037 153.854 98.5163 147.991L526.858 17.9545C556.293 9.01837 586 31.0453 586 61.8074V431.156C586 451.339 572.796 469.146 553.484 475.009L125.142 605.046C95.7066 613.982 66 591.955 66 561.193L66 191.844Z"
                          fill="url(#paint0_linear)"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="521.138" y1="0.619005" x2="64.8493" y2="652.245"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#CDF2EE"/>
                            <stop offset="1" stop-color="#FFE6CD"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="" id="player-container2" style="width: 506px; height: 551px;"></div>
<!--                <div class="" id="player-container2-test" style="width: 506px; height: 551px;"></div>-->
<!--                <div class="" id="player-container2-test-2" style="width: 506px; height: 551px;"></div>-->

<!--                <div id="player"></div>-->
                <script>
                    new spine.SpinePlayer("player-container2", {
                        jsonUrl: "/wp-content/themes/glera/assets/animations/estate_sector_restored 2/export/estate_sector_restored.json",
                        atlasUrl: "/wp-content/themes/glera/assets/animations/estate_sector_restored 2/export/estate_sector_restored.atlas",
                        showControls: false,
                        alpha: true, // Enable player translucency
                        backgroundColor: "#00000000",
                        premultiplyAlpha: true,
                        premultipliedAlpha: false
                    });
                </script>

                <img class="position-relative mahjong__title-pic" src="/wp-content/themes/glera/assets/images/games/logo_mtq_en 1.svg" alt="">
            </div>
            <div class="mahjong__text">
                <h3>Mahjong: Treasure Quest</h3>
                <p>Приключения юной волшебницы Софи и ее верного друга, говорящего кота Оливера. Вместе они отправляются
                    в увлекательное путешествие по летающим островам Волшебной Страны и уровням маджонга.</p>
                <a href="" class="btn btn-red who-we-are_btn">Play Game</a>
            </div>
        </div>
</section>

<section class="coming-soon">
    <svg class="position-center" width="2265" height="1370" viewBox="0 0 2265 1370" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.2" d="M2264 173.595C1949 154.095 1578 107.596 1638 21.5795C1698 -64.437 1813.5 149.084 1353 348.084C993.973 503.233 555.5 423.751 383 348.084" stroke="url(#paint0_linear)" stroke-width="3"/>
        <path d="M950.252 184.723L950.246 184.737L950.24 184.752L943.979 200.179L943.363 201.698L942.604 203.568L939.806 210.464C938.428 213.859 934.629 215.464 931.235 214.085L922.12 210.382L921.191 212.668L922.12 210.382L921.068 209.955L921.068 209.955L920.367 209.67L920.367 209.67L919.9 209.48L919.9 209.48L905.994 203.831C905.713 203.717 905.471 203.58 905.074 203.349C904.762 203.167 904.632 203.075 904.483 202.948L904.365 202.847L904.246 202.768C904.24 202.763 904.227 202.752 904.205 202.732C904.183 202.711 904.165 202.694 904.135 202.665C904.124 202.655 904.111 202.643 904.095 202.628C904.063 202.597 904.009 202.546 903.945 202.489C902.071 200.669 901.361 197.743 902.371 195.255L907.114 183.568L907.967 181.464L907.967 181.464L908.062 181.231L908.062 181.231L910.766 174.569L912.758 169.66C913.16 168.67 913.776 167.845 914.564 167.145C915.129 166.682 915.746 166.288 916.369 166.025C917.104 165.714 917.874 165.534 918.606 165.497C919.295 165.462 920.02 165.549 920.877 165.783C921.093 165.86 921.275 165.905 921.362 165.927C921.368 165.928 921.374 165.93 921.38 165.931C921.399 165.936 921.414 165.94 921.425 165.942L931.542 170.052L932.127 170.29L933.068 167.973L932.127 170.29L937.853 172.616L939.488 173.28L940.429 170.964L939.488 173.28L940.891 173.85L946.5 176.128C950.049 177.57 951.623 181.462 950.252 184.723ZM921.376 165.923L921.377 165.923C921.377 165.923 921.376 165.923 921.376 165.923L922.312 163.617L921.376 165.923Z" stroke="#B9DCF2" stroke-width="5"/>
        <path d="M376.655 261.149C375.419 250.024 362.319 221.39 376.655 220.149C394.575 218.596 426.954 242.656 431.279 220.149C435.605 197.641 422.279 162.148 463.279 185.149" stroke="#FEC960" stroke-width="4"/>
        <circle opacity="0.3" cx="165.5" cy="393.191" r="163.5" stroke="#D5D9D8" stroke-width="4"/>
        <circle opacity="0.4" cx="175" cy="391.691" r="120" fill="#FBEADF"/>
        <path d="M343.455 890.67L343.455 890.67L342.934 890.149L342.934 890.149L342.586 889.802L342.586 889.802L342.355 889.57L342.355 889.57L335.467 882.68C335.378 882.591 335.302 882.495 335.12 882.253L333.12 883.752L335.12 882.253C334.997 882.089 334.976 882.047 334.951 881.998L334.881 881.859L334.838 881.794L334.832 881.78L334.819 881.75C334.81 881.729 334.796 881.698 334.781 881.664C334.775 881.652 334.769 881.638 334.762 881.623C334.241 880.374 334.505 878.839 335.467 877.877L341.255 872.086L342.297 871.044L342.297 871.044L342.413 870.928L342.413 870.928L345.712 867.628L348.143 865.196C348.524 864.815 348.975 864.546 349.504 864.365C349.89 864.252 350.268 864.191 350.6 864.191C351.023 864.191 351.427 864.263 351.772 864.388C352.081 864.501 352.406 864.68 352.792 864.981C352.912 865.088 353.015 865.167 353.068 865.206L358.036 870.176L358.325 870.465L361.161 873.302L361.972 874.113L361.972 874.113L362.666 874.808L362.666 874.808L365.445 877.587C366.871 879.014 366.806 881.177 365.525 882.426L365.514 882.437L365.503 882.448L357.862 890.091L357.11 890.844L356.184 891.771L357.816 893.402L356.183 891.771L352.768 895.187C351.429 896.526 349.308 896.526 347.969 895.187L343.455 890.67ZM334.855 881.832C334.855 881.832 334.855 881.832 334.854 881.83C334.855 881.832 334.855 881.832 334.855 881.832ZM353.12 865.246C353.12 865.246 353.119 865.245 353.117 865.243C353.119 865.245 353.12 865.246 353.12 865.246Z" stroke="#FFC43A" stroke-width="5"/>
        <circle cx="1532" cy="755.691" r="10" fill="#EAEAEA"/>
        <path d="M1515 1368.69C1549.36 1347.36 1609.69 1304.69 1576.12 1304.69C1534.16 1304.69 1532.33 1343.28 1569.74 1350.81C1599.66 1356.83 1615.05 1347.04 1619 1341.4" stroke="#B9DCF2" stroke-width="3"/>
        <circle opacity="0.4" cx="1146" cy="843.691" r="10" fill="#FEC960"/>
        <defs>
            <linearGradient id="paint0_linear" x1="2034.5" y1="158.634" x2="458.499" y2="418.596" gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.240363" stop-color="#C58764"/>
                <stop offset="0.925308" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>
    <div class="container">
        <div class="coming-soon__grid">
            <div class="coming-soon__text">
                <h4 class="coming-soon__text-title">
                    RiddleRoad
                </h4>
                <p>Интересные механики, необычные ивенты и тысячи уровней популярной головоломки, завёрнутые в
                    потрясающий сеттинг с первоклассным артом и запоминающимеся персонажами.</p>
            </div>
            <div class="coming-soon__img position-relative">
                <img class="coming-soon__pic" src="/wp-content/themes/glera/assets/images/comming-soon1.svg" alt="">
                <a class="coming-soon__btn position-absolute d-inline-block coming-soon-riddleroad" href=""><img class="" src="/wp-content/themes/glera/assets/images/games/btn-coming-soon.svg" alt=""></a>
            </div>
            <div class="coming-soon__img position-relative">
                <img class="coming-soon__pic" src="/wp-content/themes/glera/assets/images/games/girl-coming-soon.svg" alt="">
                <a class="coming-soon__btn position-absolute d-inline-block coming-soon-retrotrip" href=""><img class="" src="/wp-content/themes/glera/assets/images/games/btn-coming-soon-retro.svg" alt=""></a>
            </div>
            <div class="coming-soon__text">
                <h4 class="coming-soon__text-title">
                    Retro Trip
                </h4>
                <p>Красочные локации, ностальгическое настроение 80-х, персонажи, в которых вы непременно узнаете своих
                    друзей и соседей, поиски сокровищ, загадки и головоломки и всё это с применением необычных
                    механик.</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
