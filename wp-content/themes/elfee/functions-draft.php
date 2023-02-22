<?php
// function wp_get_menu_array($current_menu)
// {

//     $array_menu = wp_get_nav_menu_items($current_menu);
//     // var_dump($array_menu);
//     // $menu = array();
//     // $menu['name'] = array();
//     foreach ($array_menu as $m) {
//         if (empty($m->menu_item_parent)) {
//             $menu[$m->ID] = array();
//             $menu[$m->ID]['ID'] = $m->ID;
//             $menu[$m->ID]['title'] = $m->title;
//             $menu[$m->ID]['url'] = $m->url;
//         }
//     }
//     return $menu;
// }

// function get_nav_icon()
// {
//     $links = wp_get_menu_array('navigation');
//     echo '<hr>';
//     echo '<hr>';
//     echo '<hr>';
//     echo '<hr>';
//     $array = [];
//         // if(array_key_exists(24, $links))
//         if($links[24]) 
//         {
//             $icon = 'icone_accueil.png';
//         }
//         // if(array_key_exists(31, $links))
//         if($links[31])
//         {
//             $icon = 'reflexology.png';
//         }
//     return $icon;
//     echo $icon;
// }
// function get_menu_item_ID()
// {
//     $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
//     // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
//     $menuID = $menuLocations['header']; // Get the *primary* menu ID
//     $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
//     foreach ($primaryNav as $navItem) {
//         // echo $navItem->ID;
//         echo $navItem->title;
//         // return $navItem->title;
//         // return $navItem->ID;

// }
// }
// function test() {
//     $links = wp_get_menu_array('navigation');
//     var_dump($links);
//         if($links[24]['ID'] == 24) {
//             $icon = 'icone_accueil.png';
//             // return $links[24]['ID'];
//         } 
//         // else
//         if($links[22]['ID'] == 22) {
//             $icon = 'reflexology.png';
//             // return $links[22]['ID'];
//         }
//     return '<img src="'. get_template_directory_uri() . '/assets/img/'.$icon.'" alt="" style="width: 50px; margin: 0 auto;">';
// }
// $test = get_nav_icon();
// echo $test;
// <?php
// // Define args
// $args = array('post_type' => 'page');

// // Execute query
// $cpt_query = new WP_Query($args);
// debug($cpt_query);
// // Create cpt loop, with a have_posts() check!
// if ($cpt_query->have_posts()) :
//   while ($cpt_query->have_posts()) : $cpt_query->the_post();

//the_title();

//endwhile;
// endif;