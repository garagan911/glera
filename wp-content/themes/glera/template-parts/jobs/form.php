<?php
/**
 * prints the popular subjects section
 *
 * @package glera
 *
 *
 * @link
 *
 */
?>

<?php

/*

TODO:

*/

?>

<section class="form-dev">
    <img class="position-top-volny" src="/wp-content/themes/glera/assets/images/jobs/form-top-bg.svg" alt="">
    <img class="position-center form-dev__pig mob-show" src="/wp-content/themes/glera/assets/images/jobs/piggybank_pop_up.svg"
         alt="">

    <div class="position-center form-dev__pig mob-none" id="piggi" ></div>

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
        <rect class="weel" x="1598.18" y="226.402" width="19" height="19" rx="6" transform="rotate(-29.6591 1598.18 226.402)"
              fill="#E58243"/>
        <circle class="pulse" cx="310.68" cy="504.5" r="24.5" fill="#C2B3FB"/>
        <circle class="pulse2" opacity="0.2" cx="338.18" cy="64.9999" r="24.5" stroke="white" stroke-width="5"/>
        <path d="M1563.83 920.457C1562.6 909.333 1549.5 880.699 1563.84 879.457C1581.76 877.905 1614.13 901.965 1618.46 879.457C1622.78 856.95 1609.46 821.457 1650.46 844.457"
              stroke="#F74C47" stroke-width="4"/>
    </svg>
    <div class="container">
        <h2 data-aos="zoom-in" class="form-dev__title"><span class="bg-text bg-red">Откликнуться</span> на вакансию</h2>

        <div data-aos="zoom-in" class="form__wrapper" id="form">
			<?php echo do_shortcode( '[contact-form-7 id="53" title="job-form"]' ); ?>
        </div>
    </div>
    <img class="position-bottom-volny jobs-bg" src="/wp-content/themes/glera/assets/images/jobs/form-bot-bg.svg" alt="">
    <div class=" form-dev__balloon"><img class="position-center" src="/wp-content/themes/glera/assets/images/jobs/form-balloon.svg"
                                         alt=""></div>
</section>
