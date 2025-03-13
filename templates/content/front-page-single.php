<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>">
						<h3 class="card-title"><?php the_title(); ?></h3>
					</a>


	<div class="entry-content"><!-- the content -->
	
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

	</div><!--.entry-content -->

	<div class="entry-footer"> 
	<div class="row">

    
		<div class="col">	<p class="card-text"><small class="text-muted"><?php esc_html_e( 'Posted By ', 'bricks' ); the_author(); ?>
						  -  <?php the_time( get_option( 'date_format' ) ); ?> In: <?php the_category( ', ' ); ?> </small></p>

  	</div><!-- .col -->
</div>
<div class="row">
		<div class="col-md">				  

			<div class="d-table-cell pe-1"><p>Tags:</p> </div>

			<div class="d-table-cell">	<?php the_tags( '', ' ', '' ); ?></div>

		</div><!-- .col -->

		<div class="col-md pt-2 btn-post-container">  

 			<a href="<?php the_permalink(); ?>" class="btn btn-post initial"><?php esc_html_e( 'READ MORE',    '	bricks');?></a>

   	</div><!-- .col -->
</div>
	</div><!--entry-footer .row-->

</article> <!-- #post-<?php the_ID(); ?> -->
