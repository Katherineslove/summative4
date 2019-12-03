<?php
/*
Template Name: Shop Page
Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="container-fluid p-0">

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
