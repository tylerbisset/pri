<?php
/*
Template Name: Projects
*/

//require the site controller
require_once(dirname(__FILE__).'/mvc/controllers/site_controller.php');

//init the site controller
$siteController = new SiteController();

//call the showProjects function
$siteController->showProjects();

?>