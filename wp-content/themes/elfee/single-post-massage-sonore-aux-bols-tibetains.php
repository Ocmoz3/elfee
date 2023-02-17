<?php
    get_header();
?>
<img src="<?= get_field('icone') ?>" alt="" style="width: 20px; height: auto;">

<div class="div_icone_page">
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
        <div style="display: flex; gap: 1rem;">
            <div style="width: 30%;">
                <img src="<?= get_field('detente_sonore') ?>" alt="" style="width: 100%; height: auto;">
            </div>
            <div>
                <img src="<?= get_field('test_img') ?>" alt="" style="width: 100%; height: auto;">
            </div>
            <div>
                <img src="<?= get_field('test_img') ?>" alt="" style="width: 100%; height: auto;">
            </div>
        </div>
    </article>
<?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles :(</h1>
<?php endif; ?>

<?php
    get_footer();
?>