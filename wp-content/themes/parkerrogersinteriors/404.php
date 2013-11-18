<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

//require the site controller
require_once(dirname(__FILE__).'/mvc/controllers/site_controller.php');

//init the site controller
$siteController = new SiteController();

//call the showProjects function
$siteController->show404();