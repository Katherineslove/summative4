<?php get_header(); ?>

<div class="container-fluid p-0">

    <div class="headerImage w-100">
        <div class="w-100 h-100" style="background: rgba(255,255,255, 0.3) !important;">
            <?php if(has_nav_menu( 'top_navigation' )): ?>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php"><?php echo get_bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'top_navigation',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navText',
                                'container_id'      => 'top_navigation',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </ul>
                    </div>
                </nav>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php get_footer(); ?>
