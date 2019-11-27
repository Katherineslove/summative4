<?php get_header(); ?>

<div class="container-fluid p-0">
    <div class="headerImage">
        <?php if(has_nav_menu( 'top_navigation' )): ?>
            <nav class="navbar navbar-expand-md navbar-light topNAV p-0" role="navigation">
                <div class="container p-0">
                    <div class="logo mr-2">
                        <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                            <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="logo w-100">
                        <?php else: ?>
                            <h1 class="siteName"><?php echo get_bloginfo('name'); ?></h1>
                        <?php endif; ?>
                    </div>

                    <button class="navbar-toggler button" type="button" data-toggle="collapse" data-target="#top_navigation" aria-controls="top_navigation" aria-expanded="false" aria-label="Toggle navigation">
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
                </div>
                <form action="<?php echo home_url();?>" method="get" class="d-flex justify-content-center searchSection">
                    <input type="hidden" name="post_type" value="post, movie"></input>
                    <input name="s" type="text" class="form-control" aria-describedby="searchPosts" placeholder="Search Posts" value="<?php the_search_query(); ?>">
                    <button class="btn text-black ml-3 searchButton mr-4" type="submit">Search</button>
                </form>
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

    <?php if (get_theme_mod('2019servicesBackgroundDisplay')): ?>
        <div class="row m-0 servicesSection">
            <img src="<?php echo get_theme_mod('2019servicesBackgroundDisplay');  ?>"class="servicesSection">
        </div>
    <?php else: ?>
        <div class="servicesSection">
            <h1>this is the services section</h1>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
