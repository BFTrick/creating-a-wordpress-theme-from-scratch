<?php
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
	register_nav_menus(
		array(
			'main_menu' => __( 'Main Menu' )
		)
	);
}//register_custom_menu

if ( function_exists('register_sidebar') )
    register_sidebar();
?>