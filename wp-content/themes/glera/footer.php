<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glera
 */

?>

	<footer id="colophon" class="site-footer text-center position-relative">
		<div class="site-info container">
            <a href="/"><img src="/wp-content/themes/glera/assets/images/footer/logo-footer.svg" alt="Glera"></a>
            <nav class="nav" style="opacity: 0">
                <ul class="site-footer__links ">
                    <li class="position-relative"><a class="site-footer__link" href="">Конфиденциальность</a></li>
                    <li class="position-relative"><a class="site-footer__link" href="">Контакты</a></li>
                    <li class="position-relative"><a class="site-footer__link" href="">Поддержка</a></li>
                </ul>
            </nav>
            <div class="social-links site-footer__social-links">
                <a target="_blank" href="https://www.linkedin.com/company/gleragames" class="link linkedin"></a>
                <a target="_blank" href="http://facebook.com/gleragames" class="link facebook"></a>
                <a target="_blank" href="http://instagram.com/gleragames" class="link instagram"></a>
                <a target="_blank" href="http://vk.com/gleragames" class="link vk"></a>
            </div>
            <div class="site-footer__copyright">©<?php echo date('Y'); ?>  GleraGames</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!--<div class="cursor"></div>-->
<!--<div class="cursor2"></div>-->
<!-- Back to top button -->
<a id="button"><img width="100" height="100" src="/wp-content/themes/glera/assets/images/to-top.svg" alt=""></a>
</div><!-- #page -->
<!--</div>-->
<!--</main>-->
<?php wp_footer(); ?>

</body>
</html>
