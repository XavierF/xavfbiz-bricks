<article id="post-<?php the_ID(); ?>" <?php post_class( 'card border-0' ); ?> >
  
 <div class="card-body">
  <div class="post-title d-flex align-items-end">		
   <h5 class="card-title d-block text-truncate"><?php the_title(); ?></h5>
  </div><!--.post-title"-->
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
  <p class="card-subtitle mb-2"><small>Posted: <?php the_time( get_option( 'date_format' ) );?></small></p>
  <div class="card-subtitle mb-2 tag">
    <p class="tag">Tags: <?php the_tags( '', ' ', '' ); ?></p>
  </div><!--.card-subtitle -->
 </div><!-- .post-info -->
   
 <div class="btn-container">  
 	<a href="<?php the_permalink(); ?>" class="btn btn-post mx-auto"><?php esc_html_e( 'READ MORE',    '	bricks');?></a>
   </div><!-- .btn-container -->

</div><!-- .card-body -->
		
			</article> <!-- #post-<?php the_ID(); ?> -->