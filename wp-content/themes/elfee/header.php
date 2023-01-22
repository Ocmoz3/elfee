<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&family=Kirang+Haerang&display=swap" rel="stylesheet">
        <?php wp_head() ?>
    </head>
    <body>
        <div class="div_header">
            <div style="width: 60%; display: flex;">
                <div style="height: 50px;">
                    <img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/logo.png" alt="" style="width: 50px; height: 50px;">
                </div>
                <div style="height: 50px;">
                    <p>Elfée Morgane</p>
                    <p>Réflexologue - Praticienne en massages sonores</p>
                </div>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => 'nav',
                'container_class' => 'nav_header',
                'menu_class' => 'ul_menu_header'
            ]) ?>
        </div>
        <div class="wrap">
