<?php
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

	// update path
	$path = get_stylesheet_directory() . '/plugins/acf/';

	// return
	return $path;

}


// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

	// update path
	$dir = get_stylesheet_directory_uri() . '/plugins/acf/';

	// return
	return $dir;

}


// 3. Hide ACF field group menu item
 // add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );



// Saving JSON
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

	// update path
	$path = get_stylesheet_directory() . '/acf-fields';


	// return
	return $path;

}

// Loading JSON

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

	// remove original path (optional)
	unset($paths[0]);


	// append path
	$paths[] = get_stylesheet_directory() . '/acf-fields';


	// return
	return $paths;

}
