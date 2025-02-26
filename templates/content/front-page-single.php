<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1><?php the_title(); ?></h1>
	<a href="<?php the_permalink(); ?>">
						<h3 class="card-title"><?php the_title(); ?></h3>
					</a>


	<div><!-- the content -->
	
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'        => '<nav class="nav"><span class="nav-link">' . esc_html__( 'Part:', 'bricks' ) . '</span>',
				'after'         => '</nav>',
				'link_before'   => '<span class="nav-link">',
				'link_after'    => '</span>',
			)
		);

		?>

	</div>
	<p><?php the_author(); ?> - <?php the_time( get_option( 'date_format' ) ); ?></p>

	<p><?php the_category( ', ' ); ?> - <?php the_tags( '', ', ', '' ); ?></p>

</article> <!-- #post-<?php the_ID(); ?> -->
