<?php

class SiteController extends ChesterBaseController {
	
	
	/* IMPORTANT 
		renderPage function loads header, footer, and site title files with page
		render function loads just the page
	*/
	
	//renders home.mustache
	public function showHome() {
		wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
		echo $this->renderPage('home');
	}
	
	//renders projects.mustache with posts
	public function showProjects(){
		//framework helper to get data from wp loop
		$posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();
		wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
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
		wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
		echo $this->renderPage('press', array(
			'posts' => $posts,
			'next_posts_link' => get_next_posts_link(),
			'previous_posts_link' => get_previous_posts_link()
		));
	}
	
	//renders about.mustache
	public function showAbout(){
		wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
		echo $this->renderPage('about');
	}
	
	//renders contact.mustache
	public function showContact(){
		wp_nav_menu( array( 'header-menu' => 'header-menu' ) );
		echo $this->renderPage('contact');
	}
	
} //SiteController

?>