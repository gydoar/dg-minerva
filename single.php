<?php get_header(); ?>

	<article class="single container">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			
			<span>Publicado el: <strong><?php the_date('d-m-Y'); ?></strong></span>

			<?php the_content(); ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>