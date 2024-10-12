
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

<section class="content-area">
    <div class="  left-column" >
    <?php include('page.php'); ?>
    <?php echo paginate_links(); ?>
    
    </div>
    <div class=" right-column" >
    <!-- <h1>This  is  right area</h1>

    <p>Lorem ipsum dolor sit amet.</p> -->

    <?php get_sidebar(); ?>
    





    </div>
</section>



<?php get_footer(); ?>





