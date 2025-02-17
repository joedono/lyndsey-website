<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" />
        <?php wp_head(); ?>
        <script type="text/javascript">
            function scrollToTop() {
                window.scrollTo(0, 0);
            }
        </script>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed container">
            <header id="header" class="row" role="banner">
                <div id="branding col-12">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg" alt="Lyndsey Luther" class="img-fluid" />
                    </a>
                </div>
                <div class="col-12">
                    <nav id="menu" class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation" onclick="scrollToTop()">
                            <span class="oi oi-menu"></span>
                        </button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'container_id' => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-center',
                            'menu_class' => 'navbar-nav mr-auto'
                        ) );
                        ?>
                    </nav>
                </div>
            </header>
            <div id="container" class="row">
                <main id="content" role="main">
