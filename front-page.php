<?php
/*
Template Name: Home
*/
?>
<?php
get_header(); ?>

<main class="page-wrapper">

    <div class="hero-block">
        <div class="container">
            <div class="hero-block__wrapp">
                <?php
                wp_nav_menu([
                    'theme_location'  => 'hero-menu',
                    'container'       => false,
                    'menu_class'      => 'hero-menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]);
                ?>

                <div class="hero-slider hero-slider-js swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg" class="img-responsive" alt="#">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg" class="img-responsive" alt="#">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="hero-block__text">
                    <h1 class="hero-block__title">
                        Discover your new style
                    </h1>
                    <span>
                        and we<br>
                        will help you<br>
                        with that.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php get_template_part('template-parts/cards') ?>

        <?php get_template_part('template-parts/subscribe') ?>
    </div>

</main>

<?php
get_footer(); ?>