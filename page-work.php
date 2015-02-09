<?php

/* AG Default PAGE */

get_header();

/* Content

	Category Sidebar
	*/

	$catContext = array('nav' => Timber::get_terms('services') );
	$context['categories'] = Timber::compile('/views/components/category_nav.html.twig', $catContext);
	/*
	Project Wall
	*/
	$projectArgs = array(
		"post_type" 		=> ( 'project' ) ,
		"posts_per_page"	=>	'-1'
	);
	$context[ 'project_wall' ] = Timber::get_posts($projectArgs); 
	$context[ 'project_wall' ] = array(
		'tiles'=>$context['project_wall']
		,'slide_template'=> '/views/content/work_tile.html.twig'
		);
	$context[ 'project_wall' ] = Timber::compile('/views/components/flip_tile_wall.html.twig', $context['project_wall']);

	Timber::render('/views/pages/work.html.twig', $context);


get_footer();