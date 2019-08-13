        <?php 
            // https://developer.wordpress.org/reference/functions/get_theme_mod/
            // Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. A ne faire que si vous avez le control de la config php.ini
            $text_column_left = get_theme_mod('albi-about-text-left', __('Texte about gauche'));
            $text_column_right = get_theme_mod('albi-about-text-right', __('Texte about droite'));
        ?>
        <!-- debut Info  -->
        <div class="row p-3">
            <div class="col-sm-2">
                <p><? echo $text_column_left; ?></p>
            </div>
            <div class="col-sm-2" id="intro">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shqiponja.png" class="w-100" id="drapeau" alt="drapeau">
            </div>
            <div class="col-sm-6">       
                <p><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="col-sm-2">
                <p><? echo $text_column_right; ?></p>
            </div>
        </div>
        <!-- fin Info  -->