<?php get_header(); ?>

<?php if (get_theme_mod('2019headerImageDisplay')): ?>
    <div class="container-fluid p-0">
        <div class="headerImage">
            <img src="<?php echo get_theme_mod('2019headerImageDisplay');  ?>" class="headerImage">
            <!-- <h1 class="display-3 headerText"><?php echo get_bloginfo('name'); ?></h1> -->
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

<div class="aboutSection">
    <h1>this is the get to know us section</h1>
</div>

<?php if (get_theme_mod('2019servicesBackgroundDisplay')): ?>
    <div class="row">
        <img src="<?php echo get_theme_mod('2019servicesBackgroundDisplay');  ?>"class="servicesSection p-0">
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
