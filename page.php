<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="post">
            <div class="post-heading">
                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            </div>
            <div>
                <!-- <h1><?php the_post_thumbnail('medium'); ?></h1> -->
            </div>
            <div class="post-description">
                <?php the_content(); ?>
            </div>
        </div>
<?php
    endwhile;
endif;
?>