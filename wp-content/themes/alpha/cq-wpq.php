<?php /* Template Name: Custom Query WP query Template*/
get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero"); ?>
    <div class="posts text-center">
		<?php
		$paged          = get_query_var("paged") ? get_query_var("paged") : 1;
		$posts_per_page = 2;
		$post_ids       = array(19, 11, 6);
		$_p             = new WP_Query(array(
//			'category_name' => 'uncategorized',
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
//			'tax_query' => array(
//				'relation' => 'OR',
//				array(
//					'taxonomy' => 'category',
//					'field' => 'slug',
//					'terms' => array('uncategorized')
//				),
//				array(
//					'taxonomy' => 'post_tag',
//					'field' => 'slug',
//					'terms' => array('nature')
//				)
//			)
//			'monthnum' => 9,
//			'year' => 2018,
//			'post_status' => 'draft'
			'tax_query' => array(
				'relation' => 'OR',
				array(
					'taxonomy' => 'post_format',
					'field' => 'slug',
					'terms' => array(
						'post-format-audio',
						'post-format-video'),
					'operator' => 'NOT IN'
				),
			)
		));

		while ($_p->have_posts()) {
			$_p->the_post();
			?>
            <a class="text-center" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php
		}
		wp_reset_query();
		?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
					<?php echo paginate_links(array(
						'total' => $_p->max_num_pages,
						'current' => $paged,
					)) ?>

                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>