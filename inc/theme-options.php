<?php

// theme options with acf
if( function_exists('acf_add_options_page') ) {	
    acf_add_options_page(array(
		'page_title' 	=> 'Dbuds Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-optins',
		'capability'	=> 'edit_posts',
        'position'      => '02'
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Website Logos',
		'menu_title'	=> 'Website Logos',
		'parent_slug'	=> 'theme-optins',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social',
		'menu_title'	=> 'Socials',
		'parent_slug'	=> 'theme-optins',
	));
}