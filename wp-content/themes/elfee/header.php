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
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                </div>
                <div>
                    <p class="p_title_header"><span class="span_elfee">Elfée</span> Morgane</p>
                    <div class="div_subtitle_header">
                        <p class="p_subtitle_header_reflexology">Réflexologue </p> - <p class="p_subtitle_header_massage"> Praticienne en massages sonores</p>
                    </div>
                </div>
            </div>
            <div class="social">
                <a class="link_insta" href="https://www.instagram.com/morganegrignon/"><img src="<?= get_template_directory_uri() ?>/assets/img/insta_line.png" alt=""></a>
                <a class="link_facebook" href="https://www.facebook.com/morgane.angele"><img src="<?= get_template_directory_uri() ?>/assets/img/facebook_line.png" alt=""></a>
            </div>
        </div>
        <?php
        $icon = 'reflexology.png';
        ?>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'nav_header',
            'menu_class' => 'ul_menu_header',
            // 'link_after' => '<img src="'. get_template_directory_uri() . '/assets/img/' . $icon . '" alt="" style="width: 50px; margin: 0 auto;">',
            // 'link_after' => test()
            // 'link_after' => get_menu_item_ID(),
            'walker' => new Menu_With_Description
        ]) ?>

        <?php
        // function get_menu_item_ID()
        // {
        //     $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
        //     // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
        //     $menuID = $menuLocations['header']; // Get the *primary* menu ID
        //     $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
        //     foreach ($primaryNav as $navItem) {
        //         // echo $navItem->ID;
        //         echo $navItem->title;
        //         // return $navItem->ID;
        //         // return $navItem->title;
        //         // return $navItem->ID;
        //     }
        
        // $query = new WP_Query([
        //     'post_type' => [
        //         'nav_menu_item' => 'navigation'
        //     ]
        // ]);
        $query = new WP_Query([
            'post_type' =>  'nav_menu_item',
            'post_in' => [22,23]
        ]);
        
        // echo $query->post_in[0]; die();
        
        // echo '<pre>';
        // print_r($query);
        // echo '</pre>';
        // die();

        // var_dump(get_query_var($query->posts[0]));


    // function montheme_pre_get_posts($query) {
        // var_dump($query); die();
    //     echo '<pre>';
    //     print_r($query);
    //     echo '</pre>';
    //     die();
    // }
    // add_action('pre_get_posts', 'montheme_pre_get_posts');
        if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
        

        // echo '<pre>';
        // print_r($query->the_post(get_the_ID()));
        // print_r(the_post());
        // echo '</pre>';
        
        
        ?>

        <?php 
        endwhile; wp_reset_postdata(); 
        endif;
        // }
        ?>

    </div>

    <div class="wrap">