<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glera
 */

get_header();
?>

<!--	<main id="primary" class="site-main 33 container">-->



<!--	</main>-->
    <!-- #main -->



    <div class="news-header">
        <div class="wrap-news-title position-relative">
            <span class="json-anim-btn blick-left opacity-1" id="blick-left-news"></span>
            <span class="json-anim-btn blick-right opacity-1" id="blick-right-news"></span>
            <h1 class="glera-life__title title-page position-relative title-top-things ">
                Glera <span class="text-orange">news</span>
            </h1>
        </div>

        <figure class="page-not-found-figure">
            <img src="/wp-content/themes/glera/assets/images/Homepage2х/explorer%202.png" alt="mascot">
        </figure>
    </div>
    <div class="learning position-relative news-wrapper-posts">
        <div style="    position: absolute;
    width: 100%;
    left: 0;
    top: 40%;">
            <svg class="position-center our-games__line-bg" width="2585" height="391" style="opacity: 0" viewBox="0 0 2585 391" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="wow2" opacity="0.3" d="M2 389C94.6582 304.333 346.044 150.2 610.321 211C940.668 287 1134.04 406 1452.3 298C1770.56 190 1789.11 2.00163 2094.19 2C2395 1.99839 2341.28 336.999 2583 329.999" stroke="url(#paint0_linear8)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear8" x1="2239.6" y1="96.9347" x2="141.649" y2="46.0031" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="position-center our-games__line-bg" width="2585" height="514" viewBox="0 0 2585 514" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="wow1" opacity="0.3" d="M2 319C94.6582 234.334 327.179 138.5 589 51.5C913.879 -56.4529 1187.53 20.9974 1452.3 228C1648 381 1759.42 512.002 2064.5 512C2365.3 511.999 2341.28 267 2583 260" stroke="url(#paint0_linear9)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear9" x1="2239.6" y1="26.9365" x2="141.645" y2="-23.9951" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="position-center our-games__line-bg" width="2585" height="520" style="opacity: 0" viewBox="0 0 2585 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="wow3" opacity="0.3" d="M2 217C94.6582 132.334 297.526 222.723 515 392.5C706.5 542 904.694 574.613 1250 392.5C1469 277 1640.42 2.00163 1945.5 2C2246.3 1.99839 2400.5 31 2583 158" stroke="url(#paint0_linear11)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="8.8 8.8"/>
                <defs>
                    <linearGradient id="paint0_linear11" x1="2239.6" y1="-75.0625" x2="141.647" y2="-125.994" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF6331"/>
                        <stop offset="0.468293" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="0.59375" stop-color="#FF6331" stop-opacity="0"/>
                        <stop offset="1" stop-color="#FF6331"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div data-aos="zoom-in" class="like-learning position-absolute"></div>
<!--        <div class="active-life__bottom-bg lines-bg">-->
<!--            <img src="/wp-content/themes/glera/assets/images/life/active-life-bottom-bg.svg" alt="">-->
<!--        </div>-->
        <img class="position-top-volny" src="/wp-content/themes/glera/assets/images/news/bg-top.svg" alt="">
        <div class="container active-life__container news-wrapper">
            <svg class="position-center bg-things-news" width="1616" height="1864" viewBox="0 0 1616 1864" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1527.66 864.457C1526.42 853.333 1513.32 824.699 1527.66 823.457C1545.58 821.905 1577.95 845.965 1582.28 823.457C1586.6 800.95 1573.28 765.457 1614.28 788.457" stroke="#FEC960" stroke-width="4"/>
                <path id="line" opacity="0.2" d="M1 149.539C316 130.039 413.5 38.43 358.5 6.98427C303.5 -24.4614 183 134.489 643.5 333.489C1002.53 488.638 1441 409.155 1613.5 333.489" stroke="url(#paint0_linear)" stroke-width="4"/>
                <circle class="pulse1" opacity="0.2" cx="1112" cy="177" r="7" fill="#B008B9"/>
                <circle class="pulse2" cx="1388" cy="47" r="10" fill="#F74C47"/>
                <circle class="pulse1" cx="132.5" cy="599.5" r="13.5" fill="#FBEADF"/>
                <circle class="pulse2" cx="185.5" cy="1042.5" r="7.5" fill="#FBEADF"/>
                <path class="weel" d="M242.455 1855.98L242.455 1855.98L241.934 1855.46L241.934 1855.46L241.586 1855.11L241.586 1855.11L241.355 1854.88L241.355 1854.88L234.467 1847.99C234.378 1847.9 234.302 1847.8 234.12 1847.56L232.12 1849.06L234.12 1847.56C233.997 1847.4 233.976 1847.36 233.951 1847.31L233.881 1847.17L233.838 1847.1L233.832 1847.09L233.819 1847.06C233.81 1847.04 233.796 1847.01 233.781 1846.97C233.775 1846.96 233.769 1846.95 233.762 1846.93C233.241 1845.68 233.505 1844.15 234.467 1843.19L240.255 1837.4L241.297 1836.35L241.297 1836.35L241.413 1836.24L241.413 1836.24L244.712 1832.94L247.143 1830.5C247.524 1830.12 247.975 1829.85 248.504 1829.67C248.89 1829.56 249.268 1829.5 249.6 1829.5C250.023 1829.5 250.427 1829.57 250.772 1829.7C251.081 1829.81 251.406 1829.99 251.792 1830.29C251.912 1830.4 252.015 1830.48 252.068 1830.51L257.036 1835.48L257.325 1835.77L260.161 1838.61L260.972 1839.42L260.972 1839.42L261.666 1840.12L261.666 1840.12L264.445 1842.9C265.871 1844.32 265.806 1846.49 264.525 1847.73L264.514 1847.75L264.503 1847.76L256.862 1855.4L256.11 1856.15L255.184 1857.08L256.816 1858.71L255.183 1857.08L251.768 1860.5C250.429 1861.83 248.308 1861.83 246.969 1860.5L242.455 1855.98ZM233.855 1847.14C233.855 1847.14 233.855 1847.14 233.854 1847.14C233.855 1847.14 233.855 1847.14 233.855 1847.14ZM252.12 1830.55C252.12 1830.55 252.119 1830.55 252.117 1830.55C252.119 1830.55 252.12 1830.55 252.12 1830.55Z" stroke="#FFC43A" stroke-width="5"/>
                <circle class="pulse2" cx="878" cy="707" r="24.5" stroke="#8FD4B8" stroke-width="5"/>
                <rect class="weel" x="1487" y="1492.4" width="19" height="19" rx="6" transform="rotate(-29.6591 1487 1492.4)" fill="#8FD4B8"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="-38" y1="144.039" x2="1538" y2="404" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C58764" stop-opacity="0"/>
                        <stop offset="0.240363" stop-color="#C58764"/>
                        <stop offset="0.925308" stop-color="#C58764" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
	        <?php
	        if ( have_posts() ) :

		        if ( is_home() && ! is_front_page() ) :
			        ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
		        <?php
		        endif;

		        /* Start the Loop */
		        while ( have_posts() ) :
			        the_post();

			        /*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
			        get_template_part( 'template-parts/content-news', get_post_type() );

		        endwhile;

		        the_posts_navigation();

	        else :

		        get_template_part( 'template-parts/content', 'none' );

	        endif;
	        ?>
        </div>
        <div class="lines-bg position-relative">
            <img src="/wp-content/themes/glera/assets/images/news/bg-bot.svg" alt="">
        </div>
    </div>


<?php
get_footer();
