<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero"); ?>

<div class="posts">
    <?php while( have_posts() ):
    the_post();
    ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2 class="post-title text-center"><?php the_title(); ?></h2>
                <p class="text-center">
                  <strong><?php the_author(); ?></strong><br/>
                  <?php echo get_the_date(); ?>
                </p>
            </div>
        </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <?php if (has_post_thumbnail()): ?>
                        <p><?php the_post_thumbnail("large", array("class" => 'img-fluid')); ?></p>
                    <?php endif ?>
                   <?php

                   the_content();

                   next_post_link();

                   echo '<br>';

                   previous_post_link();


                    ?>
                </div>
                <?php if(comments_open()) : ?>

                    <div class="col-md-10 offset-md-1">
                        <?php comments_template(); ?>
                    </div>

                <?php endif; ?>
            </div>
    </div>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>