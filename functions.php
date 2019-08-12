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

    /**
    * Fonction qui va ajouter un menu au thème.
    *   
    * @return void
    *
    */

    function register_main_menu(){
        register_nav_menu('main-menu', 'Menu principal dans le header');

    }

    add_action('after_setup_theme', 'register_main_menu');

    /**
    *
    * Fonction qui ajoute des attributs au balise <a> des nav_menu
    *
    * @param [type] $att
    * @param [type] $item
    * @param [type] $args
    * @return void
    *
    */

    function ajout_menu_a_class($att, $item, $args){
        $class = 'nav-link rediriction';
        $atts['class'] = $class;
        return $atts;
    }

    // Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
    // les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback

    add_filter('nav_menu_link_attributes','ajout_menu_a_class',10,3);
    /**
     * Ajout la fonctionnalité d'un ajout d'image pour les posts pour ce thème ci
     *
     * @return void
     */


    function ajout_image_article(){
        //Ajout de la fonctionalité d'ajout d'image pour les posts pour ce theme ci
        add_theme_support('post-thumbnails');
        $test = 0;
    }

    // Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
    add_action('init', 'ajouter_image_article');
    
?>