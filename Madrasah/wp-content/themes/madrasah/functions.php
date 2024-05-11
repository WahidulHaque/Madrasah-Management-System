<?php

//Load Styles
function load_css(){
		
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');
	
}
add_action('wp_enqueue_style','load_css');



//Load  Script
function load_js(){
	wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts','load_js');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('post-videos');
add_theme_support('widgets');
add_theme_support( 'custom-logo' );



//Menus
register_nav_menus(
	array(
		'primary-menu' => 'Primary Menu Location',
		'footer-menu' => 'Footer Menu Location',
		'footer-menu2' => 'Footer Menu Location2',
		'mobile-menu' => 'Mobile Menu Location',
	)
);

//Menus link class
			//function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
			//    $classes     = implode(' ', $item->classes);
			//    $item_output = preg_replace('/<a /', '<a class="c-link dropdown-toggle"', $item_output, 1); //'.$classes.'
			//    return $item_output;
			// }
			//add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

//Menus li class
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


//Custom image sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-medium', 300, 300, true);
add_image_size('blog-small', 300, 200, true);

//Register Sidebars
function my_sidebars(){
	register_sidebar(
		array(
			'name' => 'Footer-1',
			'id' => 'footer-1',
			'class' => 'c-content-ver-nav',
			'before_title' => '<h4 class="c-font-bold c-font-uppercase">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
}
add_action('widgets_init','my_sidebars');

// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

?>