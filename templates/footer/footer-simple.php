<div id="footer-simple" class="navbar navbar-expand navbar-dark">
			   
	<div class="container flex-column flex-md-row my-3">

	<a class="navbar-brand ftr fw-light" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></a>
			   
		<?php

		if ( has_custom_logo() ) {

			the_custom_logo();

		}

		wp_nav_menu(
			array(
				'theme_location'    => 'footer',
				'depth'             => 1,
				'container'         => 'nav',
				'container_class'   => 'mt-5 mt-md-0 ms-md-auto',
				'container_id'      => '',
				'menu_class'        => 'footer-menu navbar-nav fw-light',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)
		);

		?>
   
	</div>
   
</div> <!-- #footer-simple --> 
