<?phpinclude_once( 'inc/customizer.php' );//Set up widget areasif (function_exists('register_sidebar')) {	// register_sidebar(array(	// 	'name'=> 'Call to Action Area',	// 	'id' => 'cta_area'	// ));		register_sidebar(array(		'name'=> 'Extra Info Area',		'id' => 'extra_info_area'	));	register_sidebar(array(		'name'=> 'Contact Info Area',		'id' => 'contact_info_area'	));	// register_sidebar(array(	// 	'name'=> 'Top Call Out',	// 	'id' => 'top_call_out'	// ));	register_sidebar(array(		'name'=> 'Callout Widget Area 1',		'id' => 'callout_widget_area_1'	));	register_sidebar(array(		'name'=> 'Callout Widget Area 2',		'id' => 'callout_widget_area_2'	));	register_sidebar(array(		'name'=> 'Callout Widget Area 3',		'id' => 'callout_widget_area_3'	));	// register_sidebar(array(	// 	'name'=> 'Footer Area',	// 	'id' => 'footer_area'	// ));	register_sidebar(array(		'name'=> 'Disclaimer Area',		'id' => 'disclaimer_area'	));	}add_filter('widget_text', 'do_shortcode');//add menusadd_theme_support( 'menus' );function register_my_menus() {  register_nav_menus(    array(      'header-menu' => __( 'Header Menu' ),      'extra-menu' => __( 'Extra Menu' )    )  );}add_action( 'init', 'register_my_menus' );//add featured imagesadd_theme_support( 'post-thumbnails' );?>