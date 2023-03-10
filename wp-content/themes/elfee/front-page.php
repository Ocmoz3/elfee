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
    <?php //debug(get_field_object('card_page_accueil')); ?>

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
    <?php 

    $card_homepage_subfields = $card_home['sub_fields']; 
        foreach($card_homepage_subfields as $card_homepage_subfield) :
            // die();
            $value = $card_homepage_subfield['default_value'];
            // return $value;
            echo $value;
        endforeach;
    // debug($card_homepage_subfield);
    $card_home_test = get_field('card_page_accueil');
    $card_test = have_rows('card_page_accueil');
    // if(have_rows('card_page_accueil')):
    if(have_rows($card_test)):
        while( have_rows('card_page_accueil') ): the_row();
            // debug(get_sub_field_object('card_sous-titre_accueil'));
            $sous_titre = get_sub_field_object('card_sous-titre_accueil');
            $default_value_sous_titre = $sous_titre['default_value'];
            echo 'ok' . $default_value_sous_titre;
        endwhile;
    endif;
    ?>
    <?php 
     ?>
    <div class="card_homepage">
        <div class="page_subtitle">
            <?php 
            // $card_home = get_field_object('card_page_accueil');
            if ($card_home['value']['card_sous-titre_accueil']) : ?>
                <?php echo $card_home['value']['card_sous-titre_accueil']; ?>
            <?php elseif($default_value_sous_titre): ?>
                <?php echo $default_value_sous_titre; ?>
            <?php else: ?>
                Aide au <span style="color: var(--orange-massage);">lâcher-prise</span>
                <br>
                invitation au <span style="color: var(--orange-massage)">voyage</span>
            <?php endif; ?>
            <?php //elseif($card_homepage_subfield['default_value']): ?>
                <?php //elfee_get_card_home_subfields($card_homepage_subfield['default_value']); ?>
            <?php //endif; ?>
           
        </div>
        <div class="page_description" style="word-wrap: break-word;">
            <?php if ($card_home['value']['card_texte_accueil']) : ?>
                <?php echo $card_home['value']['card_texte_accueil']; ?>
            <?php //elseif(elfee_get_card_home_subfields($card_home, 'card_texte_accueil')): ?>
                <?php //echo elfee_get_card_home_subfields($card_home, 'card_texte_accueil'); ?>
            <?php else: ?>
                Sur le plan physique il permet de relâcher les tensions, faire circuler l’énergie en accompagnant la détente, il favorise aussi le système nerveux/immunitaire, et permet l'équilibre du corps.
                Sur le plan psychique il aide à la prise de recul en favorisant le lâcher prise, invite à la méditation et à l'ancrage.
            <?php endif; ?>
        </div>
        <button class="button btn-massage"><a href="<?= $link ?>">En savoir plus</a></button>
    </div>
</section>



<?php 
    if(have_rows('card_page_accueil')):
        while( have_rows('card_page_accueil') ): the_row();
        $sous_titre = get_sub_field_object('card_sous-titre_accueil');
        $default_value_sous_titre = $sous_titre['default_value'];
        echo $default_value_sous_titre;
        $texte = get_sub_field_object('card_texte_accueil');
        $default_value_texte = $texte['default_value'];
        echo $default_value_texte;
        $background = get_sub_field_object('card_background_accueil');
        $value_background = $background['value'];
        // debug($background);
        $link_accueil = get_sub_field_object('lien');
        $value_link = $link_accueil['value'];
        $default_value_link = $link_accueil['default_value'];
        // debug($link_accueil);
        if($value_link) {
            $class_background = ' with_value';
            $link_ok = $value_link;
        }
        elseif($default_value_link) {
            $class_background = '';
            $link_ok = $default_value_link;
        }
        else {
            $link_ok = 'http://localhost/elfee';
        }
        // endif;
        // echo $default_value_background;
    ?>
<section>
    <div class="titre_reflexology">
        <h2 class="title">Réflexologie</h2>
    </div>

    <div class="banner">
        <?php 
        // the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/reflexology_page.png" alt="">
    </div>

    <div class="card_homepage<?php echo $class_background ?>">
        <div class="page_subtitle">
        <?php if($sous_titre['value']): ?>
            <?php echo $sous_titre['value']; ?>
        <?php elseif($default_value_sous_titre): ?>
            <?php echo $default_value_sous_titre; ?>
        <?php else: ?>
            Soigner les <span style="color: var(--green-reflexology);">maux du corps</span>
            <br>
            soulager le <span style="color: var(--green-reflexology)">stress</span>
        <?php endif; ?>
            
        </div>
        <div class="page_description">
            <?php if($texte['value']): ?>
                <?php echo $texte['value']; ?>
            <?php elseif($default_value_texte): ?>
                <?php echo $default_value_texte; ?>
            <?php else: ?>
            La  réflexologie est une thérapie partant du principe qu'il y a des zones réflexes sur les pieds et les mains correspondant à tous les organes, glandes et parties du corps.
            Pendant une séance le but est de rééquilibrer le corps de façon naturelle, en stimulant les zones réflexes.
            Elle est à la fois curative et préventive.
            <?php endif; ?>
        </div>
        <button class="button btn-reflexology">
            <a href="<?php echo $link_ok ?>">En savoir plus</a>
        </button>
    </div>
</section>

<style>
    .card_homepage.with_value {
        background: linear-gradient(rgba(255,255,255,.95), rgba(255,255,255,.95)), url("<?php echo $value_background['url'] ?>");
    }
    .card_homepage {
        background: linear-gradient(rgba(255,255,255,.95), rgba(255,255,255,.95)), url("<?php echo get_template_directory_uri()?>/assets/img/crea_morgane.jpg");
        width: 80%;
        margin: 1.5rem auto;
        background-color: white;
        color: var(--main-font);
        padding: 1.5em;
    }
</style>

<?php
endwhile;
endif;
?>
<?php
if(have_rows('card_page_accueil_repeat')):
    while( have_rows('card_page_accueil_repeat') ): the_row();
        debug(get_field_object('card_page_accueil_repeat'));
        echo '<p>'.get_sub_field('card_sous-tire_repeat').'</p>';
        echo '<p>'.get_sub_field('card_texte_repeat').'</p>';
        echo '<p>'.get_sub_field('card_background_repeat').'</p>';
        echo '<p>'.get_sub_field('card_lien_repeat').'</p>';
        debug(get_sub_field_object('card_sous-tire_repeat'));
        debug(get_sub_field_object('test_texte'));
    endwhile;
endif;


?>
<?php 
// if(have_posts()) :
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