<?php
/*
Template Name: Contact Us Single
*/

get_header();
?>

<div class="container">
    <div class="contact-us-single">
        <div class="contact-us-single__content">
            <h1 class="h1 main-title contact-us-single__title">PARLIAMENT</h1>
            <p>19 Parliament Street, <br> Dublin 2</p>
            <p>Phone: <a href="tel:(01) 670 6550">(01) 670 6550</a></p>
            <div class="work-hours-info">
                <p class="content_small">
                    Working hours
                </p>
                <p class="content_large mb-0">
                    mon - sun <br>11 am to 7 pm
                </p>
            </div>
        </div>
        <div class="contact-us-single__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72414.059243769!2d30.488915217178718!3d50.45854179948374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1650099688931!5m2!1sru!2sua" width="100%" height="100% allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>