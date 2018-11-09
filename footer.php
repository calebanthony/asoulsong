			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

                <div id="upper-footer">
                    <!-- Upper footer first -->
                    <!-- <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer1' ); ?>
                    <?php else : ?>
                        <?php
                            /*
                             * This content shows up if there are no widgets defined in the backend.
                            */
                        ?>
                        <div class="no-widgets">
                            <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                        </div>
                    <?php endif; ?> -->

                    <!-- Now the lower footer for Instagram -->
                    <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer2' ); ?>
                    <?php else : ?>
                        <?php
                            /*
                             * This content shows up if there are no widgets defined in the backend.
                            */
                        ?>
                        <div class="no-widgets">
                            <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
                        </div>
                    <?php endif; ?>
                </div>

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
