<?php
/*
Template Name: Donations
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid p-0">
    <div class="aboutImage">
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
            </nav>
        <?php endif; ?>
    </div>

    <div class="row d-flex justify-content-center py-5">
        <div class="col-9">
            <div class="card mt-3 borderColour">
                <h5 class="card-header"><?php the_title(); ?></h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address..">

                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add your message here..."></textarea>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <button type="submit" class="btn btnColour">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
