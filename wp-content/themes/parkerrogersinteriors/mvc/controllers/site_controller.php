<?php

class SiteController extends ChesterBaseController {
	
	//test function
	public function showPostPreviews() {

	  $posts = ChesterWPCoreDataHelpers::getWordpressPostsFromLoop();

		//we echo out the results of the renderPage function which outputs the content along with the header and footer
	  echo $this->renderPage('post_previews', array(
		'posts' => $posts,
		'next_posts_link' => get_next_posts_link(),
		'previous_posts_link' => get_previous_posts_link()
	  ));
	}
	
	public function showHome() {
		echo $this->renderPage('home');
	}
	
	public function showProjects(){}
	
	public function showPress(){}
	
	public function showAbout(){}
	
	public function showContact(){}
	
	
	

}

?>