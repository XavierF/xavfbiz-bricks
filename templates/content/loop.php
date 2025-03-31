
<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 pb-2 border-bottom' ); ?>>

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<div><?php the_excerpt(); ?></div>

	<p>Posted: <?php the_time( get_option( 'date_format' ) ); ?> In <?php the_category( ', ' ); ?></p>
	

	<div class="col-md d-flex">  

 			<div class="d-table-cell pe-1"><p>Tags:</p> </div>
 			<div class="d-table-cell">	<?php the_tags( '', ' ', '' ); ?></div>

   	</div><!-- .col -->

</article> <!-- #post-<?php the_ID(); ?> -->
