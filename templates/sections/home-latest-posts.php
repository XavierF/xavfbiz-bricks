<div class="container py-5">

	



	<div class="row text-center pb-4">
	
		<h2><?php esc_html_e( 'Latest Posts', 'bricks' ); ?></h2>
	
	</div>



	

<?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="row row-cols-1 row-cols-md-2 row-cols-lg-3" post_type="post" posts_per_page="12" offset="1"  scroll="false" transition_delay="150" button_done_label="No Posts Remaining"]'); ?>
	


</div><!-- .container -->
