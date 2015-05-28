<?php 
/*------------------------------------*\
    $CARGAR ARCHIVOS EXTERNOS
\*------------------------------------*/
require_once( 'library/admin.php' );

/*------------------------------------*\
    $HABILITAR SOPORTE PARA MENU
\*------------------------------------*/
register_nav_menus(
		array(
			'header-menu' => 'Menu superior',   // main nav in header
			'footer-menu' => 'Menu pie' // secondary nav in footer
		)
	);

/*------------------------------------*\
    $SOPORTE PARA THUMBNAILS
\*------------------------------------*/
add_theme_support('post-thumbnails' );
add_image_size('blog', 350, 150, true );

/*------------------------------------*\
    $HABILITAR LEER MAS
\*------------------------------------*/
function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( '... Leer más', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



/*------------------------------------*\
    $GANCHOS WOOCOMMERCE
\*------------------------------------*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );

remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );


add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {
unset($tabs['reviews']);
return $tabs;
}