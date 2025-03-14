	</div> <!-- #page-wrapper -->

	<footer id="footer-wrapper" class="bg-dark text-light">

		<?php

		// get_template_part( 'templates/footer/footer', 'columns' );
		get_template_part( 'templates/footer/footer', 'simple' );
		?>

	</footer> <!-- #footer-wrapper -->

	<?php

	get_template_part( 'templates/components/backtotop', '' );

	wp_footer();

	?>

</div> <!-- #site-wrapper -->

<!--<div id="ajax-dummy" button class="alm-load-more-btn more btn btn-outline-lm" type="button">LOAD MORE ENTRIES</button></div>
</div>-->
<!-- Begin Search Form Modal -->

<div class="modal fade" id="Modal-Search" tabindex="-1" aria-labelledby="SEARCH" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header d-flex">

        <h5 class="modal-title mx-auto d-inlne" id="ModalLabel">SEARCH</h5>
        <button type="button" class="btn-close d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div><!-- modal header -->

      <div class="modal-body d-flex justify-content-center">
        <?php get_search_form(); ?>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-outline-close" data-bs-dismiss="modal">Close This Window</button>
       
      </div>
    </div>

  </div><!-- modal dialog -->

</div>
<!-- End of Modal -->

<script>

jQuery(document).ready(function($) {
  $('.navbar-toggler').bind( "touchstart", function(e) {
    e.preventDefault();
    $('.navbar-collapse').collapse('toggle');
  });

  
  $('.navbar-toggler').on("touchstart", function(e) { 
    e.preventDefault();
	  	$('.fade-in-out').toggleClass('fade-in-out-hidden');
	      
  });

// set attribuse to nav-link for modal
jQuery('li.seek a').attr('data-bs-toggle', 'modal');
 
});
var myModal = document.getElementId('Modal-Search');




//BackgroundCheck.init({
//  targets: '.navbar-brand, .nav-link, .navbar-toggler, .post-title, .page-title, .taxonomy-description',
//  images: '.jumbotron-fluid, .media-content-hero, .archive-hero',
//  maxDuration: 3000 ,
//  debug: true
//}); 


</script>

</body>
