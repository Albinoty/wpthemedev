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
    }
    

    add_action('after_setup_theme', [MgMenu::class,'register_main_menu']);
?>