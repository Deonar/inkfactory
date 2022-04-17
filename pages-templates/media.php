<?php
/*
Template Name: Media
*/

get_header();
?>

<div class="container">

   <h1 class="h1 main-title">Media</h1>

   <div class="cards cards-media">
      <div class="cards__item cards-media">
         <div class="cards__body">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/media.jpg" alt="#">
            <div class="cards__content">
               <div class="cards__link">
                  <a href="#" class="btn btn_big btn_violet">
                     <span>Videos</span>
                     <span>></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="cards__item cards-media">
         <div class="cards__body">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="#">
            <div class="cards__content cards__content_right">
               <div class="cards__link">
                  <a href="#" class="btn btn_big btn_yellow">
                     <span>Blog / News</span>
                     <span>></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div> 

</div>

<?php get_template_part('template-parts/subscribe') ?>

<?php get_footer(); ?>
