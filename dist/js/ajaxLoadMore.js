jQuery( document ).ready( function ($) {

  $( '.blog-grid' ).each( function() {
    
    // get the values from the data attributes on the blog-grid element.
    var currentPage = $( this ).data( 'page' );
    var nextPage = currentPage + 1;
    var maxPages = $( this ).data( 'max-pages' );
    var endPointBase = $( this ).data( 'endpoint' );
    var postsPerPage = $( this ).data( 'per-page' );
    var postType = $( this ).data( 'post-type' );
    var loadMoreString = $( this ).data( 'loadmore-label' );
    var spinnerUrl = $( this ).data( 'spinner' );

    // remove the page navigation as we using loadmore instead.
    // ensures that pagination works if JS is not active.
    $( '.blog-grid nav.pagination' ).remove();

    // if there are more posts to load than are being displayed.
    if ( currentPage < maxPages ) {

      // add the button to load more jobs
      // also add the spinner image - this needs to be hidden with CSS or it always shows.
      $( this ).append( '<div class="blog-grid__loadmore"><a class="blog-grid__loadmore-button button">' + loadMoreString + '<img class="blog-grid__loadmore-spinner" src="' + spinnerUrl + '" /></a></div>' );

    }

    // when the load more jobs button is clicked
    $( this ).find( '.blog-grid__loadmore-button' ).click( function() {

      // add the loading class - use this to show the spinner image.
      parents = $( this ).parent().addClass('blog-grid__loadmore--loading');
      
      // store the button object to use later.
      myThis = $( this );

      // build the endpoint url.
      var endPointUrl = endPointBase + '?per_page=' + postsPerPage + '&page=' + nextPage + '&post_type=' + postType;

      // go and get the next posts.
      $.get(

        // url to get the posts from - rest api.
        endPointUrl,

        function ( data ) {

          parentContainer = $( myThis ).parents( '.blog-grid' );

          // append the returned new posts before the loadmore button.
          parentContainer.find( '.blog-grid__loadmore' ).before( data );

          // update the current page number.
          parentContainer.attr( 'data-page', nextPage );
          
          // set the new current page (now the next page)
          currentPage = nextPage;
          
          // set the nextpage which is one more than the current nextpage.
          nextPage = nextPage + 1;

          // if the nextPage is greater than the max pages.
          if ( nextPage > maxPages ) {

            // remove the load more button as there are no more posts to load.
            $( myThis ).parent().remove();

          }

          // remove the loading class.
          $( '.blog-grid__loadmore' ).removeClass('blog-grid__loadmore--loading');

        }

      );

    });

  });

});




