<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero"); ?>
<div class="container">
    <div class="authorsection">
        <div class="row">
            <div class="col-md-2">
				<?php echo get_avatar(get_the_author_meta("id")); ?>
            </div>
            <div class="col-md-10">
                <h2><?php echo get_the_author_meta("display_name"); ?></h2>
                <p>
					<?php echo get_the_author_meta("description"); ?>
                </p>
            </div>
        </div>
    </div>
</div>
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