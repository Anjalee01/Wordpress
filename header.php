<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title(); ?>
        <?php echo bloginfo("name"); ?>
    </title>

    <?php wp_head();?>
</head>

<body>

    <header>

        <img class="header_image">
        <?php

        the_custom_logo();

        ?>
        </img>


    </header>

    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'ul',
            'container_class' => 'main-menu',
            'menu_class' => 'nav-menu',
        ));

        wp_head();

        ?>

    </nav>

