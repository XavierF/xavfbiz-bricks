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

			<div class="col-md pb-2">

			
				<p class="card-text"><small class="text-muted">

				<?php esc_html_e( 'Posted By ', 'bricks' ); the_author(); ?> - <?php the_time( get_option( 'date_format' ) ); ?> 
						  In: <?php the_category( ', ' ); ?> 

				</small></p>

  
			</div><!-- .col-md -->

		</div><!--.row -->	

		<div class="row">

			<div class="col-md d-flex tag-container">				  

				<div class="d-table-cell pe-1"><p><small class="text-muted">Tags:</small></p> </div>

				<div class="d-table-cell">	<?php the_tags( '', ' ', '' ); ?></div>

			</div><!-- .col -md-->

			<div class="col-md pt-2 pt-md-0 d-flex flex-column align-items-center align-items-md-end h-100 btn-post-container">  

 				<a href="<?php the_permalink(); ?>" class="btn btn-post mt-auto initial"><?php esc_html_e( 'READ MORE',    '	bricks');?></a>

   		</div><!-- .col-md -->

		</div><!-- .row -->

	</div><!-- .entry-footer -->

</article> <!-- #post-<?php the_ID(); ?> -->
