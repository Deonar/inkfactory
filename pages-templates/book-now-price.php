<?php
/*
Template Name: Book Now Price List
*/

get_header();
?>

<div class="book-now">
    <div class="container">
        <div class="book-now__head">
            <h1 class="h1 main-title">Book Now</h1>
            <p class="adrres">
                63 Camden Street Lower Saint Kevin's, Dublin D02 FF90
            </p>
            <p class="time-work content_large text-uppercase">
                <b>
                    7 days a week from 11.00 till 19.30
                </b>
            </p>
        </div>

        <div class="content-wrapper max-w640">
            <h2 class="title">
                <?php the_title() ?>
            </h2>

            <?php the_content() ?>

        </div>

    </div>
</div>

<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>