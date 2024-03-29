<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="container-fluid p-0">

    <div class="aboutImage w-100">
        <div class="w-100 h-100" style="background: rgba(255,255,255, 0.3) !important;">
            <?php if(has_nav_menu( 'top_navigation' )): ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-dark topNAV">
                    <div class="logo">
                        <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                            <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="img-fluid logoImage">
                        <?php else: ?>
                            <a class="navbar-brand" href="index.php"><?php echo get_bloginfo('name'); ?></a>
                        <?php endif; ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li>
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'top_navigation',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'navText',
                                    'container_id'      => 'top_navigation',
                                    'menu_class'        => 'nav navbar-nav navLinks',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                                ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            <?php endif; ?>
        </div>
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
</div>
<?php get_footer(); ?>
