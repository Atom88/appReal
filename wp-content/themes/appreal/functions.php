<?php
if ( function_exists('register_sidebars') ) {
    register_sidebars(2, array(
        'before_widget' => '',
        'after_widget' => '',
    ));
}
 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(160, 160, false);
remove_filter('the_content', 'wptexturize');

/* browser detection */
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
if($is_lynx) $classes[] = 'lynx';
elseif($is_gecko) $classes[] = 'gecko';
elseif($is_opera) $classes[] = 'opera';
elseif($is_NS4) $classes[] = 'ns4';
elseif($is_safari) $classes[] = 'safari';
elseif($is_chrome) $classes[] = 'chrome';
elseif($is_IE) $classes[] = 'ie';
else $classes[] = 'unknown';
 
if($is_iphone) $classes[] = 'iphone';
return $classes;
}

/* disable auto-format */
remove_filter( 'the_content', 'wpautop' ); 
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('comment_text', 'wpautop');



/* connect bxslider */
function bxslider_scripts_css(){
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.min.js', array( 'jquery' ),'', false );
    wp_enqueue_style( 'bxstyle', get_template_directory_uri().'/js/bxslider/jquery.bxslider.css' );
}
add_action('wp_enqueue_scripts', 'bxslider_scripts_css');

/* slider */
function post_type_slider() {
	register_post_type( 'slider-view',
                array( 
				'label' => __('Slider', 'templatesquare'), 
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'rewrite' => true,
				'hierarchical' => true,
				'exclude_from_search' =>true,
                    'supports' => array('title','editor','author','thumbnail', 'custom-fields'),
					) 
				);
	register_taxonomy( 'mainslider', array( 'slider-view' ), array(
		'hierarchical' => true,
		'label' =>  __('Slider Categories'),
		'query_var' => true,
		'rewrite' => array( 'slug' => 'mainslider', 'with_front' => false ),
		'show_ui' => true,
	));
}

add_action('init', 'post_type_slider');

 show_admin_bar(false);

?>

