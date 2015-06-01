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

/*------------------------------------*\
    $SHARE SOCIAL
\*------------------------------------*/
add_action('woocommerce_share','wooshare');
function wooshare(){
echo'
<div class="fb-like" data-href="'.get_permalink().'" data-layout="button_count" data-send="false" data-width="100" data-show-faces="true" style="display:inline"></div>

<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<a href="http://pinterest.com/pin/create/button/?url='. urlencode(get_permalink()).'&media='.urlencode(wp_get_attachment_url( get_post_thumbnail_id() )).'&description='.apply_filters( 'woocommerce_short_description', $post->post_excerpt ).'" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>';?>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=281787978603249";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
}