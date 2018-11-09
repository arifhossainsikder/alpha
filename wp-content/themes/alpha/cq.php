<?php /* Template Name: Custom Query Template*/
get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero"); ?>
    <div class="posts text-center">
		<?php
		$paged          = get_query_var("paged") ? get_query_var("paged") : 1;
		$posts_per_page = 2;
		$total          = 9;
		$post_ids       = array(19, 11, 6);
		$_p             = get_posts(array(
			'posts_per_page' => $posts_per_page,
			'author_in' => array(1),
			'numberposts' => $total,
//			'order_by' => 'post_in',
			'paged' => $paged
		));

		foreach ($_p as $post) {
			setup_postdata($post);
			?>
            <a class="text-center" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php
		}
		wp_reset_postdata();
		?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
					<?php
					echo paginate_links(array(
					        'total' => ceil($total / $posts_per_page)
                    ));
					?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>