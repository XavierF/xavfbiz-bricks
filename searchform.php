<?php

$searchtext = esc_html__( 'Search', 'bricks' );

?>

<form class="search-form w-100" action="<?php echo esc_url_raw( home_url() ); ?>" method="get">
		
	<div class="input-group input-group-sm my-4">
  	<input type="search" class="form-control" placeholder="<?php echo esc_attr( $searchtext ); ?>" aria-label="<?php echo esc_attr( $searchtext ); ?>" name="s">

 	 <button class="btn btn-sub" type="submit" id="find">Find</button>
	</div><!-- .input-group -->

</form>
