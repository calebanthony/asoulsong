<?php
/*
 Template Name: Store Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

            <div id="content">

                <div id="inner-content" class="wrap cf">

                        <main id="main" class="store-page m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                            <?php woocommerce_content(); ?>

                        </main>

                </div>

            </div>

            <nav role="navigation">
                <?php wp_nav_menu(array(
                'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                'container_class' => 'store-links cf',         // class of container (should you choose to use it)
                'menu' => __( 'Store Links', 'bonestheme' ),   // nav name
                'menu_class' => 'nav store-nav cf',            // adding custom nav class
                'theme_location' => 'store-links',             // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                )); ?>
            </nav>

<?php get_footer(); ?>
