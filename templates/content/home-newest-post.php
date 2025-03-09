<div class="container pb-2 pt-5 g-0">

	<div class="row text-center pb-4">
	
		<h2><?php esc_html_e( 'Latest Entries', 'bricks' ); ?></h2>
	
	</div>
	
	<div class="row g-0">
	
		<?php

		$brk_cards_query = new WP_Query( $args );


		// WP Loop
		while ( $brk_cards_query->have_posts() ) :
			$brk_cards_query->the_post();
			?>
	
	<div class="container"><!--post container -->


		<div class="row py-3 g-0">

			<div id="article-wrapper" class="col">       

				<?php get_template_part( 'templates/content/front-page-single', '' ); ?>

				
			
			</div> <!-- #article-wrapper -->


		</div><!-- .row .g-o -->

	</div><!--post container -->
	
			<?php
		endwhile;

		// WP Query Reset
		wp_reset_query();
		wp_reset_postdata();
		?>
	
	</div>

</div>
