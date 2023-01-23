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
            <div class="div_sub_header">
                <div class="div_logo_title_header">
                    <div class="div_logo_header">
                        <img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/logo.png" alt="">
                    </div>
                    <div>
                        <p class="p_title_header"><span class="span_elfee">Elfée</span> Morgane</p>
                        <div class="div_subtitle_header">
                            <p class="p_subtitle_header_reflexology">Réflexologue </p> - <p class="p_subtitle_header_massage"> Praticienne en massages sonores</p>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <a class="link_insta" href="https://www.instagram.com/morganegrignon/"><img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/insta_line.png" alt=""></a>
                    <a class="link_facebook" href="https://www.facebook.com/morgane.angele"><img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/facebook_line.png" alt=""></a>
                </div>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => 'nav',
                'container_class' => 'nav_header',
                'menu_class' => 'ul_menu_header',
                // 'link_after' => '<img src="'. get_template_directory_uri() .'/assets/img/icone_accueil.png" alt="" style="width: 50px; margin: 0 auto;">'
                // 'link_after' => get_nav_icon()
                'link_after' => get_menu_item_ID()
            ]) ?>
            <?php //get_nav_icon() ?>
            <?php
                function get_nav_icon() {
                    
                    $itemID = get_menu_item_ID();
                    
                    if($itemID == 24) {
                        $icon = '<img src="'. get_template_directory_uri() .'/assets/img/icone_accueil.png" alt="" style="width: 50px; margin: 0 auto;">';
                    } 
                    // return  $navItem->ID;
                    return $icon;
                }

                function get_menu_item_ID() {
                    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                    // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                    $menuID = $menuLocations['header']; // Get the *primary* menu ID

                    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
                    // var_dump($primaryNav);
                    foreach ( $primaryNav as $navItem ) {

                        // echo '<li>'.$navItem->ID.'</li>';
                        // $navItem->ID;
                        // $itemID = [];
                        // echo $navItem->ID;
                        // $itemID[] = $navItem->ID;
                        return  $navItem->ID;
                    // return $itemID;

                    }
                    // return $itemID;
                    // var_dump($itemID);
                    // die();
                }
            ?>
        </div>
        
        <?php 
        ?>
        
        <div class="wrap">
