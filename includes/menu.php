<?php

// Nous allons prendre l'habitude de préfixer nos class afin de ne pas créer de conflit avec wordpress on ne sait jamais que le nom soit deja utiliser ailleurs

class MgMenu{
        /**
        * Fonction qui va ajouter un menu au thème.
        *   
        * @return void
        *
        */

        public static function register_main_menu(){
            register_nav_menu('main-menu', 'Menu principal dans le header');

        }

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

        public static function ajout_menu_a_class($att, $item, $args){
            $class = 'nav-link rediriction';
            $atts['class'] = $class;
            return $atts;
        }

    }

    add_action('after_setup_theme', [MgMenu::class,'register_main_menu']);

    // Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
    // les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
    add_filter('nav_menu_link_attributes',[MgMenu::class,'ajout_menu_a_class'],10,3);


?>