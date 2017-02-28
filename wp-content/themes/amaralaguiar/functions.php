<?php
/**
 * Theme functions and definitions
 *
 */

if ( ! function_exists( 'amrlagr_setup' ) ) :
	function amrlagr_setup() {

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );
		add_image_size( 'banner-atuacao', 1024, 390, true );

		// This theme uses wp_nav_menu() in two locations.
		/*register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'amrlagr' ),
		) );*/

	}
endif; // etoile_setup
add_action( 'after_setup_theme', 'amrlagr_setup' );


/**
 * Enqueues scripts and styles.
 *
 */
function amrlagr_scripts() {
	// Add bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/files/bootstrap/css/bootstrap.min.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'amrlagr-style', get_stylesheet_uri() );


	// Load the scripts.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/files/js/jquery-3.1.0.min.js' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/files/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );

	// IE10 viewport hack for Surface/desktop Windows 8 bug
	wp_enqueue_script( 'ie10-viewport-bug-workaround', get_template_directory_uri() . '/files/bootstrap/js/ie10-viewport-bug-workaround.min.js', array( 'jquery' ) );


  // custom script theme
	wp_enqueue_script( 'amrlagr-script', get_template_directory_uri() . '/files/js/custom.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'amrlagr_scripts' );

//buscar áreas de atuação
function amrlagr_atuacao($home=false){
	$args = array();
	$args['post_type'] 	= 'area_atuacao';

	if($home){
		$args['meta_key'] 	= 'destaque_home';
		$args['meta_value']	= 'Sim';
	}

$loop = new WP_Query( $args );

	return $loop;
}

//buscar artigos
function amrlagr_artigos(){
	$args = array();
	$args['post_type'] 	= 'post';

	$loop = new WP_Query( $args );
	return $loop;
}

//buscar categorias
function amrlagr_categoria($id=false){
	$args['hide_empty']	=	0;
	$args['exclude']		=	1;
	$args['orderby']		=	'ID';
	$args['order']			=	'ASC';

	//return $id; //print_r($array);
	$html = '<ul class="row">';
	if($id){
		$args['fields']			=	'all_with_object_id';
		$array = wp_get_post_categories($id, $args);

		if(is_array($array) and count($array)){
			foreach($array as $ar){
				$img  = '<img src="'.get_wp_term_image($ar->term_id).'" alt="'.$ar->cat_name.'" > ';
				$link = site_url('categoria/'.$ar->slug);
				$html .= '<li><a href="'.$link.'">'.$img.'</a></li>';
			}
		}
	}else{
		$array = get_categories($args);

		if(is_array($array) and count($array)){
			foreach($array as $ar){
				$img  = '<img src="'.get_wp_term_image($ar->term_id).'" alt="'.$ar->cat_name.'" > ';
				$link = site_url('categoria/'.$ar->slug);
				$html .= '<li class="col-sm-6 col-md-12"><a href="'.$link.'">'.$img.$ar->cat_name.' ('.$ar->category_count.')</a></li>';
			}
		}
	}

	$html .= '</ul>';
	return $html;
}

//ativar link da página atual no menu
function amrlagr_active(){
	$active = false;

	if(is_home()){
		$active = 'home';
	}else if(is_single()){
		$active = get_post_type();
	}else if(is_page()){
		$active = get_the_title();
	}

	return $active;
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function amrlagr_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'amrlagr_custom_excerpt_length', 999 );

// Custom WordPress Login Logo
function cutom_login_logo() {
echo "<style type=\"text/css\">
body.login div#login h1 a {
background-image: url(".get_bloginfo('template_directory')."/files/img/logo.png);
-webkit-background-size: contain;
background-size: contain;
margin: 0 0 25px;
width: 320px;
}
</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-posts-types.php';
?>
