<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 pb-2 border-bottom' ); ?>>

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<div><?php the_excerpt(); ?></div>

	<p>Posted: <?php the_time( get_option( 'date_format' ) ); ?> In <?php the_category( ', ' ); ?></p>
	<div class="tag m-0"><p class="d-inline h-100">Tags:</p> <?php the_tags( '', ' ', '' ); ?>

</article> <!-- #post-<?php the_ID(); ?> -->
