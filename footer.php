	</div> <!-- #page-wrapper -->

	<footer id="footer-wrapper" class="bg-darker text-light">


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

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="SEARCH" aria-hidden="true">

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

</div><!-- .modal -->
<!-- End of Modal -->

<!-- Begin Feedback Form Modal -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="CONTACT" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header d-flex">

        <h5 class="modal-title mx-auto d-inlne" id="ModalLabel">CONTACT</h5>
        <button type="button" class="btn-close d-flex justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div><!-- modal header -->

      <div class="modal-body d-flex justify-content-center">

       <?php echo do_shortcode('[contact-form-7 id="789422d" title="Contact form 1"]'); ?>

      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-outline-close" data-bs-dismiss="modal">Close This Window</button>
       
      </div>
    </div>

  </div><!-- modal dialog -->

</div><!-- .modal -->
<!-- End of Modal -->
<script>

jQuery(document).ready(function($) {
  $('.navbar-toggler').bind( "touchstart", function(e) {
    e.preventDefault();
    $('.navbar-collapse').collapse('toggle');
    $('.fade-in-out').toggleClass('fade-in-out-hidden');
  });

// set attributes to nav-links for modals

  $('li.seek a').attr( { 'data-bs-toggle':"modal", 'data-bs-target':"#searchModal" } );

  $('li.connect a').attr( { 'data-bs-toggle':"modal", 'data-bs-target':"#contactModal" } );

});







 

//BackgroundCheck.init({
//  targets: '.navbar-brand, .nav-link, .navbar-toggler, .post-title, .page-title, .taxonomy-description',
//  images: '.jumbotron-fluid, .media-content-hero, .archive-hero',
//  maxDuration: 3000 ,
//  debug: true
//}); 


</script>



</body>
