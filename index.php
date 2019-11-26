<?php get_header(); ?>

<?php if (get_theme_mod('2019headerImageDisplay')): ?>
    <div class="container-fluid p-0">
        <div class="headerImage">
            <img src="<?php echo get_theme_mod('2019headerImageDisplay');  ?>" class="headerImage">
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 headerText"><?php echo get_bloginfo('name') ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

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
    <div class="row m-0">
        <img src="<?php echo get_theme_mod('2019servicesBackgroundDisplay');  ?>"class="servicesSection">
    </div>
<?php else: ?>
    <div class="servicesSection">
        <h1>this is the services section</h1>
    </div>
<?php endif; ?>







<?php if (get_theme_mod('2019newsSectionDisplay')): ?>
    <div class="row">
        <img src="<?php echo get_theme_mod('2019newsSectionDisplay');  ?>"class="newsSection p-0">
    </div>
<?php else: ?>
    <div class="newsSection">
        <h1>this is the news section</h1>
    </div>
<?php endif; ?>





<?php get_footer(); ?>
