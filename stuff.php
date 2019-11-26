
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
        <!-- <img src="<?php echo get_theme_mod('2019servicesBackgroundDisplay');  ?>"class="servicesSection"> -->
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
