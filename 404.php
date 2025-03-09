<?php get_header(); ?>

<main id="content-wrapper">

	<div class="container">

		<div class="row py-5 justify-content-center">

			<div class="col-sm-8">

				<h1 class="mb-5 text-center">
					<?php esc_html_e( '404 : NOT FOUND!', 'bricks' ); ?>
				</h1>

				<h2 class="mb-5 text-center">
					<?php esc_html_e( 'Error Code: 404', 'bricks' ); ?>
				</h2>

				<p class="mb-5 text-center"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php esc_html_e( 'Go Back To The Homepage', 'bricks' ); ?> </a></p>

			</div>

		</div>
		
	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
