<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" >Agence immoblière</a>
            <?php
            $defaults = [
                'theme_location' => 'header',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'menu_class' => 'navbar-nav mr-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
            ];

            wp_nav_menu($defaults);
            ?>
    </nav>
</header>

<div class="container mt-4">
