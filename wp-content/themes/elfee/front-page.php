<?php
    get_header();
?>
<h1>FRONT-PAGE</h1>
<div class="div-logo">
    <img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/logo.png" alt="">
</div>
<div>
    <p class="quote">L'ego dit : "quand tout sera en place, je trouverai la paix." L'âme dit : "trouve la paix et tout se mettra en place"<br>
    Citation bouddhiste</p>
</div>
<div class="div-chakras">
    <img src="<?php get_template_directory_uri() ?>wp-content/themes/elfee/assets/img/chakras.png" alt="">
</div>
<?php
if(have_posts()) :
?>
<?php while(have_posts()) : the_post(); ?>
    <article>
        <?php elfee_get_img() ?>
        <?php elfee_get_title_homepage() ?>
        <div class="banner" style="width: 100%;"><?php the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?></div>
        <div class="card_homepage">
            <?php the_content() ?>
            <?php elfee_get_button_homepage() ?>
        </div>
    </article>
<?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles :(</h1>
<?php endif; ?>

<?php
    get_footer();
?>