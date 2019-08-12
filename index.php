<?php
    //On va chercher le header 
    get_header();
    //On va chercher la partie intro
    get_template_part('templates/intro');
    //On va chercher la partie info
    get_template_part('templates/info');
    //On va chercher la partie ville
    get_template_part('templates/ville');
    //On va chercher la partie food
    get_template_part('templates/food');
    //On va chercher la partie mer
    get_template_part('templates/mer');
    //On va chercher la partie footer
    get_footer();
?>