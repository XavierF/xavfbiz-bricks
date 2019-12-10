<nav id="header-logobar" class="navbar navbar-expand navbar-dark container py-4 justify-content-center">

    <?php if ( has_custom_logo() ) { 

        the_custom_logo();

    } else { ?>

        <a class="navbar-brand" href="<?php echo esc_url_raw(home_url()); ?>"><?php bloginfo('name'); ?></a>

    <?php } ?>
 
</nav>