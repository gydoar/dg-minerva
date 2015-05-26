




<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.meanmenu.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/owl.carousel.js"></script>
<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->
		<script>
			jQuery(document).ready(function () {
			    jQuery('header nav').meanmenu();
			});
		</script>
	<!--/ Menu responsive -->

		<script>
			$(document).ready(function() {
				 
				  $("#owl-demo").owlCarousel({
				 
				      navigation : false, // Show next and prev buttons
				      slideSpeed : 300,
				      paginationSpeed : 400,
				      singleItem:true,
				      autoPlay: true,
				      pagination: false
				 
				      // "singleItem:true" is a shortcut for:
				      // items : 1, 
				      // itemsDesktop : false,
				      // itemsDesktopSmall : false,
				      // itemsTablet: false,
				      // itemsMobile : false
				 
				  });
				 
				});
		</script>

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>