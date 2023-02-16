<?php
    get_header();
?>
<h1>SINGLE-POST</h1>
<div class="div-logo">
    <img src="<?php echo get_theme_file_uri() ?>/assets/img/reflexology.png" alt="">
</div>
<div>
    <p class="quote">“Tu ne peux pas voyager sur un chemin sans être toi-même le chemin.”<br>
    Bouddha</p>
</div>
<div class="div-chakras">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/chakras.png" alt="">
</div>
<?php
if(have_posts()) :
?>
<?php while(have_posts()) : the_post(); ?>
    <article>
        <?php elfee_get_title_homepage() ?>
        <div class="card_homepage">
            <?php the_content() ?>
        </div>
    </article>
<?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles :(</h1>
<?php endif; ?>

<?php
    get_footer();
?>