<?php

function alpha_bootstraping() {
	load_theme_textdomain( "alpha" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
}

add_action( "after_setup_theme", "alpha_bootstraping" );


function alpha_assets() {
	wp_enqueue_style( "alpha", get_stylesheet_uri() );
	wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
}

add_action( "wp_enqueue_scripts", "alpha_assets" );

function alpha_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Single Post Sidebar', 'alpha' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Right Sidebar', 'alpha' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Left', 'alpha' ),
			'id'            => 'footer-left',
			'description'   => __( 'Widgetized area for left side', 'alpha' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Right', 'alpha' ),
			'id'            => 'footer-right',
			'description'   => __( 'Widgetized area for right side', 'alpha' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		)
	);
}

add_action( "widgets_init", "alpha_sidebar" );

function alpha_the_excerpt($excerpt){
	if (!post_password_required()){
		return $excerpt;
	} else{
		echo get_the_password_form();
	}
}
add_filter("the_excerpt","alpha_the_excerpt");


function alpha_protected_title_change_format(){
	return "%s";
}
add_filter("protected_title_format","alpha_protected_title_change_format");