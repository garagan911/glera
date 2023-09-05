<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glera
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


        <div class="container-fluid px-0">
            <div class="container development-director__container">
                <img class="dev-mascot-fly position-absolute"
                     src="/wp-content/themes/glera/assets/images/life/Flat_Surfing.png"
                     alt="" data-aos="zoom-in"/>
                <img class="dev-girl position-absolute" src="/wp-content/themes/glera/assets/images/jobs/girls-jobs-right.png" alt=""
                     data-aos="zoom-in"/>
                <h1 class="development-director__title" data-aos="zoom-in"><?php the_field('title_vacancy'); ?></h1>
                <p class="text-center development-director__title-caption" data-aos="zoom-in"><?php the_field('paragraph_1'); ?></p>
                <p class="text-center development-director__title-caption" data-aos="zoom-in"><?php the_field('paragraph_2'); ?></p>
                <p class="text-center development-director__title-caption" data-aos="zoom-in"><?php the_field('paragraph_3'); ?></p>
		        <?php if( get_field('paragraph_4') || get_field('link_name_1') || get_field('link_name_2') || get_field('link_name_3') ): ?>
                    <p class="text-center development-director__title-caption" data-aos="zoom-in"><?php the_field('paragraph_4'); ?> <a
                                href="<?php the_field('platform_link_1'); ?>"><?php the_field('link_name_1'); ?></a> <a href="<?php the_field('platform_link_2'); ?>"><?php the_field('link_name_2'); ?></a> <a href="<?php the_field('platform_link_3'); ?>"><?php the_field('link_name_3'); ?></a></p>
		        <?php endif; ?>

		        <?php if( get_field('paragraph_5') ): ?>
                    <p class="text-center development-director__title-caption" data-aos="zoom-in"><?php the_field('paragraph_5'); ?></p>
		        <?php endif; ?>
		        <?php if( get_field('name_link_btn') ): ?>
                    <div data-aos="zoom-in" class="position-relative text-center aos-init aos-animate">
            <span class="wrap-btn-hover-3 development-director__btn position-relative">
                <span class="json-anim-btn json-anim-left-red2-cf7"></span>
                <a href="#form" class="btn btn-red effect01"><?php the_field('name_link_btn'); ?></a>
                <span class="json-anim-btn json-anim-right-red2-cf7"></span>
            </span>
                    </div>
		        <?php endif; ?>
            </div>
            <div class="entry-content position-relative container">
                <div class="dev-convert position-absolute"><img
                            src="/wp-content/themes/glera/assets/images/jobs/sa_anim_envelope_wing.svg" alt=""></div>

                <div data-aos="zoom-in" class="dev-book-fly position-absolute mob-none" id="books-fly"></div>

                <script>
                    new spine.SpinePlayer("books-fly", {
                        jsonUrl: "/wp-content/themes/glera/assets/animations/jobs/books-fly/sa_anim_book_wings_3.json",
                        atlasUrl: "/wp-content/themes/glera/assets/animations/jobs/books-fly/sa_anim_book_wings_3.atlas",
                        showControls: false,
                        alpha: true, // Enable player translucency
                        backgroundColor: "#00000000",
                        premultiplyAlpha: true,
                        premultipliedAlpha: true
                    });
                </script>
                <div data-aos="zoom-in" class="dev-check-list position-absolute"></div>
                <div data-aos="zoom-in" class="dev-munki position-absolute"></div>
                <div class="container">
			        <?php
			        the_content(
				        sprintf(
					        wp_kses(
					        /* translators: %s: Name of current post. Only visible to screen readers */
						        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'glera' ),
						        array(
							        'span' => array(
								        'class' => array(),
							        ),
						        )
					        ),
					        wp_kses_post( get_the_title() )
				        )
			        );

			        wp_link_pages(
				        array(
					        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'glera' ),
					        'after'  => '</div>',
				        )
			        );
			        ?>
                </div>

            </div><!-- .entry-content -->
        </div>
        <footer class="entry-footer">
			<?php glera_entry_footer(); ?>
        </footer><!-- .entry-footer -->
	    <?php get_template_part( 'template-parts/jobs/form' ); ?>
    </article><!-- #post-<?php the_ID(); ?> -->


