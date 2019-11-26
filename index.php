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

</div>




<?php get_footer(); ?>
