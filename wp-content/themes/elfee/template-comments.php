<?php
/**
* Template Name: Page Témoignages
 */
?>

<?php
    get_header();
?>
<!-- <h1>TEMPLATE-COMMENTS</h1> -->
<div class="div_icone_page">
    <img src="<?php echo get_theme_file_uri() ?>/assets/img/icone_comments_without_background.png" alt="">
</div>
<div>
    <h1 class="title_comments">TÉMOIGNAGES</h1>
</div>

<!-- ICI
INSÉRER LES COMMENTAIRES -->
<?php //var_dump(wp_list_comments()) ?>

<?php if(comments_open() || get_comments_number()) {
    comments_template();
  } ?>

<!-- Pour modifier en profondeur, voir : https://github.com/babobski/Bootstrap-on-WordPress/blob/master/comments.php -->
<!-- OU jouer avec le CSS -->

<!-- Voir si on doit intégrer NONCE pour la sécurité
Voir fin de vidéo sur les métadonnées -->
<?php
    get_footer();
?>