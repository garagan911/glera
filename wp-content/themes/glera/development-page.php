<?php
/* Template Name: Development Director Page */

/**
 * development-page.php
 *
 * the Development Director template
 *
 *
 *
 * @package glera
 *
 */
?>
<?php get_header() ?>

<section class="development-director">
    <svg class="position-center development-director__top-things" width="1497" height="828" viewBox="0 0 1497 828"
         fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.2"
              d="M1496.5 537.539C1181.5 518.039 1084 426.43 1139 394.984C1194 363.539 1314.5 522.489 854 721.489C494.973 876.638 173.5 832.667 1 757"
              stroke="url(#paint0_linear)" stroke-width="4"/>
        <path d="M1361 66C1395.36 44.6667 1455.69 2 1422.12 2C1380.16 2 1378.33 40.5882 1415.74 48.1176C1445.66 54.1412 1461.05 44.3529 1465 38.7059"
              stroke="#B9DCF2" stroke-width="3"/>
        <circle class="pulse2" cx="275.5" cy="79.5" r="23" stroke="#D4F1EA" stroke-width="9"/>
        <defs>
            <linearGradient id="paint0_linear" x1="1535.5" y1="532.039" x2="-40.4998" y2="792"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.167571" stop-color="#C58764"/>
                <stop offset="0.400327" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>
    <main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

        <!--		--><?php //echo do_shortcode( '[jobs]' ); ?>

    </main><!-- #main -->


</section>

<section class="form-dev">
    <img class="position-top-volny" src="/wp-content/themes/glera/assets/images/jobs/form-top-bg.svg" alt="">
    <img class="position-center form-dev__pig mob-show"
         src="/wp-content/themes/glera/assets/images/jobs/piggybank_pop_up.svg"
         alt="">

    <div class="position-center form-dev__pig mob-none" id="piggi"></div>

    <script>
        new spine.SpinePlayer("piggi", {
            jsonUrl: "/wp-content/themes/glera/assets/animations/jobs/pigi/piggybank_pop_up.json",
            atlasUrl: "/wp-content/themes/glera/assets/animations/jobs/pigi/piggybank_pop_up.atlas",
            showControls: false,
            alpha: true, // Enable player translucency
            backgroundColor: "#00000000",
            premultiplyAlpha: true,
            premultipliedAlpha: true
        });
    </script>
    <svg class="position-center form-dev__bg-things" width="1966" height="921" viewBox="0 0 1966 921" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3"
              d="M73.7209 734.712C126.087 638.862 281.968 453.115 486.565 476.928C742.311 506.694 905.632 597.375 1118.91 447.884C1332.18 298.393 1311.41 111.035 1534.76 69.5178C1754.99 28.5822 1776.88 365.252 1952.57 325.477"
              stroke="#DDECF5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
              stroke-dasharray="8.8 8.8"/>
        <rect class="weel" x="1598.18" y="226.402" width="19" height="19" rx="6"
              transform="rotate(-29.6591 1598.18 226.402)"
              fill="#E58243"/>
        <circle class="pulse" cx="310.68" cy="504.5" r="24.5" fill="#C2B3FB"/>
        <circle class="pulse2" opacity="0.2" cx="338.18" cy="64.9999" r="24.5" stroke="white" stroke-width="5"/>
        <path d="M1563.83 920.457C1562.6 909.333 1549.5 880.699 1563.84 879.457C1581.76 877.905 1614.13 901.965 1618.46 879.457C1622.78 856.95 1609.46 821.457 1650.46 844.457"
              stroke="#F74C47" stroke-width="4"/>
    </svg>
    <div class="container">
        <h2 data-aos="zoom-in" class="form-dev__title"><span class="bg-text bg-red">Откликнуться</span> на вакансию</h2>

        <div data-aos="zoom-in" class="form__wrapper" id="form">
			<?php echo do_shortcode( '[contact-form-7 id="53" title="job-form"]' ); ?>99
        </div>
    </div>
    <img class="position-bottom-volny jobs-bg" src="/wp-content/themes/glera/assets/images/jobs/form-bot-bg.svg" alt="">
    <div class=" form-dev__balloon"><img class="position-center"
                                         src="/wp-content/themes/glera/assets/images/jobs/form-balloon.svg"
                                         alt=""></div>
</section>

<?php get_footer() ?>
