<?php

class SiteController extends ChesterBaseController {
		
	/* IMPORTANT 
		renderPage function loads header, wp-nav-menu, footer, and site title files with page
		render function loads just the page
		Refer to Chester/base_controller.php
	*/
	
	//renders home.mustache
	public function showHome() {
		echo $this->renderPage('home');
	}
	
	//renders projects.mustache with posts
	public function showProjects(){
		//framework helper to get data from wp loop
		$posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();
		echo $this->renderPage('projects', array(			
			'posts' => $posts	
		));		
	}
	
	//renders press.mustache with posts
	public function showPress(){
		//framework helper to get data from wp loop
		$posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();
		echo $this->renderPage('press', array(
			'posts' => $posts
		));
	}
	
	//renders about.mustache
	public function showAbout(){		
		echo $this->renderPage('about');
	}
	
	//renders contact.mustache
	public function showContact(){	
		$posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();
		echo $this->renderPage('contact', array(
			'posts' => $posts
		));
	}
	
} //SiteController

?>