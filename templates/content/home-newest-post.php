
<div class="container py-md-4 pt-md-5 g-0">

	<div class="row text-center pb-md-4">
	
		<h2><?php esc_html_e( 'Latest Entries', 'bricks' ); ?></h2>
	
	</div>
	
	<div class="row g-0">

		<?php

		$brk_query = new WP_Query( $args );


		// WP Loop
		while ( $brk_query->have_posts() ) :
			$brk_query->the_post();
			?>
	
	<div class="container"><!--post container -->


		<div class="row py-2 py-md-3 g-0">

			<div id="article-wrapper" class="col">       

				<?php get_template_part( 'templates/content/front-page-single', '' ); ?>

				
			
			</div> <!-- #article-wrapper -->


		</div><!-- .row .g-o -->

 		<hr class="hr d-block d-md-none mt-1 mb-0" /> <!-- horizontal rule -->
	
	</div><!--post container -->
	
			<?php
		endwhile;

		// WP Query Reset
		wp_reset_query();
		wp_reset_postdata();
		?>
	
	</div><!-- .row -->

</div><!-- .container -->
