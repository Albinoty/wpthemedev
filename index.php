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

?>
    
        
    
        <!-- Debut mer + slide -->
        <div class="row fond">
            <div class="col-sm-6">
                <h2>Deti / <i>Mer</i></h2>
                <div>
                    <h3>1.Ksamil</h3>
                    <p class="pl-2">Ksamil est l'une des stations balnéaires les plus fréquentées par les touristes nationaux et étrangers. La plage de Ksamil et la côte ionienne d'Albanie, plus au nord, ont été incluses dans les 20 meilleures vacances à la mer offertes par le Guardian en 2013. Les principales attractions sont les îles Ksamil à proximité . La plage continentale est petite mais propre.</p>
                    </div>
                    <div>
                        <h3>2.Durr&euml;s</h3>
                        <p class="pl-2">Durrës est la deuxième ville la plus peuplée de la République d'Albanie. La ville est la capitale du comté de Durrës, l'un des 12 comtés constitutifs du pays. En avion, il se trouve au nord-ouest de Saranda, à l'ouest de Tirana, au sud de Shkodër et à l'est de Rome. Situé sur la mer Adriatique, c'est le centre le plus ancien, économique et historique du pays.</p>
                    </div>
                    <div>
                        <h3>3.Sarand&euml;</h3>
                        <p class="pl-2">Saranda (Sarand&euml; en albanais) est une ville côtière du comté de Vlor&euml;, au sud de l'Albanie. Géographiquement, il est situé sur un golfe ouvert de la mer Ionienne en Méditerranée centrale. Saranda a généralement plus de 300 jours de soleil par an.</p>
                    </div>
                </div>
                <div class="col-sm-6  d-flex align-items-center">
                    <div id="detiSlide" class="carousel slide" data-ride="carousel" data-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://localhost:8080/wp-content/themes/albi/images/city/ksamil.jpg" class="d-block w-100" alt="ksamil">
                                <div class="intro carousel-caption d-none d-md-block">
                                    <p>1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost:8080/wp-content/themes/albi/images/city/durres.png" class="d-block w-100" alt="durres">
                                <div class="intro carousel-caption d-none d-md-block">
                                    <p>2</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost:8080/wp-content/themes/albi/images/city/vlore.png" class="d-block w-100" alt="vlore">
                                <div class="intro carousel-caption d-none d-md-block">
                                    <p>3</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#detiSlide" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                            <span class="sr-only">Pr&eacute;c&eacute;dent</span></span>                    
                        </a>
                        <a class="carousel-control-next" href="#detiSlide" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                            <span class="sr-only">Suivant</span></span>                    
                        </a>
                </div>
            </div>
        </div>
        <!-- Fin mer + slide -->
    </section>
<?php
    get_footer();
?>