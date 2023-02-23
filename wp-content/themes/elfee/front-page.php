<?php
    get_header();
?>

<?php 
// debug(get_field_object('citation_accueil')); 
// $object_citation = get_field_object('citation_accueil');
// debug($object_citation['default_value']); 
?>
<div class="div_page_header">
    <div class="div_icone_page">
        <?php $icone_accueil = get_field('icone_accueil');
        if ($icone_accueil) : ?>
            <img src="<?php echo esc_url($icone_accueil); ?>" alt="">
        <?php else : ?>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
        <?php endif; ?>
    </div>
    <div class="div_quote">
        <?php $citation_accueil = get_field_object('citation_accueil');
        if ($citation_accueil['value']) : ?>
            <p class="quote">“<?php echo esc_html($citation_accueil['value']); ?>”</p>
        <?php elseif($citation_accueil['default_value']) : ?>
            <p class="quote">“<?php echo esc_html($citation_accueil['default_value']); ?>”</p>
        <?php else : ?>
            <p class="quote">“L'ego dit : 'quand tout sera en place, je trouverai la paix.' L'âme dit : 'trouve la paix et tout se mettra en place.'”</p>
        <?php endif; ?>
        <?php $auteur_citation_accueil = get_field_object('auteur_citation_accueil');
        if ($auteur_citation_accueil['value']) : ?>
            <p class="quote"><?php echo esc_html($auteur_citation_accueil['value']); ?></p>
        <?php elseif($auteur_citation_accueil['default_value']) : ?>
            <p class="quote"><?php echo esc_html($auteur_citation_accueil['default_value']); ?></p>
        <?php else : ?>
            <p class="quote">Citation bouddhiste</p>
        <?php endif; ?>
    </div>
    <div class="div-chakras">
        <?php $separator = get_field('separateur');
        if ($separator) : ?>
            <img src="<?php echo esc_url($separator); ?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/chakras.png" alt="">
        <?php endif; ?>
    </div>
</div>

<?php
// $args = array('post_type' => 'page');
// $cpt_query = new WP_Query($args);
// // debug($cpt_query->posts);
// $pages = $cpt_query->posts;
// debug($pages);
// foreach($pages as $page):
//     echo $page->post_name;
//     if($page->post_name == 'massage'):
//         $link = 'http://localhost/elfee/massage';
//     endif;
// endforeach;
?>
<section class="section_massage">
    <div class="div_icone_page">
        <?php $icone_section_massage = get_field('icone_section');
        if ($icone_section_massage) : ?>
            <img src="<?php echo esc_url($icone_section_massage); ?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/bowl.png" alt="">
        <?php endif; ?>
    </div>
    <div class="titre_massage">
        <?php $titre_section = get_field('titre_section');
        if ($titre_section) : ?>
        <h2 class="title"><?php echo esc_html($titre_section) ?></h2>
        <?php else : ?>
        <h2 class="title">Massage sonnore aux bols tibétains</h2>
        <?php endif; ?>
    </div>

    <div class="banner">
        <?php $image_section = get_field('image_section');
        if ($image_section) : ?>
            <img src="<?php echo esc_url($image_section); ?>" alt="">
        <?php else : ?>
            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/bowl.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/massage_complet.png" alt="">
            <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/massage_complet.png" alt=""> -->
        <?php endif;
        // the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) 
        ?>
        <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/massage_complet.png" alt=""> -->
    </div>
    <?php //debug(get_field('card_page_accueil')); ?>
    <?php debug(get_field_object('card_page_accueil')); ?>

    <?php $card_home = get_field_object('card_page_accueil'); ?>

