<?php
/**
 * Plugin Name: Theme tester
 * Description: Test different theme
 * Version:     1.0
 * Author:      Andras MATAI
 * Author URI:  http://mataiandras.com/
 */

add_filter( 'template', 'theme_tester' );
add_filter( 'stylesheet', 'theme_tester' );

function theme_tester($theme) {

	if ( is_user_logged_in() ) {

		$theme = "utazgatok";

	} elseif ( isset($_GET['theme']) ) {

		$theme = $_GET['theme'];

	} else {	

		$theme = "naked";

	}

	return $theme;
}
