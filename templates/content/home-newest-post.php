<div class="container py-5">

	<div class="row text-center pb-4">
	
		<h2><?php esc_html_e( 'Latest Entries', 'bricks' ); ?></h2>
	
	</div>
	
	<div class="row-">
	
		<?php


		$brk_cards_query = new WP_Query( $args );


		// WP Loop
		while ( $brk_cards_query->have_posts() ) :
			$brk_cards_query->the_post();

			?>
	
		

			<div class="container">

		<?php brk_breadcrumbs(); ?>

		<div class="row py-5">

			<div id="article-wrapper" class="col">       

				<?php get_template_part( 'templates/content/front-page-single', '' ); ?>

			
					
				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template(); }
				?>
			
			</div> <!-- #article-wrapper -->


		</div>

	</div>
	
			<?php
		endwhile;

		// WP Query Reset
		wp_reset_query();
		wp_reset_postdata();
		?>
	
	</div>

</div>
