jQuery(document).ready((function($){$(".blog-grid").each((function(){var a=$(this).data("page"),o=a+1,t=$(this).data("max-pages"),e=$(this).data("endpoint"),i=$(this).data("per-page"),r=$(this).data("post-type"),d=$(this).data("loadmore-label"),n=$(this).data("spinner");$(".blog-grid nav.pagination").remove(),a<t&&$(this).append('<div class="blog-grid__loadmore"><a class="blog-grid__loadmore-button button">'+d+'<img class="blog-grid__loadmore-spinner" src="'+n+'" /></a></div>'),$(this).find(".blog-grid__loadmore-button").click((function(){parents=$(this).parent().addClass("blog-grid__loadmore--loading"),myThis=$(this);var d=e+"?per_page="+i+"&page="+o+"&post_type="+r;$.get(d,(function(e){parentContainer=$(myThis).parents(".blog-grid"),parentContainer.find(".blog-grid__loadmore").before(e),parentContainer.attr("data-page",o),a=o,(o+=1)>t&&$(myThis).parent().remove(),$(".blog-grid__loadmore").removeClass("blog-grid__loadmore--loading")}))}))}))}));