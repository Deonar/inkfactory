<?php
/*
Template Name: FAQ
*/

get_header();
?>

<div class="container">
    <h1 class="h1 main-title">FAQ</h1>

    <div class="tab-wrapper-js">
        <div class="tabs">
            <button type="button" class="tabs__item active tab-js" data-tab="1">
                <span>Piercing</span>
            </button>
            <button type="button" class="tabs__item tab-js" data-tab="2">
                <span>Tatoos</span>
            </button>
            <button type="button" class="tabs__item tab-js" data-tab="3">
                <span>Laser</span>
            </button>
        </div>

        <div class="tabs-content__list max-w960">
            <div class="tabs-content__item tab-content-js" data-tab="1">
                <?php for ($i = 1; $i <= 6; $i++) {  ?>
                    <div class="accordion-wrapper-js accordion__item">
                        <div class="accordion-tab-js accordion__tab">
                            <span class="accordion__arrow">></span>
                            <h2 class="h2 accordion__title">
                                how much will my piercing hurt?
                            </h2>
                        </div>

                        <div class="accordion-content-js accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam veniam quo officiis culpa optio iusto corporis molestiae quod pariatur consectetur ipsum,
                                sint temporibus quidem facilis! Dignissimos vel voluptatem enim magnam.
                            </p>
                        </div>

                    </div>
                <?php } ?>
            </div>

            <div class="tabs-content__item tab-content-js" data-tab="2">
                <?php for ($i = 1; $i <= 2; $i++) {  ?>
                    <div class="accordion-wrapper-js accordion__item">
                        <div class="accordion-tab-js accordion__tab">
                            <span class="accordion__arrow">></span>
                            <h2 class="h2 accordion__title">
                                how much will my piercing hurt?
                            </h2>
                        </div>

                        <div class="accordion-content-js accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam veniam quo officiis culpa optio iusto corporis molestiae quod pariatur consectetur ipsum,
                                sint temporibus quidem facilis! Dignissimos vel voluptatem enim magnam.
                            </p>
                        </div>

                    </div>
                <?php } ?>
            </div>

            <div class="tabs-content__item tab-content-js" data-tab="3">
                <?php for ($i = 1; $i <= 3; $i++) {  ?>
                    <div class="accordion-wrapper-js accordion__item">
                        <div class="accordion-tab-js accordion__tab">
                            <span class="accordion__arrow">></span>
                            <h2 class="h2 accordion__title">
                                how much will my piercing hurt?
                            </h2>
                        </div>

                        <div class="accordion-content-js accordion__content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quisquam veniam quo officiis culpa optio iusto corporis molestiae quod pariatur consectetur ipsum,
                                sint temporibus quidem facilis! Dignissimos vel voluptatem enim magnam.
                            </p>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

</div>


<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>