<?php 

function deviqbal_wp_theme_widgets() {

	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'dbuds' ),
		'id' => 'blog_sidebar',
		'before_widget' => '<div class="single-sidebar-item">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="single-sidebar-inner">',
	) );

	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'dbuds' ),
		'id' => 'right_sidebar',
		'before_widget' => '<div class="single-sidebar-item">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2><div class="single-sidebar-inner">',
	) );

}
add_action('widgets_init', 'deviqbal_wp_theme_widgets');
