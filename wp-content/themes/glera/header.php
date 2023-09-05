<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Glera Games</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--<main class="viewport">-->
<!--    <div id="scroll-container" class="scroll-container">-->
<div style="display: none" class="preloader">
    <div class="preloader__inner text-center">
<!--        <img src="/wp-content/themes/glera/assets/images/logo.svg" alt="Glera">-->
        <span class="preloader-anim"></span>
<!--        <div style="margin-top: -40px" class="progress-container">-->
<!--            <div class="progress"></div>-->
<!--        </div>-->
    </div>
</div>

<script>
    let getPreloader = document.getElementsByClassName('preloader');
    getPreloader[0].style.display = 'flex';
</script>
<!--<div class="cursor cursor--small"></div>-->
<!--<canvas class="cursor cursor--canvas"></canvas>-->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'glera' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <a class="logo" href="/">
                <img class="dark-logo" src="/wp-content/themes/glera/assets/images/logo.svg" alt="Glera">
                <img class="white-logo" src="/wp-content/themes/glera/assets/images/logo-white.svg" alt="Glera">
            </a>
		</div><!-- .site-branding -->
        <button class="glera__menu-toggle">
            <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 14.25C12 14.9404 11.4404 15.5 10.75 15.5H2C1.30964 15.5 0.75 14.9404 0.75 14.25V14.25C0.75 13.5596 1.30964 13 2 13H10.75C11.4404 13 12 13.5596 12 14.25V14.25ZM23.25 8C23.25 8.69036 22.6904 9.25 22 9.25H2C1.30964 9.25 0.75 8.69036 0.75 8V8C0.75 7.30964 1.30964 6.75 2 6.75H22C22.6904 6.75 23.25 7.30964 23.25 8V8ZM23.25 1.75C23.25 2.44036 22.6904 3 22 3H13.25C12.5596 3 12 2.44036 12 1.75V1.75C12 1.05964 12.5596 0.5 13.25 0.5H22C22.6904 0.5 23.25 1.05964 23.25 1.75V1.75Z" fill="#31496B"/>
            </svg>
        </button>
		<nav id="site-navigation" class="main-navigation">
            <svg class="mob-show bg-mog" width="243" height="500" viewBox="0 0 243 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="493" r="7" fill="#F2F4F2"/>
                <circle cx="235" cy="445" r="7" fill="#FBEADF"/>
                <circle cx="236" cy="7" r="7" fill="#F2F4F2"/>
                <rect y="84.9175" width="16" height="16" rx="6" transform="rotate(-29.6591 0 84.9175)" fill="#B9DCF2"/>
            </svg>
<!--			<button   aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'glera' ); ?><!--</button>-->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			<?php dynamic_sidebar( 'header__menu' ); ?>
<!--            <div class="header_games" id="header_games">-->
<!--                <div class="header_games-game">-->
<!--                    <img class="header_games-game-pic" src="/wp-content/themes/glera/assets/images/header/mahjong.png" alt="mahjong">-->
<!--                    <div class="header_games-game-content">-->
<!--                        <h3>Mahjong Treasure Quest</h3>-->
<!--                        <p>Приключения юной волшебницы Софи и ее верного друга, говорящего кота Оливера.</p>-->
<!--                    </div>-->
<!--                    <a class="header_games-game-link slide-prev btn-slide slick-arrow" href="/mahjong-game/"></a>-->
<!--                </div>-->
<!--                <div class="header_games-game">-->
<!--                    <img class="header_games-game-pic" src="/wp-content/themes/glera/assets/images/header/riddle.png" alt="mahjong">-->
<!--                    <div class="header_games-game-content">-->
<!--                        <h3>RiddleRoad</h3>-->
<!--                        <p>Расследования талантливой журналистки Эбби в загадочном городке Олдбридж.</p>-->
<!--                    </div>-->
<!--                    <a class="header_games-game-link slide-prev btn-slide slick-arrow" href=""></a>-->
<!--                </div>-->
<!--            </div>-->

            <div class="social-links">
                <div class="lang"><?php do_action('wpml_add_language_selector'); ?></div>
                <a target="_blank" href="https://www.linkedin.com/company/gleragames" class="link linkedin"></a>
                <a target="_blank" href="http://facebook.com/gleragames" class="link facebook"></a>
                <a target="_blank" href="http://instagram.com/gleragames" class="link instagram"></a>
                <a target="_blank" href="http://vk.com/gleragames" class="link vk"></a>
            </div>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->
