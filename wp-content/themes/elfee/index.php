<?php
    get_header();
?>

<?php
if(have_posts()) :
?>
<?php while(have_posts()) : the_post(); ?>
    <article>
        <?php get_img() ?>
        <!-- <img src="<?php //get_template_directory_uri() ?>./wp-content/themes/elfee/assets/img/bol.png" style="border: 3px solid black; width:100px; height:100px;">
        <img src="<?php //get_template_directory() ?>./wp-content/themes/elfee/assets/img/bol.png" style="border: 3px solid black; width:100px; height:100px;"> -->
        <h2 class="title_homepage"><a class="a_title_homepage" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div style="width: 100%;"><?php the_post_thumbnail('full', ['style' => 'height: 400px; object-fit: cover;']) ?></div>
    </article>
<?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles :(</h1>
<?php endif; ?>

<?php
    get_footer();
?>