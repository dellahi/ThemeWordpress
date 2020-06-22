<br>
<br>
<h2>Pied de la page</h2>
</div>
<footer>
    <nav class="navbar navbar-expand-md navbar-dark bg-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $footer = [
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'footer-navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ];

            wp_nav_menu($footer);

            ?>
    </nav>
</footer>
</div>
<?php
wp_footer();
?>
</body>
</html>
