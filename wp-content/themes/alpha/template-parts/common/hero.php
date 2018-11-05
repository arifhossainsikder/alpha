<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<?php if (current_theme_supports("custom-logo")): ?>

                    <div class="header-logo text-center">
						<?php the_custom_logo(); ?>
                    </div>
				<?php endif; ?>

                <h3 class="tagline"><?php bloginfo("description"); ?></h3>
                <a href="<?php echo site_url(); ?>"><h1
                            class="align-self-center display-1 text-center heading"><?php bloginfo("name"); ?></h1>
                </a>
            </div>
            <div class="col-md-12">
                <div class="navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'topmenu',
							'menu_id' => 'topmenucontainer',
							'menu_class' => 'list-inline text-center',
						)
					);
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php if (is_search()){
                ?>
                <h3><?php _e("you sarched for: ") . the_search_query();?></h3>
            <?php
            }

            echo get_search_form();

            ?>
        </div>
    </div>
</div>