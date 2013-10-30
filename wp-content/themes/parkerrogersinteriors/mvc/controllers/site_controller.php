<?php

class SiteController extends ChesterBaseController {
	
	/* IMPORTANT 
		renderPage function loads header, footer, and site title files with page
		render function loads just the page
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
			'posts' => $posts,
			'next_posts_link' => get_next_posts_link(),
			'previous_posts_link' => get_previous_posts_link()
		));
	}
	
	//renders press.mustache with posts
	public function showPress(){
		//framework helper to get data from wp loop
		$posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();
		
		echo $this->renderPage('press', array(
			'posts' => $posts,
			'next_posts_link' => get_next_posts_link(),
			'previous_posts_link' => get_previous_posts_link()
		));
	}
	
	//renders about.mustache
	public function showAbout(){
		echo $this->renderPage('about');
	}
	
	//renders contact.mustache
	public function showContact(){
		echo $this->renderPage('contact');
	}
	
} //SiteController

?>