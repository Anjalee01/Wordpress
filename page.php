<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<div class="custom-header">

    <img alt="" src="<?php header_image(); ?>">
</div>

<section class="content-area">
    <div class="  left-column">
        <?php
        
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
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




