<?php
/* Template Name: 404 Content */

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package glera
 */

get_header();
?>
<div class="page-not-found">
    <svg class="position-center page-not-found-things" width="1224" height="514" viewBox="0 0 1224 514" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="13" cy="66" r="13" fill="#F2F4F2"/>
        <path d="M1118 151C1152.36 129.667 1212.69 87 1179.12 87C1137.16 87 1135.33 125.588 1172.74 133.118C1202.66 139.141 1218.05 129.353 1222 123.706" stroke="#B9DCF2" stroke-width="3"/>
        <circle cx="94.5" cy="486.5" r="23" stroke="#D4F1EA" stroke-width="9"/>
        <circle cx="629" cy="11" r="11" fill="#FBEADF"/>
    </svg>
<!--    <h1 class="title-page-hp split-text page-not-found-title" id="split">--><?php //the_field( 'title_404' ); ?><!--</h1>-->
    <h1 class="title-page-hp split-text page-not-found-title" id="split">PAGE NOT FOUND</h1>
    <div class="page-not-found-caption-title">404</div>
<!--	--><?php //$link_button = get_field( 'link_button' );
//	if ( $link_button ): ?>
<!--        <div data-aos="zoom-in" class="who-we-are_wrap-btn page-not-found-btn position-relative">-->
<!--            <span class="wrap-btn-hover-3">-->
<!--                <span class="json-anim-btn json-anim-left-red2-cf7"></span>-->
<!--            <a href="--><?php //echo esc_url( $link_button ); ?><!--"-->
<!--               class="btn btn-red who-we-are_btn effect01">--><?php //the_field( 'text_button' ); ?><!--</a>-->
<!--            <span class="json-anim-btn json-anim-right-red2-cf7"></span>-->
<!--            </span>-->
<!--        </div>-->
<!--	--><?php //endif; ?>
    <div data-aos="zoom-in" class="who-we-are_wrap-btn page-not-found-btn position-relative">
            <span class="wrap-btn-hover-3">
                <span class="json-anim-btn json-anim-left-red2-cf7"></span>
            <a href="/"
               class="btn btn-red who-we-are_btn effect01">вернуться на главную</a>
            <span class="json-anim-btn json-anim-right-red2-cf7"></span>
            </span>
    </div>

    <figure class="page-not-found-figure">
        <img src="/wp-content/themes/glera/assets/images/Homepage2х/explorer%202.png" alt="mascot"/>
    </figure>
</div>
<?php
get_footer();
