<?php
/*
Template Name: Shop Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

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
