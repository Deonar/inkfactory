<?php
/*
Template Name: Artists
*/

get_header();
?>

<div class="container">
    <h1 class="h1 main-title"><?php the_title() ?></h1>

    <div class="content-wrapper max-w960">
        <?php the_content() ?>
    </div>


    <div class="tab-wrapper-js">
        <div class="tabs">
            <button type="button" class="tabs__item active tab-js" data-tab="1">
                <span>Piercing</span>
            </button>
            <button type="button" class="tabs__item tab-js" data-tab="2">
                <span>Tatoos</span>
            </button>
            <button type="button" class="tabs__item tab-js" data-tab="3">
                <span>Barbers</span>
            </button>
        </div>

        <div class="tabs-content__list">
            <div class="tabs-content__item tab-content-js" data-tab="1">
                <div class="accordion__wrapper">
                    <div class="artists">
                        <div class="artists__wrapper">
                            <?php for ($i = 1; $i <= 6; $i++) {  ?>

                                <div class="artists-item">
                                    <div class="artists__img">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/artist.jpg" alt="#">
                                    </div>
                                    <div class="artists__content">
                                        <h3 class="h3 artists__title">anna vintur</h3>
                                        <p class="artists__text">This one-of-a-kind party season requires a fresh approach to styling typically formal pieces. Look to @marcforne’s edit of the season’s best tailoring and playful statement designs, for a mix that’s right for now lorem</p>
                                        <a href="#" class="artists__link btn btn_black btn_small">
                                            <span>View Profile</span>
                                            <span> &gt;</span>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabs-content__item tab-content-js" data-tab="2">
                <div class="accordion__wrapper">
                    <div class="artists">
                        <div class="artists__wrapper">
                            <?php for ($i = 1; $i <= 2; $i++) {  ?>

                                <div class="artists-item">
                                    <div class="artists__img">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/artist.jpg" alt="#">
                                    </div>
                                    <div class="artists__content">
                                        <h3 class="h3 artists__title">Evva vintur</h3>
                                        <p class="artists__text">This one-of-a-kind party season requires a fresh approach to styling typically formal pieces. Look to @marcforne’s edit of the season’s best tailoring and playful statement designs, for a mix that’s right for now lorem</p>
                                        <a href="#" class="artists__link btn btn_black btn_small">
                                            <span>View Profile</span>
                                            <span> &gt;</span>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tabs-content__item tab-content-js" data-tab="3">
                <div class="accordion__wrapper">
                    <div class="artists">
                        <div class="artists__wrapper">
                            <?php for ($i = 1; $i <= 3; $i++) {  ?>

                                <div class="artists-item">
                                    <div class="artists__img">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/artist.jpg" alt="#">
                                    </div>
                                    <div class="artists__content">
                                        <h3 class="h3 artists__title">anna vintur</h3>
                                        <p class="artists__text">This one-of-a-kind party season requires a fresh approach to styling typically formal pieces. Look to @marcforne’s edit of the season’s best tailoring and playful statement designs, for a mix that’s right for now lorem</p>
                                        <a href="#" class="artists__link btn btn_black btn_small">
                                            <span>View Profile</span>
                                            <span> &gt;</span>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Info Block -->
    <div class="info-block max-w640">
        <p>This year, we launched a new recipe for the Impossible Burger. We enlisted Quantis to evaluate the environmental benefit of choosing an Impossible Burger over a burger from a cow, using science-based life cycle assessment (LCA). Here are the findings -- to be incorporated into our strategy and shared with the world.</p>
    </div>
</div>


<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>