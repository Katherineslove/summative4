


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
