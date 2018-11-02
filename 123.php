<?php // deb majumder
register_nav_menu( 'primary', __( 'Primary Menu', 'abiemond' ) );
register_nav_menu( 'myaccount', __( 'My account', 'abiemond' ) );
register_nav_menu( 'quick_link', __( 'Quicklink', 'abiemond' ) );
function abiemond_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Price', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'My Account Menu', 'twentytwelve' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	
		register_sidebar( array(
		'name' => __( 'Color', 'twentytwelve' ),
		'id' => 'sidebar-41',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
			register_sidebar( array(
		'name' => __( 'Size', 'twentytwelve' ),
		'id' => 'sidebar-42',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
				register_sidebar( array(
		'name' => __( 'Quick Link Menu', 'twentytwelve' ),
		'id' => 'sidebar-43',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
		register_sidebar( array(
		'name' => __( 'newsletter', 'twentytwelve' ),
		'id' => 'sidebar-10',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'header top', 'twentytwelve' ),
		'id' => 'sidebar-11',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'footer bottom', 'twentytwelve' ),
		'id' => 'sidebar-12',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => ' <ul class="list-inline">',
		'after_widget' => '</ul>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
		register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-111',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
			register_sidebar( array(
		  'name' => __( 'Category', 'twentytwelve' ),
	    	'id' => 'sidebar-112',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
	
		'before_title' => '<ul id="accordion">',
		'after_title' => '</ul>',
	) );
		register_sidebar( array(
		'name' => __( 'Latest Post', 'twentytwelve' ),
		'id' => 'sidebar-114',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),

		'before_title' => '<ul id="accordion">',
		'after_title' => '</ul>',
		) );
		register_sidebar( array(
		'name' => __( 'Tag', 'twentytwelve' ),
		'id' => 'sidebar-115',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),

		'before_title' => '<ul class="list-inline">',
		'after_title' => '</ul>',
		) );
}
add_action( 'widgets_init', 'abiemond_widgets_init' );


remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);

remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);

//remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);

remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);

remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 10);

remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open', 10);

remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10);

remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);

remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);

//remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs', 10);

remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display', 15);

remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products', 20);

remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5);

//remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10);

remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);

remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);


remove_action('woocommerce_single_product_summary',' woocommerce_template_single_add_to_cart', 30);
function tf_bread(){
    do_action('tf_bread');
}
add_action('tf_bread','woocommerce_breadcrumb',0);

function tf_ordering(){
    do_action('tf_ordering');
}
add_action('tf_ordering','woocommerce_catalog_ordering',0);

function tf_title(){
    do_action('tf_title');
}
add_action('tf_title','woocommerce_template_loop_product_title',0);

function tf_price(){
    do_action('tf_price');
}
add_action('tf_price','woocommerce_template_loop_price',0);

function tf_adtocart(){
    do_action('tf_adtocart');
}
add_action('tf_adtocart','woocommerce_template_loop_add_to_cart',0);

function tf_thum(){
    do_action('tf_thum');
}
add_action('tf_thum','woocommerce_template_loop_product_thumbnail',0);

function tf_linkopen(){
    do_action('tf_linkopen');
}
add_action('tf_linkopen','woocommerce_template_loop_product_link_open',0);

function tf_linkclose(){
    do_action('tf_linkclose');
}
add_action('tf_linkclose','woocommerce_template_loop_product_link_close',0);

function tf_rating(){
    do_action('tf_rating');
}
add_action('tf_rating','woocommerce_template_loop_rating',0);


function tf_sgl_rating(){
    do_action('tf_sgl_rating');
}
add_action('tf_sgl_rating','woocommerce_template_single_rating',0);


function tf_sgl_price(){
    do_action('tf_sgl_price');
}
add_action('tf_sgl_price','woocommerce_template_single_price',0);



function tf_sgl_related_products(){
    do_action('tf_sgl_related_products');
}
add_action('tf_sgl_related_products','woocommerce_output_related_products',0);
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

