<?php if(has_nav_menu( 'bottom_navigation' )): ?>
    <footer class="bg-dark text-white p-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-8 d-none d-sm-block">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'bottom_navigation',
                        'container'       => '',
                        'menu_class'      => 'footerNav'
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
