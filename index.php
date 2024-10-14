<?php get_header(); ?>



<div class="custom-header">

    <img alt="" src="<?php header_image(); ?>">
</div>

<section class="content-area">
    <div class="  left-column">
        <?php
        $query = new WP_Query( array( 'cat' => 20 ) );
        if ($query ->have_posts()) :
            while ($query ->have_posts()) :$query -> the_post(); ?>
                <div class="post">
                    <div class="post-heading">
                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                    </div>
                    <div>
                        <!-- <h1><?php the_post_thumbnail('medium'); ?></h1> -->
                    </div>
                    <div class="post-description">
                        <?php the_content(); ?>
                    </div>
                    <div class="signature">
                        <b>Author: </b><?php the_author(); ?><br>
                        <b>Time: </b><?php the_time(); ?><br>
                        <b>Date: </b><?php the_date(); ?><br>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <?php echo paginate_links(); ?>

    </div>
    <div class=" right-column">
        <!-- <h1>This  is  right area</h1>

    <p>Lorem ipsum dolor sit amet.</p> -->

        <?php get_sidebar(); ?>





    </div>
</section>



<?php get_footer(); ?>




