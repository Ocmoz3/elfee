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
if (have_posts()) :
?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <?php elfee_get_title() ?>
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
            <div>
                <?php $titre_description = get_field('titre_description');
                if ($titre_description) : ?>
                    <div class="page_background">
                        <!-- <div class="div_absolute"> -->
                        <h2 class="title_homepage"><a class="a_title_homepage title_reflexology" href="<?php the_permalink() ?>"><?php echo $titre_description['titre'] ?></a></h2>
                        <h3 class="page_subtitle"><?php echo $titre_description['sous-titre'] ?></h3>
                        <div class="page_description"><?php echo $titre_description['description'] ?></div>
                        <!-- </div> -->
                    </div>

                    <style type="text/css">
                        .page_background::before {
                            background: url("<?php echo esc_url($titre_description['image_background']); ?>") 0 0 no-repeat;
                            background-size: cover;
                        }
                    </style>
                <?php endif; ?>
            </div>
            <div class="page_card card_massage" style="border: 3px solid green;">
                <div class="div_main_page_card" style="border: 3px solid yellow;">
                    <div class="div_img_page_card" style="border: 3px solid red;">
                        <img class="img_page_card" src="<?= get_field('image_card') ?>" alt="">
                    </div>
                    <div class="div_text_page_card">
                        <h4 class="h4_text_page_card">Réflexologie plantaire et palmaire</h4>
                        <p class="p_desc_text_page_card">Massage de zones réflexes des pieds et les mains à partir d’un objectif défini ensemble</p>
                        <p class="p_time_text_page_card">1h - plus court pour les enfants</p>
                    </div>
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