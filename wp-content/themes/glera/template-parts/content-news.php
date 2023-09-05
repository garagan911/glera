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

    <div class="entry-content entry-content__archive">
        <div class="entry-content__img">
	        <?php the_post_thumbnail(); ?>
        </div>
        <div data-aos="zoom-in" class="entry-content__text">
            <h2><?php the_title(); ?></h2>
            <p>
				<?php
				the_truncated_post( 200 );

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'glera' ),
						'after'  => '</div>',
					)
				);
				?>
            </p>
        </div>

    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'glera' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
