<header >

    <img class="header_image">
    <?php

    the_custom_logo();

    ?>
    </img>


</header>

<nav >
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


