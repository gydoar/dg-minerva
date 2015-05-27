<?php get_header(); ?>
	
	<div class="page__banner">

			<?php if(is_page(21)){
				echo '<div class="banner-somos"></div>';
			}else if(is_page(44)){
				echo '<div class="banner-contacto"></div>';
			}
			?>

	</div>
	<article class="page container">
		<?php rewind_posts(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>