<?php
/**
 * glera functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package glera
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('glera_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function glera_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on glera, use a find and replace
         * to change 'glera' to the name of your theme in all the template files.
         */
        load_theme_textdomain('glera', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'glera'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'glera_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'glera_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function glera_content_width()
{
    $GLOBALS['content_width'] = apply_filters('glera_content_width', 640);
}

add_action('after_setup_theme', 'glera_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Register widget areas
 * Header games menu
 */

function register_widget_areas() {

	register_sidebar( array(
		'name'          => 'Header Menu',
		'id'            => 'header__menu',
		'description'   => 'This widget area discription',
		'before_widget' => '<div class="header_games" id="header_games">',
		'after_widget'  => '</div>',
	));

}

add_action( 'widgets_init', 'register_widget_areas' );

function glera_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'glera'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'glera'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

/**
 * Register widget area below post content
 * xomisse.com/blog/widget-area-beneath-post-content
 */
function xome_widgets_init() {
	register_sidebar( array(
		'name'          => 'Widget area before vacancy post',
		'id'            => 'after-blog-widget',
		'description'   => esc_html__( 'A widget area beneath the blog post content.'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
}
add_action( 'widgets_init', 'xome_widgets_init' );

function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...' . '<a href="' . apply_filters('the_permalink', get_the_permalink()) . '" class="btn-read-more">Далее</a>';
}

add_action('widgets_init', 'glera_widgets_init');


function post_by_slug( $atts ) {
	$a = shortcode_atts( array(
		'slug' => ''
	), $atts );

	$slug = explode(',', $a['slug']);

	$args = array(
		'post_name__in' => $slug,
		'post_type'   => 'page',
		'post_status' => 'publish',
	);
	$html = '';
	$my_posts = get_posts($args);
	if( $my_posts ) :
		foreach( $my_posts as $post ) :
			echo $post->post_title;
		endforeach;
	endif;

	return $html;
}
add_shortcode( 'post_by_slug', 'post_by_slug' );

add_theme_support( 'job-manager-templates' );

/**
 * Enqueue google fonts.
 */
function wpb_add_google_fonts()
{
    wp_enqueue_style('wpb-google-fonts_Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;0,900;1,400;1,700;1,900&display=swap', false);
    wp_enqueue_style('wpb-google-fonts_Open-Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap', false);
    wp_enqueue_style('wpb-google-fonts_Gaegu', 'https://fonts.googleapis.com/css2?family=Gaegu:wght@700&display=swap', false);

}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

function my_scripts_method() {
// instead of "jquery-core" just "jquery", to disable jquery-migrate
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.5/lottie.min.js', array( 'jquery' ) );
//    wp_enqueue_script( 'lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array( 'jquery' ) );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

/**
 * Enqueue scripts and styles.
 */
function glera_scripts()
{
    wp_enqueue_style('glera-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('glera-style', 'rtl', 'replace');
    //Glera Styles
    wp_enqueue_style('glera-custom-style', get_template_directory_uri() . '/assets/style/css/style.css');
    //Glera Slick
    wp_enqueue_style('glera-slick-carousel-theme-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');
    wp_enqueue_style('glera-slick-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');

    //AOS Init
    wp_enqueue_style('glera-aos-css', 'https://unpkg.com/aos@next/dist/aos.css');
	wp_enqueue_script( 'glera-aos-js', '//unpkg.com/aos@next/dist/aos.js' );

	//LAZY load Init
	wp_enqueue_script( 'lazy-load', 'https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js' );

    //Glera Spine-Player
    wp_enqueue_style('glera-spine-player-style', 'https://esotericsoftware.com/files/spine-player/3.7/spine-player.css');

	//Glera Swiper
	wp_enqueue_style('glera-swiper-carousel-theme-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_style('glera-swiper-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');

    //GSAP Init
	wp_enqueue_script('glera-gsap',  'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js');
	wp_enqueue_script('Scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js' );
	wp_enqueue_script('SplitText', get_template_directory_uri() . '/assets/libs/gsap/SplitText.js' );
    wp_enqueue_script('gleraDrawSvg', get_template_directory_uri() . '/assets/libs/gsap/DrawSVGPlugin.js');
    wp_enqueue_script('gleraMorphSvg', get_template_directory_uri() . '/assets/libs/gsap/MorphSVGPlugin.js');
    wp_enqueue_script('gleraMotionPathSvg', get_template_directory_uri() . '/assets/libs/gsap/MotionPathPlugin.js');
    wp_enqueue_script('gleraMotionPathHelperSvg', get_template_directory_uri() . '/assets/libs/gsap/MotionPathHelper.js');
    //Slick Init
    wp_enqueue_script('glera-slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');


    //Slick Init
    wp_enqueue_script('glera-swiper-carousel', 'https://unpkg.com/swiper/swiper-bundle.min.js');

	//Spine-Player Init
	wp_enqueue_script('glera-Spine-Player-js', 'https://esotericsoftware.com/files/spine-player/3.7/spine-player.js');


	//Glera JS
    wp_enqueue_script('glera-custom-js', get_template_directory_uri() . '/assets/js/main.js',  array(), _S_VERSION, true);

	//	About page custom JS
	if (is_page(26) || is_page(761) || is_page(751)){
		wp_enqueue_script('glera-home-custom-js', get_template_directory_uri() . '/assets/js/home-animation.js',  array(), _S_VERSION, true);
	}

	//	About page custom JS
	if (is_page(37) || is_page(758) || is_page(756)){
		wp_enqueue_script('glera-about-custom-js', get_template_directory_uri() . '/assets/js/about-animation.js',  array(), _S_VERSION, true);
	}

	//	About page custom JS
	if (is_page(43) || is_page(754) || is_page(755)){
		wp_enqueue_script('glera-life-custom-js', get_template_directory_uri() . '/assets/js/life-animation.js',  array(), _S_VERSION, true);
	}

	//	About page custom JS
	if (is_page(46) || is_page(752) || is_page(753)){
		wp_enqueue_script('glera-games-custom-js', get_template_directory_uri() . '/assets/js/games-animation.js',  array(), _S_VERSION, true);
	}

	//	Jobs page custom JS
	if (is_page(49) || is_page(748) || is_page(760)){
		wp_enqueue_script('glera-jobs-custom-js', get_template_directory_uri() . '/assets/js/jobs-animation.js',  array(), _S_VERSION, true);
	}

    wp_enqueue_script('glera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}




add_action( 'wp_print_scripts', 'my_deregister_javascript', 100 );
function my_deregister_javascript() {
	if ( !is_page('development-page') ) {
		wp_deregister_script( 'contact-form-7' );
	}
}

add_action('wp_enqueue_scripts', 'glera_scripts');

function mihdan_add_defer_attribute( $tag, $handle ) {

    $handles = array(
        'glera-slick-carousel',
        'lottie'
    );

    foreach( $handles as $defer_script) {
        if ( $defer_script === $handle ) {
            return str_replace( ' src', ' defer="defer" src', $tag );
        }
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'mihdan_add_defer_attribute', 10, 2 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

