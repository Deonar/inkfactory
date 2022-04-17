<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meridian
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer-body">

            <div class="row">

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item footer-tab-js">
                        <?
                        $theme_locations = get_nav_menu_locations();
                        $menu_obj = get_term($theme_locations['footer_row_1'], 'nav_menu');
                        $menu_name = $menu_obj->name;
                        ?>
                        <div class="footer-item__title"><? echo $menu_name; ?></div>
                        <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer_row_1',
                            'container'       => false,
                            'menu_class'      => 'footer-item__menu-list footer-content-js',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ]);
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item footer-tab-js">
                        <?
                        $theme_locations = get_nav_menu_locations();
                        $menu_obj = get_term($theme_locations['footer_row_2'], 'nav_menu');
                        $menu_name = $menu_obj->name;
                        ?>
                        <div class="footer-item__title"><? echo $menu_name; ?></div>
                        <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer_row_2',
                            'container'       => false,
                            'menu_class'      => 'footer-item__menu-list footer-content-js',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ]);
                        ?>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item footer-tab-js">
                        <?
                        $theme_locations = get_nav_menu_locations();
                        $menu_obj = get_term($theme_locations['footer_row_3'], 'nav_menu');
                        $menu_name = $menu_obj->name;
                        ?>
                        <div class="footer-item__title"><? echo $menu_name; ?></div>
                        <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer_row_3',
                            'container'       => false,
                            'menu_class'      => 'footer-item__menu-list footer-content-js',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ]);
                        ?>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item footer-contacts">
                        <ul class="footer-social__list">
                            <li class="footer-social__item">
                                <a href="#" class="footer-social__link social__inst" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4006 6C10.6624 6 10.4443 6.0076 9.76164 6.03867C9.0803 6.06987 8.61523 6.17774 8.20829 6.336C7.78735 6.49947 7.43028 6.71814 7.07454 7.07401C6.71854 7.42975 6.49987 7.78682 6.33587 8.20762C6.1772 8.61469 6.0692 9.0799 6.03853 9.76097C6.008 10.4436 6 10.6619 6 12.4001C6 14.1382 6.00773 14.3557 6.03867 15.0384C6.07 15.7197 6.17787 16.1848 6.336 16.5917C6.49961 17.0126 6.71827 17.3697 7.07414 17.7255C7.42975 18.0815 7.78682 18.3007 8.20749 18.4641C8.61469 18.6224 9.0799 18.7303 9.76111 18.7615C10.4438 18.7925 10.6618 18.8001 12.3998 18.8001C14.1381 18.8001 14.3556 18.7925 15.0382 18.7615C15.7196 18.7303 16.1852 18.6224 16.5924 18.4641C17.0132 18.3007 17.3697 18.0815 17.7253 17.7255C18.0813 17.3697 18.3 17.0126 18.464 16.5918C18.6213 16.1848 18.7293 15.7196 18.7613 15.0385C18.792 14.3558 18.8 14.1382 18.8 12.4001C18.8 10.6619 18.792 10.4438 18.7613 9.76111C18.7293 9.07977 18.6213 8.61469 18.464 8.20776C18.3 7.78682 18.0813 7.42975 17.7253 7.07401C17.3693 6.71801 17.0133 6.49934 16.592 6.336C16.184 6.17774 15.7186 6.06987 15.0373 6.03867C14.3546 6.0076 14.1373 6 12.3986 6H12.4006ZM11.8264 7.15333C11.9968 7.15306 12.187 7.15333 12.4006 7.15333C14.1094 7.15333 14.3119 7.15946 14.9867 7.19013C15.6107 7.21866 15.9494 7.32293 16.175 7.41053C16.4737 7.52653 16.6866 7.6652 16.9105 7.8892C17.1345 8.1132 17.2732 8.32654 17.3894 8.62521C17.477 8.85055 17.5814 9.18922 17.6098 9.81322C17.6405 10.4879 17.6472 10.6906 17.6472 12.3986C17.6472 14.1066 17.6405 14.3093 17.6098 14.9839C17.5813 15.6079 17.477 15.9466 17.3894 16.172C17.2734 16.4706 17.1345 16.6833 16.9105 16.9072C16.6865 17.1312 16.4738 17.2698 16.175 17.3858C15.9497 17.4738 15.6107 17.5778 14.9867 17.6064C14.3121 17.637 14.1094 17.6437 12.4006 17.6437C10.6916 17.6437 10.4891 17.637 9.81441 17.6064C9.19041 17.5776 8.85174 17.4733 8.626 17.3857C8.32733 17.2697 8.11399 17.131 7.88999 16.907C7.66599 16.683 7.52732 16.4702 7.41105 16.1714C7.32345 15.9461 7.21905 15.6074 7.19065 14.9834C7.15998 14.3087 7.15385 14.1061 7.15385 12.397C7.15385 10.6879 7.15998 10.4863 7.19065 9.81162C7.21919 9.18762 7.32345 8.84895 7.41105 8.62334C7.52706 8.32467 7.66599 8.11134 7.88999 7.88733C8.11399 7.66333 8.32733 7.52466 8.626 7.4084C8.8516 7.3204 9.19041 7.21639 9.81441 7.18773C10.4048 7.16106 10.6336 7.15306 11.8264 7.15173V7.15333ZM15.8169 8.21601C15.3929 8.21601 15.0489 8.55961 15.0489 8.98375C15.0489 9.40775 15.3929 9.75176 15.8169 9.75176C16.2409 9.75176 16.5849 9.40775 16.5849 8.98375C16.5849 8.55974 16.2409 8.21601 15.8169 8.21601ZM12.4006 9.11335C10.5855 9.11335 9.11391 10.585 9.11391 12.4C9.11391 14.2151 10.5855 15.6861 12.4006 15.6861C14.2157 15.6861 15.6868 14.2151 15.6868 12.4C15.6868 10.585 14.2157 9.11335 12.4006 9.11335ZM12.4006 10.2667C13.5787 10.2667 14.5339 11.2218 14.5339 12.4C14.5339 13.5782 13.5787 14.5334 12.4006 14.5334C11.2223 14.5334 10.2672 13.5782 10.2672 12.4C10.2672 11.2218 11.2223 10.2667 12.4006 10.2667Z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="footer-social__item">
                                <a href="#" class="footer-social__link social__youtube" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4008 8.27466C17.9516 8.4258 18.3853 8.87111 18.5325 9.43661C18.8 10.4615 18.8 12.6 18.8 12.6C18.8 12.6 18.8 14.7384 18.5325 15.7634C18.3853 16.3289 17.9516 16.7742 17.4008 16.9254C16.4027 17.2 12.4 17.2 12.4 17.2C12.4 17.2 8.39731 17.2 7.39913 16.9254C6.84836 16.7742 6.41462 16.3289 6.26742 15.7634C6 14.7384 6 12.6 6 12.6C6 12.6 6 10.4615 6.26742 9.43661C6.41462 8.87111 6.84836 8.4258 7.39913 8.27466C8.39731 8 12.4 8 12.4 8C12.4 8 16.4027 8 17.4008 8.27466ZM11.2 10.8V14.8L14.4 12.8L11.2 10.8Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-copy">© The Ink FActory</div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>