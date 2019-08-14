<?php

    class EnqueueScript{

        /**
        *   Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
        *   Nous avons ajouter le mot public afin que cette méthode puisse etre utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
        * Le mot static permet de pouvoir utiliser la methode directement depuis la class sans devoir l'instancier
        *   @return void
        */
        public static function ajout_css_js(){

            // Ajout des scripts css
            // Link vers la doc https://developer.wordpress.org/reference/functions/wp_enqueue_style/

            wp_enqueue_style('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.css');
            wp_enqueue_style('main', get_template_directory_uri().'/css/style.css');
            wp_enqueue_style('albi-theme',get_template_directory_uri().'/css/albi-theme.css');

            // Jquery
            wp_enqueue_script('jquery',get_template_directory_uri().'/node_modules/jquery/dist/jquery.js', null, true);
            // Bootstrap Script
            wp_enqueue_script('bootstrap',get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.js', null, true);
            
        }
        // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
        // Cette écouteur va déclancher la fonction ajout_css_js()
        // Link vers la doc https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/

    }
    // Nous créeons une instance de la class EnqueueScript afin de la passer en paramètre dans notre add_action

    //$enqueue_script = new EnqueueScript();
    // la function add_action prend en deuxième paramêtre soit un string (qui correspond au nom d'une fonction), soit un tableau. Dans le tableau on passe en premier paramêtre l'un objet instance d'une class et en deuxième paramêtre un string qui correspond au nom de la méthode de l'objet passé en premier paramêtre.

    // Il est possible de ne pas devoir instancier la class avec la syntaxe ci-dessous. Attention il faut alors que la méthode soit static
    add_action('wp_enqueue_scripts',[EnqueueScript::class, 'ajout_css_js']);
?>