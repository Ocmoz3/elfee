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
        <?php //get_nav_icon() 
        $icon = 'icone_accueil.png';
        ?>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'nav_header',
            'menu_class' => 'ul_menu_header',
            'link_after' => '<img src="' . get_template_directory_uri() . '/assets/img/' . get_nav_icon() . '" alt="" style="width: 50px; margin: 0 auto;">'
            // 'link_after' => '<img src="'. get_template_directory_uri() . '/assets/img/' . $icon . '" alt="" style="width: 50px; margin: 0 auto;">'
            // 'link_after' => get_nav_icon()
            // 'link_after' => get_menu_item_ID()
            // 'link_after' => get_menu_item_ID()
        ]) ?>
        <?php

        function get_nav_icon()
        {

            // $itemID = get_menu_item_ID();
            // echo $itemID;
            $links = wp_get_menu_array('navigation');
            echo '<hr>';
            echo '<hr>';
            // var_dump($links);
            echo '<hr>';
            echo '<hr>';
            // if ($itemID == 31) {
            $array = [];
            foreach ($links as $link) {
                $array[] = $link['ID'];
                // $array[$link->ID]['ID'] = $link['ID'];
                // echo $link['ID'];
                var_dump($array);
                // return $link['ID'];
            }

            if ($link['ID'] == 24) {
                $icon = 'icone_accueil.png';
                echo $icon;
            } elseif ($link['ID'] == 31) {
                $icon = 'reflexology.png';
            }
            // return $navItem->ID;
            return $icon;
        }

        function get_menu_item_ID()
        {
            $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
            // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
            $menuID = $menuLocations['header']; // Get the *primary* menu ID
            $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
            foreach ($primaryNav as $navItem) {
                // echo $navItem->ID;
                echo $navItem->title;
                // return $navItem->title;
                // return $navItem->ID;

            }
        }

        // //////////////////////////////////////:
        function wp_get_menu_array($current_menu)
        {

            $array_menu = wp_get_nav_menu_items($current_menu);
            $menu = array();
            foreach ($array_menu as $m) {
                if (empty($m->menu_item_parent)) {
                    $menu[$m->ID] = array();
                    $menu[$m->ID]['ID'] = $m->ID;
                    $menu[$m->ID]['title'] = $m->title;
                    $menu[$m->ID]['url'] = $m->url;
                    $menu[$m->ID]['children'] = array();
                }
            }
            // $submenu = array();
            // foreach ($array_menu as $m) {
            //     if ($m->menu_item_parent) {
            //         $submenu[$m->ID] = array();
            //         $submenu[$m->ID]['ID'] = $m->ID;
            //         $submenu[$m->ID]['title'] = $m->title;
            //         $submenu[$m->ID]['url'] = $m->url;
            //         $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
            //     }
            // }
            return $menu;
        }
        
        ?>

    </div>
    <?php
    echo'<hr>';
    echo'<hr>';
    $a = wp_get_menu_array('navigation');
    // print_r($a);
    // exit;
    echo'<hr>';
    // echo $a['24']['ID'];
    // get_nav_icon()
    ?>

    <div class="wrap">