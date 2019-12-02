<?php get_header(); ?>

<div class="container-fluid p-0">
    <div class="headerImage">
        <?php if(has_nav_menu( 'top_navigation' )): ?>
            <nav class="navbar navbar-expand-md navbar-light topNAV p-0 " role="navigation">
                <div class="logo">
                    <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                        <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="logoImage img-fluid">
                    <?php else: ?>
                        <h1 class="text-white align-items-center"><?php echo get_bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </div>


                <button class="navbar-toggler button" id="buttonClick" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="links">
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
                </div>
            </nav>
        <?php endif; ?>
    </div>

    <?php if (have_posts()): the_post(); ?>
        <div class="row m-0">
            <div class="col d-flex justify-content-center">
                <div class="aboutSection">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (get_theme_mod('2019servicesBackgroundDisplay') === 'yes'): ?>
        <div class="servicesBackground">
            <div class="row m-0 servicesSection">
                <nav class="navbar navbar-expand-md navbar-light servicesNav p-0 " role="navigation">

                    <div class="servicesLinks">
                        <h1 class="servicesHeading">OUR SERVICES</h1>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'services_menu',
                            'container'         => 'div',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    </div>
                </nav>
            </div>
        </div>

    <?php else: ?>

    <?php endif; ?>





</div>

<?php get_footer(); ?>
