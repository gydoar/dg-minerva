<?php get_header(); ?>

	<article class="single container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span>Publicado el: <strong><?php the_date('d-m-Y'); ?></strong></span>

			<?php the_excerpt(); ?>
			
			<hr>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>