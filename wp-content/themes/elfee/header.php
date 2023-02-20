<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@400;500;600;700&family=Khula:wght@300;400;600;700;800&family=Kirang+Haerang&display=swap" rel="stylesheet">
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
        // $icon = 'reflexology.png';
        ?>
        <?php
        // function get_menu_item_ID()
        // {
            // global $wpdb;

            // $results = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_type=\"nav_menu_item\"", ARRAY_A);
            // // $results = $wpdb->get_row("SELECT * FROM wp_posts WHERE post_type=\"nav_menu_item\"", ARRAY_A);
            // echo '<pre>';
            // var_dump($results);
            // print_r($results);
            // echo '</pre>';
            // foreach($results as $result) {
            // // echo $result['ID'];
            //     $ID = $result['ID'];
            // // return $result['ID'];
            //     echo $ID;
            //     if($ID == 32) {
            //         $icon = 'bowl.png';
            //     } else {
            //         $icon = 'reflexology.png';
            //     }
            // }
            // die();

        // };
        ?>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav',
            'container_class' => 'nav_header',
            'menu_class' => 'ul_menu_header',
            // 'link_after' => '<img src="'. get_template_directory_uri() . '/assets/img/' . $icon . '" alt="" style="border: 1px solid black; width: 50px; margin: 0 auto;">',
            // 'link_after' => '<img src="' . get_field('detente_sonore') . '" alt="" style="border: 1px solid black; width: 50px; margin: 0 auto;">',
            // 'link_after' => get_field('icone_menu'),
            // 'link_after' => test(),
            // 'link_after' => get_menu_item_ID(),
            'walker' => new Menu_With_Description
        ]) ?>

        <?php
        $query = new WP_Query([
            'post_type' =>  'nav_menu_item',
            'post_in' => [22,23]
        ]);
        
        if($query->have_posts()):
        while($query->have_posts()): $query->the_post();
    
        ?>

        <?php 
        endwhile; wp_reset_postdata(); 
        endif;
        // }
        ?>

    </div>

    <div class="wrap">