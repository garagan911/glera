<?php
/**
 * prints the popular subjects section
 *
 * @package glera
 *
 *
 * @link
 *
 */
?>

<?php

/*

TODO:

*/

?>

<div class="container our-news__container">
<!--    <img data-aos="zoom-in" class="position-absolute our-news__house"-->
<!--         src=""-->
<!--         alt="">-->

    <picture data-aos="zoom-in" class="position-absolute our-news__house">
        <source srcset="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final-1.png" media="(max-width: 991.98px)">
        <img src="/wp-content/themes/glera/assets/images/Homepage2х/meta_3_final 1.png" alt="" media="(min-width: 992px)">
    </picture>

    <h2 data-aos="zoom-in" class="our-news__title our-news__title-hp title-shadow-red title-h2_red subtitle"><span
                class="text-middle-blue"><?php the_field( 'our_news_title_mobile_path_1' ); ?></span> <?php the_field( 'our_news_title_mobile_path_2' ); ?></h2>
    <div data-aos="zoom-in" class="title-our-news" id="title-our-news"></div>
    <div class="our-news__slide1r-wrap position-relative">
        <!--            <div class="our-news__slider">-->
        <!--                <div data-aos="zoom-in" class="our-news__slider-item first position-relative">-->
        <!--                    <div class="slick-img">-->
        <!--                        <img src="/wp-content/themes/glera/assets/images/Group 46779.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="slick-title">Glera на SkillsUp</div>-->
        <!--                    <p class="slick-text">В рамках онлайн ивента SkillsUp - Ксения Валпуцкая и Кристина Колесникова-->
        <!--                        делились своим опытом в создании персонажей, а также рассказывали о том, как построить карьеру-->
        <!--                        художника в геймдеве.</p>-->
        <!--                </div>-->
        <!--                <div data-aos="zoom-in" class="our-news__slider-item">-->
        <!--                    <div class="slick-img">-->
        <!--                        <img src="/wp-content/themes/glera/assets/images/slide-2-home.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="slick-title">Летний ивент в Вильнюсе</div>-->
        <!--                    <p class="slick-text">Этим летом в Вильнюсе было жарко! Вейкборд, гольф, огненное шоу, прекрасная-->
        <!--                        еда и танцы до упаду. Это был незабываемый вечер в компании замечательных коллег!</p>-->
        <!--                </div>-->
        <!--                <div data-aos="zoom-in" class="our-news__slider-item">-->
        <!--                    <div class="slick-img">-->
        <!--                        <img src="/wp-content/themes/glera/assets/images/Group 46778.png" alt="">-->
        <!--                    </div>-->
        <!--                    <div class="slick-title">Летний сбор в Минске</div>-->
        <!--                    <p class="slick-text">В Минске мы собрались за городом, где отлично проверили время в кругу наших-->
        <!--                        весёлых коллег: играли в игры, общались и наслаждались тёплым летним днём!</p>-->
        <!--                </div>-->
        <!--            </div>-->



	    <?php echo do_shortcode('[recent_post_carousel design="design-1"]'); ?>
        <div data-aos="zoom-in" id="controls-news" class="controls-news position-absolute"></div>
    </div>



</div>
