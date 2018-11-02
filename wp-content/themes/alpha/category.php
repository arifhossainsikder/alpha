<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero"); ?>
<h2 class="text-center">Posts under: <?php single_cat_title(); ?></h2>
    <div class="posts">
		<?php while (have_posts()){
			the_post();
			?>
            <a class="text-center" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <?php
		}
		
			?>

        <div class="container post-pagination">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
					<?php the_posts_pagination(array(
						'screen_reader_text' => ' ',
						'prev_text' => 'New posts',
						'next_text' => 'Old posts'
					)); ?>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>