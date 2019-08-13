<?php

class MgCustomizer{

    /**
     * 
     * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
     * 
     * @param [type] $wp_customize
     * @return void 
     * 
     */

    public static function ajout_personnalisation_about($wp_customize){

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
}

add_action('customize_register',[MgCustomizer::class,  'ajout_personnalisation_about']);

?>