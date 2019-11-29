<?php get_header(); ?>

<div class="container-fluid p-0">
    <div class="headerImage">
        <?php if(has_nav_menu( 'top_navigation' )): ?>
            <nav class="navbar navbar-expand-md navbar-light topNAV p-0 " role="navigation">
                <div class="logo">
                    <?php if (get_theme_mod('2019logoImageDisplay')): ?>
                        <img src="<?php echo get_theme_mod('2019logoImageDisplay');  ?>"class="logoImage img-fluid">
                    <?php else: ?>
                        <h1 class="siteName"><?php echo get_bloginfo('name'); ?></h1>
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


                <form action="<?php echo home_url();?>" method="get" class="d-none d-lg-block d-xl-block">
                    <input name="s" type="text" class="form-control border border-dark" aria-describedby="searchPosts" placeholder="search..." value="<?php the_search_query(); ?>">
                    <button class="btn text-black ml-3 searchButton mr-4 border border-dark" type="submit">Search</button>
                </form>
            </nav>
        <?php endif; ?>
    </div>

    <?php if (have_posts()): the_post(); ?>
        <div class="row m-0">
            <div class="col d-flex justify-content-center">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
