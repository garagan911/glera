<?php
/* Template Name: Game Page */

/**
 * life-page.php
 *
 * the Game template
 *
 *
 *
 * @package glera
 *
 */
?>
<?php get_header() ?>

<section class="game-banner">
    <div class="game-banner__video">
        <!--        <img class="wrap" src="/wp-content/themes/glera/assets/images/game/wrap-video.svg" alt="">-->
        <video class="position-relative" autoplay video loop muted playsinline webkit-playinginline
               preload="/wp-content/themes/glera/assets/images/poster-video.jpg">
            <!--            <source src="/wp-content/themes/glera/assets/video/img-9070_6mfqcyLx_origin (1).mp4"-->
            <source src="/wp-content/themes/glera/assets/video/Mahjong Treasure Quest.mp4"
                    type="video/mp4">
        </video>
        <img class="game-banner__bg-top" src="/wp-content/themes/glera/assets/images/game/game-top-bg.svg" alt="">
        <img class="position-center game-banner__img-title"
             src="/wp-content/themes/glera/assets/images/game/text-top.svg" alt="">
    </div>
</section>

<section class="game-content">
    <svg class="position-absolute pulse-circle-right-games" viewbox="0 0 320 320" xmlns="http://www.w3.org/2000/svg">
        <circle cx="160" cy="160" fill="none" r="80" stroke="#FBEADF66" stroke-width="1">
            <animate attributeName="r" from="64" to="160" dur="2.5s" begin="0s" repeatCount="indefinite"/>
            <animate attributeName="opacity" from="1" to="0" dur="2.5s" begin="0s" repeatCount="indefinite"/>
        </circle>
        <circle cx="160" cy="160" fill="#FBEADF66" r="80"/>
    </svg>
    <svg class="position-center game-content__top-bg-things" width="2181" height="759" viewBox="0 0 2181 759"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0" cx="1899.5" cy="457.499" r="216.5" fill="#FBEADF"/>
        <circle opacity="0" cx="1882" cy="459.999" r="297" stroke="#D5D9D8" stroke-width="4"/>
        <path id="line" opacity="0.2"
              d="M22.6713 386.397C331.324 320.527 414.204 215.506 355.158 192.54C296.113 169.574 200.444 344.597 685.31 473.306C1063.33 573.654 1485.23 430.2 1644.64 329.855"
              stroke="url(#paint0_linear)" stroke-width="4"/>
        <circle class="pulse2" opacity="0.2" cx="217" cy="615.999" r="43" fill="#917AEB" stroke="white" stroke-width="6"/>
        <circle class="pulse1" cx="1519" cy="242.999" r="18.5" stroke="#F8A65A" stroke-width="5"/>
        <defs>
            <linearGradient id="paint0_linear" x1="-16.7132" y1="386.725" x2="1580.4" y2="410.756"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.167571" stop-color="#C58764"/>
                <stop offset="0.65953" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>

    <div class="container game-content__container">
        <div class="game-content__runes rune1 position-absolute fly1"></div>
        <div class="game-content__runes rune2 position-absolute fly"></div>
        <p data-aos="zoom-in" class="text-center"><?php the_field('top-text'); ?></p>
        <div data-aos="zoom-in" class="game-content__link-app-wrap">
