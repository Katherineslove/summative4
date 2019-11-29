<?php if(has_nav_menu( 'bottom_navigation' )): ?>
    <footer class="navColour p-4 footerBar">
        <div class="container footerContainer">
            <div class="row ">
                <div class="col-9 d-none d-sm-block">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'bottom_navigation',
                        'container' => '',
                        'menu_class' => 'footerNav'
                    )); ?>
                </div>
                <div class="col-3 copyright">
                    <h6>© 2019 St John New Zealand</h6>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
