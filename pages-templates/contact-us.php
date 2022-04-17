<?php
/*
Template Name: Contact Us
*/

get_header();
?>

<div class="container">

    <h1 class="h1 main-title">Contact us</h1>

    <div class="contact-us__head">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="content-wrapper">
                    <h3 class="h3">We love when you get in <br> touch! Choose a tab below <br> that best fits your topic.</h3>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="content-wrapper">
                    <p>Before you fill in our contact forms, why not read through out list of FAQs below, and see if that answers any of your questions before booking a consultation.</p>
                    <p>If you don’t like our contact forms – worry not, go ahead and give us a call @ tel: +353 16708641</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w960">
        <?php for ($i = 1; $i <= 5; $i++) {  ?>
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


        <!-- work hours -->
        <div class="work-hours">
            <div class="work-hours-info">
                <p class="content_small">
                    Working hours
                </p>
                <p class="content_large mb-0">
                    mon - sun <br>11 am to 7 pm
                </p>
            </div>
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/work.jpg" alt="#">
        </div>

        <!-- map -->
        <div class="contact-us-map">
            <div class="content-wrapper">
                <h3 class="h3 strong">OUR DUBLIN TATTOO & PIERCING STUDIOS</h3>

                <div class="row">

                    <div class="col-12 col-lg-6 mb-40">
                        <div class="map">
                            <div class="map-info">
                                <span class="strong">
                                    15 Wellington Quay, Dublin 2
                                </span>
                                <p class="mb-0">
                                    Phone: (01) 670 8641
                                </p>
                                <a href="#">
                                    more info
                                </a>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72414.059243769!2d30.488915217178718!3d50.45854179948374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1650099688931!5m2!1sru!2sua" width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="map">
                            <div class="map-info">
                                <span class="strong">
                                    19 Parliament Street, Dublin 2
                                </span>
                                <p class="mb-0">
                                    Phone: (01) 670 6550
                                </p>
                                <a href="#">
                                    more info
                                </a>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72414.059243769!2d30.488915217178718!3d50.45854179948374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1650099688931!5m2!1sru!2sua" width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>