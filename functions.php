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
        $wp_customize->add_panel('coding-panel-about',[
            'titre' => __('Section About'),
            'Description' => __('Personnalisation de la section about')
        ]);

        // Ajout d'une section à un panel définie, si pas de panel défini, alors la section sera visible directement
        // Attention il faut que la panel ait déjà été ajouter pour que la section puisse s'y greffer.
        // Attention une section ne s'affichera que si elle contient des controls
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section('coding-about-section-text',[
            'panel' => 'coding-panel-about',
            'title' => __('Personnalisation du texte'),
            'description' =>__('Personnalisez le texte')
        ]);

        // Ajout d'un setting qui continedra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        $wp_customize->add_setting('coding-about-text-left',[
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]);

        // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
        // La clé est utilisé pour récuperer les valeurs dans le thème grace à la focntion get_theme_mod()
        // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
        $wp_customize->add_setting('coding-about-text-right',[
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textearea_field'
        ]);

        // Ajout d'un control (un label avec input et autre information). Le control doit etre attaché à une section ainsi quà un setting.
        // Attention un control ne s'affiche que s'il est lié à un setting.
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
        $wp_customize->add_control('coding-about-text-left-control',[
            'section' => 'coding-about-section-text',
            'settings' => 'coding-about-text-left',
            'label' => __('Texte colonne gauche'),
            'description' => __('Personnalisez le texte de la colonne gauche'),
            'type' => 'textarea'
        ]);
        $wp_customize->add_control('conding-about-text-right-control',[
            'section' => 'coding-about-section-text',
            'settings' => 'coding-about-text-right',
            'label' => __('Texte collone right'),
            'description' => __('Personnalisez le texte de la colonne droite'),
            'type' => 'textarea'
        ]);
    }

    add_action('customize_register','ajout_personnalisation_about');

?>