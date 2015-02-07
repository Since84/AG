<?php
	/* AG Home Page */

	get_header();
	$context = Timber::get_context();

	$galleryArgs = array(
		"post_type" 		=> ( 'dynamite-slide' ) ,
		"posts_per_page"	=>	'8'
	);
	$galleryContextSlide[ 'feed' ] = Timber::get_posts($galleryArgs); 
	$galleryContextSlide[ 'slide_template' ] = Timber::compile('/views/content/project_slide.html.twig');
	$context['gallery_slide'] = Timber::render('/views/components/static_feed.html.twig', $gallerySlideContext)
	
?>