<!-- OK -->
    <?php 
    // function elfee_get_card_home_subfields($card) {
    //     $card_homepage_subfields = $card['sub_fields']; 
    //     foreach($card_homepage_subfields as $card_homepage_subfield) :
    //         $value = $card_homepage_subfield['default_value'];
    //         return $value;
    //     endforeach;
    // } 
    ?>
    <!-- OK -->


    <?php function elfee_get_card_home_subfields($card) {
        $card_homepage_subfields = $card['sub_fields']; 
        foreach($card_homepage_subfields as $card_homepage_subfield) :
        // foreach($card_homepage_subfields as $card_homepage_subfield => $value) :
            $result = [];
            // $card_homepage_subfield = $card_homepage_subfield['label'];
            $result[$card_homepage_subfield['name']] = $card_homepage_subfield['default_value'];
            // $value = $card_homepage_subfield['default_value'];
            echo $card_homepage_subfield['default_value'];
            echo $card_homepage_subfield['label'];
            return $result;
        endforeach;
    } ?>
    <?php debug(elfee_get_card_home_subfields($card_home)); ?>

    <?php debug($card_home['sub_fields']); ?>
    <?php 
    // $card_homepage_subfields = $card_home['sub_fields']; 
    // foreach($card_homepage_subfields as $card_homepage_subfield) :
    //     echo $card_homepage_subfield['default_value'];
    // endforeach;
    ?>

    <div class="card_homepage">
        <div class="page_subtitle">
            <?php 
            // $card_home = get_field_object('card_page_accueil');
            if ($card_home['value']['card_sous-titre_accueil']) : ?>
                <?php echo $card_home['value']['card_sous-titre_accueil']; ?>
            <?php elseif(elfee_get_card_home_subfields($card_home)): ?>
                <?php echo elfee_get_card_home_subfields($card_home); ?>
            <?php else: ?>
                Aide au <span style="color: var(--orange-massage);">lâcher-prise</span>
                <br>
                invitation au <span style="color: var(--orange-massage)">voyage</span>
            <?php endif; ?>
            <?php //elseif($card_homepage_subfield['default_value']): ?>
                <?php //elfee_get_card_home_subfields($card_homepage_subfield['default_value']); ?>
            <?php //endif; ?>
           
        </div>
        <div class="page_description">
            Sur le plan physique il permet de relâcher les tensions, faire circuler l’énergie en accompagnant la détente, il favorise aussi le système nerveux/immunitaire, et permet l'équilibre du corps.
            Sur le plan psychique il aide à la prise de recul en favorisant le lâcher prise, invite à la méditation et à l'ancrage.
        </div>
        <button class="button btn-massage"><a href="<?= $link ?>">En savoir plus</a></button>
    </div>
</section>

<section>
    <div class="titre_description_reflexology">
        <h2 class="title">Réflexologie</h2>
    </div>

    <div class="banner">
        <?php 
        // the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/reflexology_page.png" alt="" style="height: 400px; object-fit: cover;">
    </div>

    <div class="card_homepage">
        <div class="page_subtitle">
            Soigner les <span style="color: var(--green-reflexology);">maux du corps</span>
            <br>
            soulager le <span style="color: var(--green-reflexology)">stress</span>
        </div>
        <div class="page_description">
            La  réflexologie est une thérapie partant du principe qu'il y a des zones réflexes sur les pieds et les mains correspondant à tous les organes, glandes et parties du corps.
            Pendant une séance le but est de rééquilibrer le corps de façon naturelle, en stimulant les zones réflexes.
            Elle est à la fois curative et préventive.
        </div>
        <button class="button btn-reflexology">En savoir plus</button>
    </div>
</section>

<?php
// if(have_posts()) :
?>
<?php 
// while(have_posts()) : the_post(); ?>
    <!-- <article>
        <?php 
        // elfee_get_img() ?>
        <?php 
        // elfee_get_title() ?>
        <div class="banner" style="width: 100%;"><?php 
        // the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?></div>
        <div class="card_homepage">
            <?php 
            // the_content() ?>
            <?php 
            // elfee_get_button_homepage() ?>
        </div>
    </article> -->
<?php 
// endwhile; ?>

<?php 
// else : ?>
    <!-- <h1>Pas d'articles :(</h1> -->
<?php 
// endif; ?>

<?php
    get_footer();
?>