<!--            <a href="">-->
<!--                <img src="/wp-content/themes/glera/assets/images/game/mac-app.png" alt="">-->
<!--            </a>-->

	        <?php $link_1 = get_field('link-play-store');
	        if( $link_1 ): ?>
                <a href="<?php echo esc_url( $link_1 ); ?>">
                    <img src="/wp-content/themes/glera/assets/images/game/play-store-1.png" alt="">
                </a>
	        <?php endif; ?>
	        <?php $link_2 = get_field('link-amazon');
	        if( $link_2 ): ?>
                <a href="<?php echo esc_url( $link_2 ); ?>">
                    <img src="/wp-content/themes/glera/assets/images/game/amazon.png" alt="">
                </a>
	        <?php endif; ?>
	        <?php $link_3 = get_field('link-app-store');
	        if( $link_3 ): ?>
                <a href="<?php echo esc_url( $link_3 ); ?>">
                    <img src="/wp-content/themes/glera/assets/images/game/app-store.png" alt="">
                </a>
	        <?php endif; ?>
        </div>
        <h2 data-aos="zoom-in" class="game-content__title subtitle"><span class="bg-text bg-red"><?php the_field('title_mob_path_1'); ?></span> <?php the_field('title_mob_path_2'); ?></h2>
        <div data-aos="zoom-in" class="title-games-downloads game-content__title"></div>
    </div>
    <div class="game-content__bg-line">
        <img class="game-content__top-bg" src="/wp-content/themes/glera/assets/images/game/bg-contant.svg" alt="">
        <div class="container slider-wrap__container">
            <div class="funny-blocks__slider">
                <div data-aos="zoom-in" class="funny-blocks__slider-wrap funny-blocks__slider1">
                    <div class="swiper-wrapper">
	                    <?php if( get_field('slider_top_img_1') ): ?>
                        <div class="swiper-slide">
                            <img src="<?php the_field('slider_top_img_1'); ?>" alt="">
                        </div>
                        <?php endif; ?>

                        <?php if( get_field('slider_top_img_2') ): ?>
                        <div class="swiper-slide">
                            <img src="<?php the_field('slider_top_img_2'); ?>"
                                    alt="">
                            </div>
                        <?php endif; ?>

                        <?php if( get_field('slider_top_img_3') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_top_img_3'); ?>"
                                    alt="">
                            </div>
                        <?php endif; ?>

                        <?php if( get_field('slider_top_img_4') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_top_img_4'); ?>"
                                    alt="">
                            </div>
                        <?php endif; ?>

                        <?php if( get_field('slider_top_img_5') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_top_img_5'); ?>"
                                    alt="">
                            </div>
                        <?php endif; ?>

                        <?php if( get_field('slider_top_img_6') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_top_img_6'); ?>"
                                    alt="">
                        </div>
                        <?php endif; ?>
	                    <?php if( get_field('slider_top_img_7') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('slider_top_img_7'); ?>"
                                        alt="">
                            </div>
	                    <?php endif; ?>
	                    <?php if( get_field('slider_top_img_8') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('slider_top_img_8'); ?>"
                                        alt="">
                            </div>
	                    <?php endif; ?>
	                    <?php if( get_field('slider_top_img_9') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('slider_top_img_9'); ?>"
                                        alt="">
                            </div>
	                    <?php endif; ?>
	                    <?php if( get_field('slider_top_img_10') ): ?>
                            <div class="swiper-slide"><img
                                        src="<?php the_field('slider_top_img_10'); ?>"
                                        alt="">
                            </div>
	                    <?php endif; ?>
                    </div>
                    <div class="controls-news position-absolute">
                        <button data-aos="zoom-in" class="slide-next-funny1 slide-next btn-slide"></button>
                        <button data-aos="zoom-in" class="slide-prev-funny1 slide-prev btn-slide"></button>
                    </div>
                </div>
            </div>
            <h3 data-aos="zoom-in" class="game-content__article-title text-center"><?php the_field('title_news_mahjong'); ?></h3>
            <div data-aos="zoom-in" class="social-link__wrap">
	            <?php $link_facebook = get_field('link_facebook');
	            if( $link_facebook ): ?>
                    <a class="social-link" href="<?php echo esc_url( $link_facebook ); ?>"><span class="icon icon-facebook"></span>Facebook</a>
	            <?php endif; ?>
	            <?php $link_instagram = get_field('link_instagram');
	            if( $link_instagram ): ?>
                    <a class="social-link" href="<?php echo esc_url( $link_instagram ); ?>"><span class="icon icon-insta"></span>Instagram</a>
	            <?php endif; ?>
<!--                <a class="social-link" href="https://www.facebook.com/MahjongTreasureQuest"><span class="icon icon-facebook"></span>Facebook</a>-->
<!--                <a class="social-link" href="https://www.instagram.com/mahjong.treasure.quest/"><span class="icon icon-insta"></span>Instagram</a>-->
<!--                <a class="social-link" href=""><span class="icon icon-twitter"></span>Twitter</a>-->
            </div>
            <article class="game-article">
<!--                <div class="game-content__runes rune3 position-absolute"></div>-->

                <div class="game-content__runes rune3 position-absolute" id="player-container2"></div>

                <script>
                    new spine.SpinePlayer("player-container2", {
                        jsonUrl: "/wp-content/themes/glera/assets/animations/games/sa_anim_book_wings_4 2/export/sa_anim_book_wings_4.json",
                        atlasUrl: "/wp-content/themes/glera/assets/animations/games/sa_anim_book_wings_4 2/export/sa_anim_book_wings_4.atlas",
                        showControls: false,
                        alpha: true, // Enable player translucency
                        backgroundColor: "#00000000",
                        premultiplyAlpha: true,
                        premultipliedAlpha: true
                    });
                </script>
                <div class="game-content__runes rune4 position-absolute fly"></div>
                <div data-aos="zoom-in" class="game-content__cat-wrap position-absolute">
<!--                    <img src="/wp-content/themes/glera/assets/images/game/text-cat.svg" alt="">-->
	                <?php if( get_field('pic-game-big') ): ?>
                        <img class="pic" src="<?php the_field('pic-game-big'); ?>" />
	                <?php endif; ?>
                </div>
                <p data-aos="zoom-in"><?php the_field('description_paragraph_1'); ?></p>
                <p data-aos="zoom-in"><?php the_field('description_paragraph_2'); ?></p>
                <p data-aos="zoom-in"><?php the_field('description_paragraph_3'); ?></p>
                <img data-aos="zoom-in" src="/wp-content/themes/glera/assets/images/games/pic-contant.svg" alt="">
                <h3 data-aos="zoom-in" class="title-3"> <?php the_field('title_you_will_have_to'); ?></h3>
                <div data-aos="zoom-in" class="article-any-text text-wrap-pic">
	                <?php the_field('text-editor'); ?>
	                <?php if( get_field('pic-game') ): ?>
                        <img class="pic" src="<?php the_field('pic-game'); ?>" />
	                <?php endif; ?>
<!--                    <img class="pic" src="/wp-content/themes/glera/assets/images/game/girl_good_buy 1.svg" alt="">-->
                </div>
            </article>
            <h2 data-aos="zoom-in" class="game-content__playstore-title subtitle"><span class="position-relative"><?php the_field('title_mob_screens'); ?></span></h2>
            <div data-aos="zoom-in" class="title-playstoree game-content__playstore-title"></div>
        </div>
    </div>
    <div class="playstore">
        <img class="position-absolute playstore__bg-top"
             src="/wp-content/themes/glera/assets/images/game/playstore-bg.svg" alt="">
        <div data-aos="zoom-in wrap-line-fly position-relative">
            <svg class="position-center our-games__line-bg" width="2585" height="391" style="opacity: 0" viewBox="0 0 2585 391" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="wow2" opacity="0.3" d="M2 389C94.6582 304.333 346.044 150.2 610.321 211C940.668 287 1134.04 406 1452.3 298C1770.56 190 1789.11 2.00163 2094.19 2C2395 1.99839 2341.28 336.999 2583 329.999" stroke="url(#paint0_linear3)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear3" x1="2239.6" y1="96.9347" x2="141.649" y2="46.0031" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="position-center our-games__line-bg" width="2585" height="514" viewBox="0 0 2585 514" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="wow1" opacity="0.3" d="M2 319C94.6582 234.334 327.179 138.5 589 51.5C913.879 -56.4529 1187.53 20.9974 1452.3 228C1648 381 1759.42 512.002 2064.5 512C2365.3 511.999 2341.28 267 2583 260" stroke="url(#paint0_linear4)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear4" x1="2239.6" y1="26.9365" x2="141.645" y2="-23.9951" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="position-center our-games__line-bg" width="2585" height="520" style="opacity: 0" viewBox="0 0 2585 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="wow3" opacity="0.3" d="M2 217C94.6582 132.334 297.526 222.723 515 392.5C706.5 542 904.694 574.613 1250 392.5C1469 277 1640.42 2.00163 1945.5 2C2246.3 1.99839 2400.5 31 2583 158" stroke="url(#paint0_linear5)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear5" x1="2239.6" y1="-75.0625" x2="141.647" y2="-125.994" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <svg class="position-center" width="1720" height="738" viewBox="0 0 1720 738" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <circle cx="1253.5" cy="694.5" r="13.5" fill="#FBEADF"/>
            <circle cx="205.5" cy="597.5" r="7.5" fill="#FBEADF"/>
            <circle cx="741.5" cy="644.5" r="7.5" fill="#B9DCF2"/>
            <circle cx="1604.5" cy="629.5" r="7.5" fill="#FBEADF"/>
            <path d="M451.455 704.979L451.455 704.979L450.934 704.458L450.934 704.458L450.586 704.11L450.586 704.11L450.355 703.879L450.355 703.879L443.467 696.988C443.378 696.899 443.302 696.804 443.12 696.561L441.12 698.061L443.12 696.561C442.997 696.397 442.976 696.356 442.951 696.306L442.881 696.167L442.838 696.102L442.832 696.089L442.819 696.059C442.81 696.038 442.796 696.007 442.781 695.973C442.775 695.96 442.769 695.946 442.762 695.931C442.241 694.683 442.505 693.147 443.467 692.185L449.255 686.395L450.297 685.353L450.297 685.353L450.413 685.237L450.413 685.237L453.712 681.936L456.143 679.504C456.524 679.124 456.975 678.854 457.504 678.673C457.89 678.56 458.268 678.5 458.6 678.5C459.023 678.5 459.427 678.571 459.772 678.697C460.081 678.809 460.406 678.988 460.792 679.289C460.912 679.396 461.015 679.475 461.068 679.515L466.036 684.484L466.325 684.774L469.161 687.611L469.972 688.421L469.972 688.421L470.666 689.116L470.666 689.116L473.445 691.896C474.871 693.322 474.806 695.485 473.525 696.734L473.514 696.745L473.503 696.757L465.862 704.4L465.11 705.153L464.184 706.079L465.816 707.711L464.183 706.079L460.768 709.495C459.429 710.835 457.308 710.835 455.969 709.495L451.455 704.979ZM442.855 696.141C442.855 696.141 442.855 696.14 442.854 696.138C442.855 696.14 442.855 696.141 442.855 696.141ZM461.12 679.554C461.12 679.554 461.119 679.553 461.117 679.551C461.119 679.553 461.12 679.554 461.12 679.554Z"
                  stroke="#FFC43A" stroke-width="5"/>
            <path opacity="0"
                  d="M-49.4588 734.712C2.90723 638.862 158.788 453.115 363.385 476.928C619.131 506.694 782.453 597.375 995.726 447.884C1209 298.393 1188.23 111.035 1411.59 69.5178C1631.81 28.5822 1653.71 365.252 1829.39 325.477"
                  stroke="url(#paint0_linear1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                  stroke-dasharray="8.8 8.8"/>
            <defs>
                <linearGradient id="paint0_linear1" x1="1535.39" y1="143.066" x2="-6.15549" y2="400.861"
                                gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF6331"/>
                    <stop offset="0.316058" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="0.506202" stop-color="#FF6331" stop-opacity="0"/>
                    <stop offset="1" stop-color="#FF6331"/>
                </linearGradient>
            </defs>
        </svg>
        <div class="playstore__slider container game-page">
            <!-- Slider main container -->
            <div data-aos="zoom-in" class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
	                <?php if( get_field('slider_bottom_img_1') ): ?>
                        <div class="swiper-slide">
                            <img src="<?php the_field('slider_bottom_img_1'); ?>" alt="">
                        </div>
	                <?php endif; ?>

	                <?php if( get_field('slider_bottom_img_2') ): ?>
                        <div class="swiper-slide">
                            <img src="<?php the_field('slider_bottom_img_2'); ?>"
                                 alt="">
                        </div>
	                <?php endif; ?>

	                <?php if( get_field('slider_bottom_img_3') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_bottom_img_3'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>

	                <?php if( get_field('slider_bottom_img_4') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_bottom_img_4'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>

	                <?php if( get_field('slider_bottom_img_5') ): ?>
                        <div class="swiper-slide">
                            <img
                                    src="<?php the_field('slider_bottom_img_5'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>

	                <?php if( get_field('slider_bottom_img_6') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_bottom_img_6'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>
	                <?php if( get_field('slider_bottom_img_7') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_bottom_img_7'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>
	                <?php if( get_field('slider_bottom_img_8') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_bottom_img_8'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>
	                <?php if( get_field('slider_bottom_img_9') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_bottom_img_9'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>
	                <?php if( get_field('slider_bottom_img_10') ): ?>
                        <div class="swiper-slide"><img
                                    src="<?php the_field('slider_bottom_img_10'); ?>"
                                    alt="">
                        </div>
	                <?php endif; ?>
                </div>
                <div class="controls-news position-absolute">
                    <button data-aos="zoom-in" class="slide-prev-funny1 slide-prev btn-slide"></button>
                    <button data-aos="zoom-in" class="slide-next-funny1 slide-next btn-slide"></button>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        //sub title
        let dataDownloads = '<?php the_field('title_json'); ?>';
        let dataPlaystore = '<?php the_field('title_screens_json'); ?>';


        let downloadsAnim = bodymovin.loadAnimation({
            container: document.querySelector('.title-games-downloads'),
            renderer: 'svg',
            autoplay: true,
            loop:true,
            path: dataDownloads
        });

        // let titlePlaystoree = document.querySelector('.title-playstoree')

        let playstoree = bodymovin.loadAnimation({
            container: document.querySelector('.title-playstoree'),
            renderer: 'svg',
            autoplay: true,
            loop:true,
            path: dataPlaystore
        });
    })
</script>

<?php get_footer() ?>
