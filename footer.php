<?php if(has_nav_menu( 'bottom_navigation' )): ?>
    <footer class="navColour p-4 footerBar">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'bottom_navigation',
                        'container' => '',
                        'menu_class' => 'footerNav'
                    )); ?>
                </div>
                <div class="col-3">
                    <div class="copyright">
                        © 2019 St John New Zealand
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
