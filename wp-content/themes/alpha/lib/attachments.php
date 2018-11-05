<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false );

add_filter( 'attachments_default_instance', '__return_false' );

function alpha_attachments( $attachments )
{
	$fields         = array(
		array(
			'name'      => 'title',                         // unique field name
			'type'      => 'text',                          // registered field type
			'label'     => __( 'Title', 'attachments' ),    // label to display
		)
	);

	$args = array(

		// title of the meta box (string)
		'label'         => 'Featured slider',

		// all post types to utilize (string|array)
		'post_type'     => array( 'post'),


		// allowed file type(s) (array) (image|video|text|audio|application)
		'filetype'      => array('image'),  // no filetype limit

		// include a note within the meta box (string)
		'note'          => 'Add slider images!',


		// text for 'Attach' button in meta box (string)
		'button_text'   => __( 'Attach Files', 'alpha' ),

		// fields array
		'fields'        => $fields,

	);

	$attachments->register( 'slider', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_attachments' );


function alpha_testimonial_attachments( $attachments )
{
	$fields         = array(
		array(
			'name'      => 'name',                         // unique field name
			'type'      => 'text',                          // registered field type
			'label'     => __( 'Name', 'attachments' ),    // label to display
		),
		array(
			'name'      => 'position',                         // unique field name
			'type'      => 'text',                          // registered field type
			'label'     => __( 'Position', 'attachments' ),    // label to display
		),
		array(
			'name'      => 'company',                         // unique field name
			'type'      => 'text',                          // registered field type
			'label'     => __( 'Company', 'attachments' ),    // label to display
		),
		array(
			'name'      => 'testimonial',                         // unique field name
			'type'      => 'textarea',                          // registered field type
			'label'     => __( 'Testimonial', 'attachments' ),    // label to display
		)
	);

	$args = array(

		// title of the meta box (string)
		'label'         => 'Testimonial section',

		// all post types to utilize (string|array)
		'post_type'     => array( 'page'),


		// allowed file type(s) (array) (image|video|text|audio|application)
		'filetype'      => array('image'),  // no filetype limit

		// include a note within the meta box (string)
		'note'          => 'Add testimonials!',


		// text for 'Attach' button in meta box (string)
		'button_text'   => __( 'Add testimonial', 'alpha' ),

		// fields array
		'fields'        => $fields,

	);

	$attachments->register( 'testimonials', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_testimonial_attachments' );