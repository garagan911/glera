<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package glera
 */

get_header();
?>

    <main id="primary" class="site-main single-main">
        <div class="container">
            <svg class="position-center single-main__bg-things" width="1219" height="1132" viewBox="0 0 1219 1132" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="pulse" cx="1117" cy="1121" r="11" fill="#FBEADF"/>
                <path d="M1113 66C1147.36 44.6667 1207.69 2 1174.12 2C1132.16 2 1130.33 40.5882 1167.74 48.1176C1197.66 54.1412 1213.05 44.3529 1217 38.7059" stroke="#B9DCF2" stroke-width="3"/>
                <circle class="pulse1" cx="27.5" cy="79.5" r="23" stroke="#D4F1EA" stroke-width="9"/>
            </svg>
            <!--        <div id="below-blog-widget-area" class="widget-area"-->
            <!--             role="complementary">--><?php //dynamic_sidebar( 'after-blog-widget' ); ?><!--</div>-->
	        <?php
	        while ( have_posts() ) :
		        the_post();

		        get_template_part( 'template-parts/content', get_post_type() );

		        the_post_navigation(
			        array(
				        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'glera' ),
				        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'glera' ) ,
			        )
		        );

		        // If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

	        endwhile; // End of the loop.
	        ?>

	        <?php get_template_part('template-parts/footer-corousel/resent-post'); ?>
        </div>
    </main><!-- #main -->

<?php

get_footer();
