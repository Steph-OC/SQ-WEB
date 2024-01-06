<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--définit automatiquement la langue en fonction des régalages WP -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>"><!-- permet de définir l'encodage et permet de récupérer d'autres infos -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?> <!-- !important, c'est par cette fonction que sont déclarer les scripts de style -->
</head>

<body <?php body_class('site'); ?>> <!-- permet d'obtenir des noms de classe css en fonction de la page visitée -->

    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="site_header">
            <div class="container-logoNav">
            <?php
                get_template_part('template-parts/site-logo');
                ?>
                <nav class="site_nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => 'ul',
                            'menu_class' => 'site_header_menu',
                        )
                    ); ?>
                </nav>
                
            </div>

            <div class="banner">
                <?php
                get_template_part('template-parts/site-titre');
                ?>
            </div>

        </header>