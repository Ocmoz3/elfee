        </div>

        <div class="footer" style="background-color: black;">
            <div class="footer_main" style="display: flex;">
                <div class="logo_title" style="display: flex; align-items: center; font-family: 'Karma', serif; gap: .5em;">
                    <div class="div_logo_footer" style="width: 90px;">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                    </div>
                    <div style="font-weight: 600;">
                        <p style="font-size: 1.5em; margin-block-end: -5px;">Elfée Morgane</p>
                        <p style="margin-block-end: -5px;">Réflexologue</p>
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
                    // 'menu_class' => 'ul_menu_header',
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