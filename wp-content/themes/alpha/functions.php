<?php

function alpha_bootstraping()
{
	load_theme_textdomain("alpha");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
}

add_action("after_setup_theme", "alpha_bootstraping");


function alpha_assets()
{
	wp_enqueue_style("alpha", get_stylesheet_uri());
	wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}

add_action("wp_enqueue_scripts", "alpha_assets");

function alpha_sidebar()
{
   register_sidebar(
   	   array(
   		   'name'          => __( 'Single Post Sidebar', 'alpha' ),
   		   'id'            => 'sidebar-1',
   		   'description'   => __( 'Right Sidebar', 'alpha' ),
   		   'before_widget' => '<li id="%1$s" class="widget %2$s">',
   		   'after_widget'  => '</li>',
   		   'before_title'  => '<h2 class="widgettitle">',
   		   'after_title'   => '</h2>' )
      );
}

add_action("widgets_init", "alpha_sidebar");