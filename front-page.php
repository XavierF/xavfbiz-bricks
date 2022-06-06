<?php get_header(); ?>

<main id="content-wrapper">

	<section id="section-hero" class="has-img-background" >

		<?php

		get_template_part( 'templates/sections/home', 'hero' );

		?>

	</section> <!-- #section-hero -->


 
	<section id="section-news">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'news', $args );

		?>

	</section> <!-- #section-news -->

	
 
</main> <!-- #content-wrapper -->

<?php
get_footer();
