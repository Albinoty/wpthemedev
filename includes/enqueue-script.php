<?php
    /**
    *   Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
    *   @return void
    */
    function ajout_css_js(){
        // Ajout des scripts css
        // Link vers la doc https://developer.wordpress.org/reference/functions/wp_enqueue_style/

        wp_enqueue_style('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.css');
        wp_enqueue_style('main', get_template_directory_uri().'/css/style.css');


    
        // Jquery
        wp_enqueue_script('jquery',get_template_directory_uri().'/node_modules/jquery/dist/jquery.js', null, true);
        // Bootstrap Script
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.js', null, true);
        
    }
    // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
    // Cette écouteur va déclancher la fonction ajout_css_js()
    // Link vers la doc https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/

    add_action('wp_enqueue_scripts', 'ajout_css_js');
?>