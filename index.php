<?php get_header(); ?>

<main id="content-wrapper">

<section id="post-header" class="has-img-background container-fluid" ><!-- post header image -->

		<img class="is-background img-fluid" src='<?php the_post_thumbnail_url( 'brk_big' ); ?>' alt='<?php brk_thumbnail_alt(); ?>' loading="lazy" /> 

		<div class="container post-masthead d-flex align-items-end text-light">

			<div class="row text-center text-md-start w-100 fade-in-out">
				<h1 class="gen-title text-uppercase">
					<?php
					if ( is_home() ) {

						echo esc_html( get_the_title( get_option( 'page_for_posts', true ) ) );

					} elseif ( is_search() ) {

						esc_html_e( 'Results for: ', 'bricks' );
						the_search_query();

					} else {

						the_archive_title();

					}
					?>
				</h1>
			</div><!--title -->

	</div><!--container--->

</section><!--post-header-->

	<div class="container">

		<div class="row pt-3 pt-md-5 justify-content-start">

			<div id="loop-wrapper" class="col-sm-8">
				   
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();

						get_template_part( 'templates/content/loop', '' );

					endwhile;

					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => esc_html__( '&laquo; Previous', 'bricks' ),
							'next_text' => esc_html__( 'Next &raquo;', 'bricks' ),
						)
					);

				else :

					get_template_part( 'templates/content/loop', 'none' );

				endif;
				?>
			
			</div> <!-- #loop-wrapper -->

			<?php get_sidebar(); ?>

		</div>

	</div>
		   
</main> <!-- #content-wrapper -->

<?php
get_footer();
