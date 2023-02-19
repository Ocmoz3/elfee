<?php
get_header();
?>

<h1>Page Massage</h1>

<div class="div_page_header">
    <div class="div_icone_page">
        <?php $icone_massage = get_field('icone');
        if ($icone_massage) : ?>
            <img src="<?php echo esc_url($icone_massage); ?>" alt="">
        <?php else : ?>
            <img src="<?= get_template_directory_uri() ?>/assets/img/bowl.png" alt="">
        <?php endif; ?>
    </div>
    <div class="div_quote">
        <?php $citation_massage = get_field('citation');
        if ($citation_massage) : ?>
            <p class="quote">“<?php echo esc_html($citation_massage); ?>”</p>
        <?php else : ?>
            <p class="quote">“Soyez à vous-même votre propre refuge. Soyez à vous-même votre propre lumière.”</p>
        <?php endif; ?>
        <?php $auteur_citation_massage = get_field('auteur_citation');
        if ($auteur_citation_massage) : ?>
            <p class="quote"><?php echo esc_html($auteur_citation_massage); ?></p>
        <?php else : ?>
            <p class="quote">Bouddha</p>
        <?php endif; ?>
    </div>
    <div class="div-chakras">
        <?php $separator = get_field('separateur');
        if ($separator) : ?>
            <img src="<?php echo esc_url($separator); ?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/bowl.png" alt="">
        <?php endif; ?>
    </div>
</div>

<div class="titre_description_massage">
    <?php $titre_description = get_field('titre_description');
    if ($titre_description) : ?>
        <div class="page_background">
        <?php if ($titre_description['titre']): ?>
            <h2 class="title"><?php echo esc_html($titre_description['titre']); ?></h2>
        <?php else : ?>
            <h2 class="title">Massage sonnore aux bols tibétains</h2>
        <?php endif; ?>
        <?php if ($titre_description['sous-titre']): ?>
            <div class="page_subtitle"><?php echo $titre_description['sous-titre']; ?></div>
        <?php else : ?>
            <div class="page_subtitle">Aide au <span style="color: var(--orange-massage);">lâcher-prise</span><br>
            invitation au <span style="color: var(--orange-massage)">voyage</span></div>
        <?php endif; ?>
        <?php if ($titre_description['description']): ?>
            <div class="page_description"><?php echo $titre_description['description']; ?></div>
        <?php else : ?>
            <div class="page_description">Description par défaut</div>
        <?php endif; ?>
        </div>

        <style type="text/css">
            .page_background::before {
                background: url("<?php echo esc_url($titre_description['image_background']); ?>") 0 0 no-repeat;
                background-size: cover;
            }
        </style>
    <?php endif; ?>
</div>

<div class="page_card card_massage">
    <?php if (have_rows('card')) : ?>
        <?php while (have_rows('card')) : the_row() ?>
            <div class="div_main_page_card">
                <div class="div_img_page_card">
                    <?php $image_card = get_sub_field('image_card');
                    if ($image_card): ?>
                    <img class="img_page_card" src="<?= get_sub_field('image_card') ?>" alt="">
                    <?php else : ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/img/bowl.png" alt="">
                    <?php endif; ?>
                </div>
                <div class="div_text_page_card">
                    <!-- <h4 class="h4_text_page_card">Réflexologie plantaire et palmaire</h4> -->
                    <h4 class="h4_text_page_card"><?= get_sub_field('titre_card') ?></h4>
                    <!-- <p class="p_desc_text_page_card">Massage de zones réflexes des pieds et les mains à partir d’un objectif défini ensemble</p> -->
                    <p class="p_desc_text_page_card"><?= get_sub_field('description_card') ?></p>
                    <!-- <p class="p_time_text_page_card">1h - plus court pour les enfants</p> -->
                    <p class="p_time_text_page_card"><?= get_sub_field('temps_card') ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php else : ?>
            <div class="div_main_page_card">
                <div class="div_img_page_card">
                    <img class="img_page_card" src="<?= get_template_directory_uri() ?>/assets/img/detente_sonore.png" alt="">
                </div>
                <div class="div_text_page_card">
                    <h4 class="h4_text_page_card">Détente sonore</h4>
                    <p class="p_desc_text_page_card">Assis.e, un bol sur la tête et autour de vous</p>
                    <p class="p_time_text_page_card">30 à 40 min</p>
                </div>
            </div>
            <div class="div_main_page_card">
                <div class="div_img_page_card">
                    <img class="img_page_card" src="<?= get_template_directory_uri() ?>/assets/img/massage_inter.png" alt="">
                </div>
                <div class="div_text_page_card">
                    <h4 class="h4_text_page_card">Massage sonore INTERMÉDIAIRE</h4>
                    <p class="p_desc_text_page_card">Massage de zones réflexes des pieds et les mains à partir d’un objectif défini ensemble</p>
                    <p class="p_time_text_page_card">1h</p>
                </div>
            </div>
            <div class="div_main_page_card">
                <div class="div_img_page_card">
                    <img class="img_page_card" src="<?= get_template_directory_uri() ?>/assets/img/massage_complet.png" alt="">
                </div>
                <div class="div_text_page_card">
                    <h4 class="h4_text_page_card">Massage sonore complet</h4>
                    <p class="p_desc_text_page_card">Massage de zones réflexes des pieds et les mains à partir d’un objectif défini ensemble</p>
                    <p class="p_time_text_page_card">2h</p>
                </div>
            </div>
    <?php endif; ?>
</div>

<div class="div_listing_benefits">
    <?php $listing_bienfaits = get_field('listing_bienfaits');
    if ($listing_bienfaits) : ?>
        <div class="listing_benefits_background">
            <h3 class="title_benefits"><?php echo $listing_bienfaits['titre_bienfaits'] ?></h3>
            <div class="list_benefits"><?php echo $listing_bienfaits['liste_bienfaits'] ?></div>
        </div>
        <style type="text/css">
            .listing_benefits_background {
                background-color: <?php echo esc_attr($listing_bienfaits['couleur_de_fond']); ?>;
            }
        </style>
    <?php endif; ?>
</div>

<div class="div_illustration">
    <?php $illustration = get_field('illustration');
    if ($illustration) : ?>
        <div class="illustration">
            <img src="<?= esc_url($illustration['image_illustration']) ?>" alt="">
        </div>
        <div class="caption"><?= $illustration['legende_illustration'] ?></div>
    <?php endif; ?>
</div>

<?php
get_footer();
?>