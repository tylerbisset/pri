
<?php
// Load Chester MVC Framework
require_once(dirname(__FILE__).'/lib/chester/require.php');
?>


<?php
// Create Navigation
if (function_exists ('register_nav_menus')) {
	register_nav_menus( array( 'primary' => 'Header Navigation'));
}
?>