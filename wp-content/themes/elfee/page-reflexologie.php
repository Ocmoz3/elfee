<?php
    get_header();
?>
<?php
?>
<!-- <h1>PAGE-REFLEXOLOGY</h1> -->
<div class="div_icone_page">
    <!-- <img src="<?php //echo get_theme_file_uri() ?>/assets/img/reflexology.png" alt=""> -->
    <img src="<?php echo get_field('icone') ?>" alt="">
</div>
<div>
    <!-- <p class="quote">“Tu ne peux pas voyager sur un chemin sans être toi-même le chemin.”<br> -->
    <!-- Bouddha</p> -->
    <p class="quote">“<?php echo get_field('citation') ?>”<br>
    <?php echo get_field('auteur_citation') ?></p>
</div>
<div class="div-chakras">
    <!-- <img src="<?php //echo get_template_directory_uri() ?>/assets/img/chakras.png" alt=""> -->
    <img src="<?php echo get_field('separateur') ?>" alt="">
</div>

<div>
    
    <?php $titre_description = get_field('titre_description');
    if($titre_description): ?>
    <div class="page_background">
        <!-- <div class="div_absolute"> -->
            <h2 class="title_homepage"><a class="a_title_homepage title_reflexology" href="<?php the_permalink() ?>"><?php echo $titre_description['titre'] ?></a></h2>
            <h3 class="page_subtitle"><?php echo $titre_description['sous-titre'] ?></h3>
            <div class="page_description"><?php echo $titre_description['description'] ?></div>
        <!-- </div> -->
    </div>
    <style type="text/css">
        .page_background::before {
            background:url("<?php echo esc_url($titre_description['image_background']); ?>") 0 0 no-repeat;
            }
    </style>
    <?php endif; ?>
</div>

<?php
    get_footer();
?>