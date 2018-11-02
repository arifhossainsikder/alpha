<?php

function launcher_bootstraping()
{
	load_theme_textdomain("launcher");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
}

add_action("after_setup_theme", "launcher_bootstraping");


function launcher_assets()
{
	wp_enqueue_style("animate", get_theme_file_uri("/assets/css/animate.css"));
	wp_enqueue_style("icomoon", get_theme_file_uri("/assets/css/icomoon.css"));
	wp_enqueue_style("bootstrap", get_theme_file_uri("/assets/css/bootstrap.css"));
	wp_enqueue_style("launcher", get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script("easing-jquery", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jquery"));
	wp_enqueue_script("bootstrap-jquery", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), null, true);
	wp_enqueue_script("waypoint-jquery", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jquery"), null, true);
	wp_enqueue_script("countdown-jquery", get_theme_file_uri("/assets/js/simplyCountdown.js"), array("jquery"), null, true);
	wp_enqueue_script("main", get_theme_file_uri("/assets/js/main.js"), array("jquery"), time(), true);

	$launcher_year  = get_post_meta(get_the_ID(), "year", true);
	$launcher_month = get_post_meta(get_the_ID(), "month", true);
	$launcher_day   = get_post_meta(get_the_ID(), "day", true);

	wp_localize_script("main", "datedata", array(
		"year" => $launcher_year,
		"month" => $launcher_month,
		"day" => $launcher_day,
	));

}

add_action("wp_enqueue_scripts", "launcher_assets");

function launcher_sidebar()
{
	register_sidebar(
		array(
			'name' => __('Footer left sidebar', 'launcher'),
			'id' => 'footer-left',
			'description' => __('Footer left sidebar', 'launcher'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => __('Footer right sidebar', 'launcher'),
			'id' => 'footer-right',
			'description' => __('Footer right sidebar', 'launcher'),
			'before_widget' => '<section id="%1$s" class="widget %2$s text-right">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>'
		)
	);
}

add_action("widgets_init", "launcher_sidebar");


function launcher_styles()
{
	if (is_page()) {
		$thumbnail_url = get_the_post_thumbnail_url(null, "large");
		?>
        <style>
            .home-side {
                background-image: url(<?php echo $thumbnail_url;?>);
            }
        </style>
		<?php
	}
}

add_action("wp_head", "launcher_styles");