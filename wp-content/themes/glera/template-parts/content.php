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

    <div class="entry-content news-single">
        <h1><?php the_title();?></h1>
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
	    ?>
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
