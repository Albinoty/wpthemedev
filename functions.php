<?php

    // Pour ne pas avoir de fichier contenant trop de ligne de code nous allons repartir le tout dans des fichiers spécifiques afin de rendre le tout plus lisible.
    // Nous découvrons ici la function require_once() de php qui nous permet d'importer des fichiers

    // Nous découvrons également la fonction get_template_directory() qui renvoi le chemin du dossier du thème actif (à ne pas confondre avec get_template_directory_uri() qui renvoi une url)
    require_once(get_template_directory() . '/includes/enqueue-script.php');


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
    
    /**
     * 
     * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
     * 
     * @param [type] $wp_customize
     * @return void 
     * 
     */

    function ajout_personnalisation_about($wp_customize){

        // Ajout d'un panel avec des options
        // Attention, un panel ne s'affichera que s'il contient des sections
        //https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
        $wp_customize->add_panel('albi-panel-about',[
            'title' => __('Section About'),
            'Description' => __('Personnalisation de la section about')
        ]);

        // Ajout d'une section à un panel définie, si pas de panel défini, alors la section sera visible directement
        // Attention il faut que la panel ait déjà été ajouter pour que la section puisse s'y greffer.
        // Attention une section ne s'affichera que si elle contient des controls
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section('albi-about-section-text',[
            'panel' => 'albi-panel-about',
            'title' => __('Personnalisation du texte'),
            'description' => __('Personnalisez le texte')
        ]);

        // Ajout d'un setting qui continedra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        $wp_customize->add_setting('albi-about-text-left',[
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
        // La clé est utilisé pour récuperer les valeurs dans le thème grace à la focntion get_theme_mod()
        // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        $wp_customize->add_setting('albi-about-text-right',[
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // Ajout d'un control (un label avec input et autre information). Le control doit etre attaché à une section ainsi quà un setting.
        // Attention un control ne s'affiche que s'il est lié à un setting.
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
        $wp_customize->add_control('albi-about-text-left-control',[
            'section' => 'albi-about-section-text',
            'settings' => 'albi-about-text-left',
            'label' => __('Texte colonne gauche'),
            'description' => __('Personnalisez le texte de la colonne gauche'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('albi-about-text-right-control',[
            'section' => 'albi-about-section-text',
            'settings' => 'albi-about-text-right',
            'label' => __('Texte colonne droite'),
            'description' => __('Personnalisez le texte de la colonne droite'),
            'type' => 'textarea'
        ]);
    }

    add_action('customize_register','ajout_personnalisation_about');

?>