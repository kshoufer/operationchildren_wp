<?php

if ( ! isset( $content_width ) ) $content_width = 960;

function et_setup_theme1(){
	global $themename, $shortname, $et_store_options_in_one_row, $default_colorscheme;
	$themename = 'Fable';
	$shortname = 'fable';
	$et_store_options_in_one_row = true;

	$default_colorscheme = "Default";

	$template_directory = get_stylesheet_directory();

	require_once( $template_directory . '/child-sidebars.php' );

}
add_action( 'after_setup_theme', 'et_setup_theme1' );

?>