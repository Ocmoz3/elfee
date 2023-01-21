<?php
    get_header();
?>

<?php
if(have_posts()) :
?>
<?php while(have_posts()) : the_post(); ?>
    <article>
        <?php elfee_get_img() ?>
        <!-- <img src="<?php //get_template_directory_uri() ?>./wp-content/themes/elfee/assets/img/bol.png" style="border: 3px solid black; width:100px; height:100px;">
        <img src="<?php //get_template_directory() ?>./wp-content/themes/elfee/assets/img/bol.png" style="border: 3px solid black; width:100px; height:100px;"> -->
        <?php elfee_get_title_homepage() ?>
        <div style="width: 100%;"><?php the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?></div>
        <div class="card_homepage">
            <?php the_content() ?>
            <?php if(get_the_ID() == 7): ?>
            <button class="button btn-massage">En savoir plus</button>
            <?php elseif((get_the_ID() == 5)): ?>
            <button class="button btn-reflexology">En savoir plus</button>
            <?php endif; ?>
        </div>
    </article>
<?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles :(</h1>
<?php endif; ?>

<?php
    get_footer();
?>