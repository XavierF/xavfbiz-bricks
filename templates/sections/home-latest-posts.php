<div class="container py-5">

	<div class="row text-center pb-4">
	
		<h2><?php esc_html_e( 'Latest Posts', 'bricks' ); ?></h2>
	
	</div>
	
	<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
	
		<?php

		// WP Query
		$brk_cards_query = new WP_Query( $args );

		// WP Loop
		while ( $brk_cards_query->have_posts() ) :
			$brk_cards_query->the_post();

			?>
	
		<div class="col">

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'card border-0' ); ?> >
		
				<div class="card-body" style="background: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>') center center no-repeat;">
		
					
		
					<a href="<?php the_permalink(); ?>">
						<h3 class="card-title"><?php the_title(); ?></h3>
					</a>
		
		
		
				</div><!-- .card-body -->
				<div class="card-text"><?php the_excerpt(); ?></div>
		
					<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read more', 'bricks' ); ?></a>

		
			</article> <!-- #post-<?php the_ID(); ?> -->

		</div><!-- .col -->
	
			<?php
		endwhile;

		// WP Query Reset
		wp_reset_query();
		wp_reset_postdata();
		?>
	
	</div>

</div>
