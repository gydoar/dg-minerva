<!--
<footer class="container">
	<nav>
		<ul class="footer">
			<li><a href="<?php echo home_url('/contacto' ); ?>">Bogotá</a></li>
			<li><a href="<?php echo home_url('/contacto' ); ?>">Medellín</a></li>
			<li><a href="<?php echo home_url('/contacto' ); ?>">Cali</a></li>
			<li><a href="<?php echo home_url('/contacto' ); ?>">Cartagena</a></li>
			<li><a href="<?php echo home_url('/contacto' ); ?>">Pasto</a></li>
			<li><a href="<?php echo home_url('/contacto' ); ?>">Contacto</a></li>
		</ul>
	</nav>
</footer>
-->

<div class="copyright">
	<p>&copy; <?php the_date('Y'); ?> <?php bloginfo('name' ); ?> | Diseñado y desarrollado por <a target="_blank" href="http://degris.com">Degris</a></p>
</div>

<!-- script -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.meanmenu.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/owl.carousel.js"></script>
<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->
		<script>
			$(document).ready(function () {
			    $('header nav').meanmenu();
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

		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-54595918-1', 'auto');
		  ga('send', 'pageview');

		</script>


<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>