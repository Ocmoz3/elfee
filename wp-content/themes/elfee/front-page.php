<?php
    get_header();
?>
<div class="div_page_header" style="border: 1px solid red;">
    <div class="div_icone_page">
        <?php $icone_massage = get_field('icone');
        if ($icone_massage) : ?>
            <img src="<?php echo esc_url($icone_massage); ?>" alt="">
        <?php else : ?>
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
        <?php endif; ?>
    </div>
    <div class="div_quote">
        <?php $citation_massage = get_field('citation');
        if ($citation_massage) : ?>
            <p class="quote">“<?php echo esc_html($citation_massage); ?>”</p>
        <?php else : ?>
            <p class="quote">“L'ego dit : "quand tout sera en place, je trouverai la paix." L'âme dit : "trouve la paix et tout se mettra en place."”</p>
        <?php endif; ?>
        <?php $auteur_citation_massage = get_field('auteur_citation');
        if ($auteur_citation_massage) : ?>
            <p class="quote"><?php echo esc_html($auteur_citation_massage); ?></p>
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
$args = array('post_type' => 'page');
$cpt_query = new WP_Query($args);
// debug($cpt_query->posts);
$pages = $cpt_query->posts;
debug($pages);
foreach($pages as $page):
    echo $page->post_name;
    if($page->post_name == 'massage'):
        $link = 'http://localhost/elfee/massage';
    endif;
endforeach;
// if($cpt_query)
// // Create cpt loop, with a have_posts() check!
// if ($cpt_query->have_posts()) :
//   while ($cpt_query->have_posts()) : $cpt_query->the_post();

//the_title();

//endwhile;
// endif;
?>


<section>
    <div class="titre_description_massage">
        <h2 class="title">Massage sonnore aux bols tibétains</h2>
    </div>

    <div class="banner" style="width: 100%;"><?php 
        // the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/massage_complet.png" alt="" style="height: 400px; object-fit: cover;">
    </div>

    <div class="card_homepage">
        <div class="page_subtitle">
            Aide au <span style="color: var(--orange-massage);">lâcher-prise</span>
            <br>
            invitation au <span style="color: var(--orange-massage)">voyage</span>
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