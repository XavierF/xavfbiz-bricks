

<!-- AJAX Load More Plugin Template File based upon templates/sections/home-news.php -->

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card border-0' ); ?> >
  
 <div class="card-body">
 <div class="post-title-box">		
  <h4 class="card-title"><?php the_title(); ?></h4>
  </div><!--.post-title-box"-->
   <a href="<?php the_permalink(); ?>">
	<img class="img-fluid img-thumb pb-3" src="<?php the_post_thumbnail_url('brk_square'); ?>" 
             alt="<?php brk_thumbnail_alt(); ?>" loading="lazy"></a>
    
						<!--	<p class="card-text"><small class="text-muted">
						<?php
							esc_html_e( 'By ', 'bricks' );
							the_author();
						?>
						</small></p> -->
<div class="post-info">	
<div class="card-text"><?php the_excerpt(); ?></div>
    <p class="card-subtitle mb-2"><small><?php the_category( ', ' ); ?> | <?php the_time( get_option( 'date_format' ) ); ?></small></p>
   </div><!-- .post-info -->		
<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read more', 'bricks');</a>

</div><!-- .card-body -->
		
			</article> <!-- #post-<?php the_ID(); ?> -->