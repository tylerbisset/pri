<?php
// Load Chester MVC Framework
require_once(dirname(__FILE__).'/lib/chester/require.php');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

$galleryLocationBlock = array(
  'name' => 'location',
    'blockTitle' => 'Gallery Location',
    'fields' => array(
        array(
            'name' => 'location',
            'labelTitle' => 'Location',
            'fieldType' => 'textField',
        ),
        array(
            'name' => 'map',
            'labelTitle' => 'Link to a map',
            'fieldType' => 'textField',
        )
    )
);

$galleryInfoBlock = array(
  'name' => 'other',
  'blockTitle' => 'Other details',
  'fields' => array(
    array(
      'name' => 'website',
      'labelTitle' => 'Website address',
      'fieldType' => 'textField'
    )
  )
);

$galleryCustomPostType = array(
    'name' => 'gallery',
    'displayName' => 'gallery',
    'pluralDisplayName' => 'galleries',
    'enablePostThumbnailSupport' => true,
    'fieldBlocks' => array($galleryLocationBlock, $galleryInfoBlock)
);

$adminSettings = array(
    'customPostTypes' => array($galleryCustomPostType)
);

$adminController = new ChesterAdminController($adminSettings);
?>