function custom_variation_price() {
$price = '';
global $product;
if ( !$product->min_variation_price || $product->min_variation_price !== $product->max_variation_price ) $price .= '<span class="from">' . _x('From', 'min_price', 'woocommerce') . ' </span>';
$price .= woocommerce_price($product->get_price());
if ( $product->max_variation_price && $product->max_variation_price !== $product->min_variation_price ) {
$price .= '<span class="to"> ' . _x('to', 'max_price', 'woocommerce') . ' </span>';

$price .= woocommerce_price($product->max_variation_price);
}

return $price;
}

//Reposition WooCommerce breadcrumb 
function woocommerce_remove_breadcrumb(){
remove_action( 
    'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}
add_action(
    'woocommerce_before_main_content', 'woocommerce_remove_breadcrumb'
);

function woocommerce_custom_breadcrumb(){
    woocommerce_breadcrumb();
}

add_action( 'woo_custom_breadcrumb', 'woocommerce_custom_breadcrumb' );

function woocommerce_custom_add_to_cart(){
    woocommerce_template_loop_add_to_cart();
}

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_custom_add_to_cart' );


function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "&nbsp;/&nbsp;</a>  ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "&nbsp;/&nbsp;";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}
/*
function custom_add_to_cart_redirect() { 
$url = get_permalink( 5 ); // URL to redirect to (1 is the page ID here)
	return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect' );
*/
add_action( 'wp_ajax_f711_get_post_content', 'f711_get_post_content_callback' );
add_action( 'wp_ajax_nopriv_f711_get_post_content', 'f711_get_post_content_callback' );

function f711_get_post_content_callback() {
$check = $_POST['value'];
$sym = get_woocommerce_currency_symbol();
if($check == 'New_Arrival')	
{
   				
			        $html ="";
					$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
              //      $sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
					$new_chk =  get_post_meta(get_the_ID(),'product_type',true);
					global $product;
					$sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
              if($new_chk == 'New_Arrival')
			  {

	$html.='<li><a href="listing.html">
                    <div class="single-product1">
                        <figure>';
                $html.='<img src="'.get_the_post_thumbnail_url().'" alt="" height="200px" class="img-responsive">';
				
                $html.='</figure>
                        <div class="short_info">
                            <p>Trey Black</p>
                            <div class="clearfix">
                                <p class="pull-left"><span>';
							$html.= $sym.$sale_price; 
								
							$html.=	'</span>
								
								</p>
                                  <p class="star pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png" class="img-responsive" alt=""></p>
                            </div><div class="clearfix">
                          ';
                               
					if( $product->is_type( 'variable' ) ) { 
					
					$html.='<a class="btn pull-left" href="'. get_the_permalink().'">Add to cart</a>';
					}
                    else{
						
					$html.='<a class="btn pull-left" href="' . get_home_url() . '?add-to-cart='.get_the_ID().'">Add to cart</a>';	
					}
							   
							   
                             $html.= '<ul class="list-inline pull-right"><li><a href="'.get_home_url().'/wishlist/?add_to_wishlist='.$product->id.'" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="'.get_the_permalink().'" title="Quick view"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>
                </li>
          ';
			  }
		  endwhile;
  
	
}

else if($check == 'Best_Arrival')
{
 	        $html ="";
					$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
              //      $sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
				$new_chk =  get_post_meta(get_the_ID(),'product_type',true);
				global $product;
					$sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
              if($new_chk == 'Best_Arrival')
			  {

	$html.='<li><a href="listing.html">
                    <div class="single-product1">
                        <figure>';
                $html.='<img src="'.get_the_post_thumbnail_url().'" alt="" height="200px" class="img-responsive">';
				
                $html.='</figure>
                        <div class="short_info">
                            <p>Trey Black</p>
                            <div class="clearfix">
                                <p class="pull-left"><span class="amount">';
								
							     $html.=	$sym.$sale_price;
							
							
								
							$html.=	'</span>
								
								</p>
                                  <p class="star pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png" class="img-responsive" alt=""></p>
                            </div><div class="clearfix">
                          ';
                               
					if( $product->is_type( 'variable' ) ) { 
					
					$html.='<a class="btn pull-left" href="'. get_the_permalink().'">Add to cart</a>';
					}
                    else{
						
					$html.='<a class="btn pull-left" href="' . get_home_url() . '?add-to-cart='.get_the_ID().'">Add to cart</a>';	
					}
							   
							   
                             $html.= '<ul class="list-inline pull-right"><li><a href="'.get_home_url().'/wishlist/?add_to_wishlist='.$product->id.'" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="'.get_the_permalink().'" title="Quick view"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>
                </li>
          ';
			  }
		  endwhile;
	
	
}	
	
	else if($check == 'Most_Popular')
{
		        $html ="";
					$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
              //      $sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
					$new_chk =  get_post_meta(get_the_ID(),'product_type',true);
					global $product;
					$sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
              if($new_chk == 'Most_Popular')
			  {

	$html.='<li><a href="listing.html">
                    <div class="single-product1">
                        <figure>';
                $html.='<img src="'.get_the_post_thumbnail_url().'" alt="" height="200px" class="img-responsive">';
				
                $html.='</figure>
                        <div class="short_info">
                            <p>Trey Black</p>
                            <div class="clearfix">
                                <p class="pull-left"><span class="amount">';
						$html.=	$sym.$sale_price;
								
							$html.=	'</span>
								
								</p>
                                  <p class="star pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png" class="img-responsive" alt=""></p>
                            </div><div class="clearfix">
                          ';
                               
					if( $product->is_type( 'variable' ) ) { 
					
					$html.='<a class="btn pull-left" href="'. get_the_permalink().'">Add to cart</a>';
					}
                    else{
						
					$html.='<a  class="btn pull-left" href="' . get_home_url() . '?add-to-cart='.get_the_ID().'">Add to cart</a>';	
					}
							   
							   
                             $html.= '<ul class="list-inline pull-right"><li><a href="'.get_home_url().'/wishlist/?add_to_wishlist='.$product->id.'" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="'.get_the_permalink().'" title="Quick view"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>
                </li>
          ';
			  }
		  endwhile;
}
else{
			        $html ="";
					$args = array( 'post_type' => 'product', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
              //      $sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
				
					global $product;
					$sale_price = get_post_meta(get_the_ID(),'_sale_price',true);
          

	$html.='<li><a href="listing.html">
                    <div class="single-product1">
                        <figure>';
                $html.='<img src="'.get_the_post_thumbnail_url().'" alt="" height="200px" class="img-responsive">';
				
                $html.='</figure>
                        <div class="short_info">
                            <p>Trey Black</p>
                            <div class="clearfix">
                                <p class="pull-left"><span class="amount">';
								if($sale_price){
							$html.=	'$'.$sale_price;
								}
								else
								{
								$html.='View Price';	
								}
								
							$html.=	'</span>
								
								</p>
                                  <p class="star pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/star.png" class="img-responsive" alt=""></p>
                            </div><div class="clearfix">
                          ';
                               
					if( $product->is_type( 'variable' ) ) { 
					
					$html.='<a class="btn pull-left" href="'. get_the_permalink().'">Add to cart</a>';
					}
                    else{
						
					$html.='<a class="btn pull-left" href="' . get_home_url() . '?add-to-cart='.get_the_ID().'">Add to cart</a>';	
					}
							   
							   
                              $html.= '<ul class="list-inline pull-right"><li><a href="'.get_home_url().'/wishlist/?add_to_wishlist='.$product->id.'" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="'.get_the_permalink().'" title="Quick view"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </a>
                </li>
          ';
			 
		  endwhile;
	
	
	
}
	
		echo $html;	
	die();
}



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );
		break;
		case 'simple':
			return __( 'Add to cart', 'woocommerce' );
		break;
		case 'variable':
			return __( 'Add to cart', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}




function arc_add_to_cart(){
    do_action('arc_add_to_cart');
}
add_action('arc_add_to_cart','woocommerce_template_loop_add_to_cart', 1);
add_filter('add_to_cart_fragments', 'header_add_to_cart_fragment');
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
 
    ob_start();
 
    woocommerce_cart_link();
 
    $fragments['a.cart-button'] = ob_get_clean();
 
    return $fragments;
 
}
function woocommerce_cart_link() {
    global $woocommerce;
    ?>
    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php _e('in your shopping cart', 'woothemes'); ?>" class="cart-button ">
    <span class="label"><?php _e('My Basket:', 'woothemes'); ?></span>
    <?php $woocommerce->cart->get_cart_total();  ?>
    <span class="items"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span>
    </a>
    <?php
}
