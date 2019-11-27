<?php get_header(); ?>

<div class="container-fluid p-0">
    <div class="headerImage">
        <?php if(has_nav_menu( 'top_navigation' )): ?>
            <nav class="navbar navbar-expand-md navbar-light topNAV p-0" role="navigation">
                <div class="col-3 logo">
                    <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                        <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="logoImage img-fluid">
                    <?php else: ?>
                        <h1 class="siteName"><?php echo get_bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </div>

                <div class="col-6">
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

                <div class="col-3">
                    <form action="<?php echo home_url();?>" method="get" class="d-flex justify-content-center searchSection">
                        <input type="hidden" name="post_type" value="post, movie"></input>
                        <input name="s" type="text" class="form-control border border-dark" aria-describedby="searchPosts" placeholder="search..." value="<?php the_search_query(); ?>">
                        <button class="btn text-black ml-3 searchButton mr-4 border border-dark" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        <?php endif; ?>
    </div>

    <!-- <?php if (have_posts()): the_post(); ?>
    <div class="row m-0">
    <div class="col d-flex justify-content-center">
    <div class="aboutSection">
    <?php the_content(); ?>
</div>
</div>
</div>
<?php endif; ?> -->
</div>

<!-- <?php get_footer(); ?> -->
