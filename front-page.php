<?php get_header(); 
// Front page template
?>

<main id="content-wrapper">

	<section id="section-hero" class="has-img-background" >
		<?php
		get_template_part( 'templates/sections/home', 'hero' );
		?>
	</section> <!-- #section-hero -->

  </main>
  <section id="newest-blog entry">
  	<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => '1'
		);

		get_template_part( 'templates/sections/home', 'newest-post', $args );

		?>

  </section>	

	<section id="section-latest">

		<?php

		get_template_part( 'templates/sections/home', 'latest-posts' );

		?>

	</section> <!-- #section-->

	
 
</main> <!-- #content-wrapper -->

<?php
get_footer();
