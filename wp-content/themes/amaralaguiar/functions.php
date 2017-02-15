<?php
/**
 * Theme functions and definitions
 *
 */


/**
 * Enqueues scripts and styles.
 *
 */
function amrlagr_scripts() {
	// Add bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/files/bootstrap/css/bootstrap.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'amrlagr-style', get_stylesheet_uri() );


	// Load the scripts.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/files/js/jquery-3.1.0.js' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/files/bootstrap/js/bootstrap.js', array( 'jquery' ) );

	// IE10 viewport hack for Surface/desktop Windows 8 bug
	wp_enqueue_script( 'ie10-viewport-bug-workaround', get_template_directory_uri() . '/files/bootstrap/js/ie10-viewport-bug-workaround.js', array( 'jquery' ) );


  // custom script theme
	wp_enqueue_script( 'amrlagr-script', get_template_directory_uri() . '/files/js/custom.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'amrlagr_scripts' );


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
?>
