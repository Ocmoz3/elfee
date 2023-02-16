<?php
    get_header();
?>
<?php
?>
<h1>PAGE-REFLEXOLOGY</h1>
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
echo get_field('detente_sonore');

    get_footer();
?>