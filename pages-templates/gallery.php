<?php
/*
Template Name: Gallery
*/

get_header();
?>

<div class="container">
    <h1 class="h1 main-title"><?php the_title(); ?></h1>

    <div class="gallery">
        <?php for ($i = 1; $i <= 6; $i++) {  ?>
            <div class="gallery__item">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery.jpg" alt="#">
                <div class="gallery__item-content">
                    <h3 class="h3">Geometric Tattoos</h3>
                    <a href="#" class="btn btn_violet btn_big">
                        <span>GO</span>
                        <span>></span>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Info Block -->
    <div class="info-block max-w640">
        <p>This year, we launched a new recipe for the Impossible Burger. We enlisted Quantis to evaluate the environmental benefit of choosing an Impossible.</p>
        <a href="#" class="btn btn_big btn_black">
            <span>Contact us</span>
            <span>></span>
        </a>
    </div>

</div>


<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>