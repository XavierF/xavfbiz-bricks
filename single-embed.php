<?php
/**
 * The template for displaying all emded video and audio posts.
 *
 * Template Name: wp-block-embed
 * Template Post Type: post, page
 *
 * 
 */
 ?>

<?php get_header(); ?>

<main id="content-wrapper">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

	<section id="post-header" class="has-img-background container-fluid" ><!-- post header image -->

		<img class="is-background img-fluid" src='<?php the_post_thumbnail_url( 'brk_big' ); ?>' alt='<?php brk_thumbnail_alt(); ?>' loading="lazy" /> 

		<div class="container post-masthead d-flex align-items-end text-light">

			<div class="row justify-content-start">
				<h4 class="post-title"><?php the_title(); ?></h4>
			</div><!--title -->

	</div><!--container--->

</section><!--post-header-->

	<div class="container">


		<div class="row pt-2 pb-5">

			<div id="article-wrapper" class="col">       

				<?php get_template_part( 'templates/content/single-embed', '' ); ?>

				<nav class="nav">
					<?php
					previous_post_link( '<span class="nav-link me-auto">&laquo; %link</span>' );
						next_post_link( '<span class="nav-link ms-auto">%link &raquo;</span>' );
					?>
				</nav>
					
				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template(); }
				?>
			
			</div> <!-- #article-wrapper -->

			

		</div>

	</div>
  
	<?php endwhile ?>

</main> <!-- #content-wrapper -->

<?php
get_footer();
