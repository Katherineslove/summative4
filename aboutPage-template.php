<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
