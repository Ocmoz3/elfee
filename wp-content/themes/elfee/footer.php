        </div>

        <div class="footer">
            <div class="footer_main">
                <div class="logo_title">
                    <div class="div_logo_footer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                    </div>
                    <div class="div_name_footer">
                        <p class="p_name_footer">Elfée Morgane</p>
                        <p class="p_works_footer">Réflexologue</p>
                        <p>Praticienne en massages sonores</p>
                    </div>
                </div>
                <div class="social">
                    <a class="link_insta" href="https://www.instagram.com/morganegrignon/"><img src="<?= get_template_directory_uri() ?>/assets/img/insta_line.png" alt=""></a>
                    <a class="link_facebook" href="https://www.facebook.com/morgane.angele"><img src="<?= get_template_directory_uri() ?>/assets/img/facebook_line.png" alt=""></a>
                    </div>
                <div class="nav_footer">
                <?php wp_nav_menu([
                    'theme_location' => 'footer_main',
                    'container' => 'nav',
                    // 'container_class' => 'nav_header',
                    'menu_class' => 'ul_menu_footer',
                    // 'walker' => new Walker_Nav_Menu_Footer
                ]) ?>
                </div>
            </div>
            <div class="nav_legals">

            </div>
            <div class="copyright">
                <p>&copy; 2023 Morgane Grignon - Créé par Orianne Cielat</p>
            </div>
        </div>

        <?php wp_footer() ?>
    </body>
</html>