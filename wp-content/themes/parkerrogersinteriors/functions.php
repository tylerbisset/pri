<?php
// Load Chester MVC Framework
require_once(dirname(__FILE__).'/lib/chester/require.php');

	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
?>