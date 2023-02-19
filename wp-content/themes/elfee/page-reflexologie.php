<?php
    get_header();
?>
<div class="div_page_header">
    <div class="div_icone_page">
        <img src="<?php echo esc_url(get_field('icone')); ?>" alt="">
    </div>
    <div class="div_quote">
        <p class="quote">“<?php echo esc_html(get_field('citation')); ?>”</p>
        <p class="quote"><?php echo esc_html(get_field('auteur_citation')); ?></p>
    </div>
    <div class="div-chakras">
        <img src="<?php echo esc_url(get_field('separateur')); ?>" alt="">
    </div>
</div>

<div class="titre_description_reflexology">
    <?php $titre_description = get_field('titre_description');
    if($titre_description): ?>
    <div class="page_background">
            <h2 class="title"><a class="a_title title_reflexology" href="<?php the_permalink() ?>"><?php echo esc_html($titre_description['titre']); ?></a></h2>
            <div class="page_subtitle"><?php echo $titre_description['sous-titre']; ?></div>
            <div class="page_description"><?php echo $titre_description['description']; ?></div>
    </div>

    <style type="text/css">
        .page_background::before {
            background: url("<?php echo esc_url($titre_description['image_background']); ?>") 0 0 no-repeat;
            background-size: cover;
        }
    </style>
    <?php endif; ?>
</div>

<div class="page_card card_reflexology">
<?php if(have_rows('card')): ?>
    <?php while(have_rows('card')): the_row()?>
    <div class="div_main_page_card">
        <div class="div_img_page_card">
            <img class="img_page_card" src="<?= get_sub_field('image_card') ?>" alt="">
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
<?php endif; ?>
</div>

<div class="div_listing_benefits">
    <?php $listing_bienfaits = get_field('listing_bienfaits');
    if($listing_bienfaits): ?>
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
    if($illustration): ?>
    <div class="illustration">
        <img src="<?= esc_url($illustration['image_illustration']) ?>" alt="">
    </div>
    <div class="caption"><?= $illustration['legende_illustration'] ?></div>
    <?php endif; ?>
</div>

<?php
    get_footer();
?>