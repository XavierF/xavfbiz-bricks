<article id="post-<?php the_ID(); ?>" <?php post_class( 'card border-0' ); ?> >
		
				<div class="card-body">
		
					<p class="card-subtitle mb-2"><small><?php the_category( ', ' ); ?> | <?php the_time( get_option( 'date_format' ) ); ?></small></p>
		
					<a href="<?php the_permalink(); ?>">
						<h3 class="card-title"><?php the_title(); ?></h3>
					</a>
		
					<a href="<?php the_permalink(); ?>">
						<img class="img-fluid pb-3" src="<?php the_post_thumbnail_url( 'brk_single' ); ?>" alt="<?php brk_thumbnail_alt(); ?>" loading="lazy">
					</a>
		
					<p class="card-text"><small class="text-muted">
					<?php
					esc_html_e( 'By ', 'bricks' );
					the_author();
					?>
					</small></p>
		
					<div class="card-text"><?php the_excerpt(); ?></div>
		
					<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read more', 'bricks' ); ?></a>


		
				</div>
		
			</article> <!-- #post-<?php the_ID(); ?> -->




