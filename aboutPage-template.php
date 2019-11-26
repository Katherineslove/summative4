<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php if (get_theme_mod('2019aboutImageDisplay')): ?>
    <div class="container-fluid p-0">
        <div class="headerImage">
            <img src="<?php echo get_theme_mod('2019aboutImageDisplay');  ?>" class="headerImage">
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


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
