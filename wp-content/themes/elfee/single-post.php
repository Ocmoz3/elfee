<?php
    get_header();
?>
<div class="div-logo">
    <img src="<?php echo get_theme_file_uri() ?>/assets/img/bowl.png" alt="">
</div>
<div>
    <p class="quote">“Soyez à vous-même votre propre refuge. Soyez à vous-même votre propre lumière.”<br>
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