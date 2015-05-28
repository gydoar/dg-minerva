<?php get_header(); ?>

	<div class="page__banner">
			
			<?php if(is_category()){
				echo '<div class="banner-noticias"></div>';
			}
			?>

	</div>

	<article class="single container">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="row">
				<div class="three columns">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog' ); ?></a>
				</div>
				<div class="nine columns">
					<span>Publicado el: <strong><?php the_date('d-m-Y'); ?></strong></span>

					<?php the_excerpt(); ?>
				</div>
			</div>
				
			
			
			<hr>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>