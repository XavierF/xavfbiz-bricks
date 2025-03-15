<?php get_header(); 
// Front page template
?>

<main id="content-wrapper">

	<section id="section-hero" class="has-img-background container-fluid" ><!-- main header image -->
		<?php
		get_template_part( 'templates/sections/home', 'hero' );
		?>
	</section> <!-- #section-hero -->

  
  <section id="newest-blog entry">
  	<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => '1'

		);

		get_template_part( 'templates/content/home', 'newest-post', $args );

		?>

  </section>	

	<section id="section-posts">

		<?php

		get_template_part( 'templates/content/home', 'latest-posts' );

		?>

	</section> <!-- #section-->

	<div class="container-fluid sidebar-footer-widget"><!-- begin sidebar-post -->

			<?php get_sidebar('footer'); ?>

		</div><!-- .container-fluid sidebar-footer-widget -->	
 
</main> <!-- #content-wrapper -->

<?php
get_footer();
