<?php
    //On va chercher le header 
    get_header();
    //On va chercher la partie intro
    get_template_part('templates/intro');

?>
    
        <!-- fin Intro bg slide -->
        <!-- debut Info  -->
        <div class="row p-3">
            <div class="col-sm-4" id="intro">
                <img src="http://localhost:8080/wp-content/themes/albi/images/shqiponja.png" class="w-100" id="drapeau" alt="drapeau">
            </div>
            <div class="col-sm-8">       
                    <p>Bienvenue dans notre site. Nous allons vous presenter la culture albanaise &agrave; travers nos slides. Pour toute information, veuillez vous redirigez dans l'onglet Contact ou <a class="rediriction" href="info/contact.html">Cliquer ici.</a></p>
            </div>
        </div>
        <!-- fin Info  -->
        <!-- debut ville + slide -->
        <div class="row fond">
            <div class="col-sm-6">
                <h2>Qend&euml;r / <i>Ville</i></h2>
                <div>
                    <h3>1.Tiran&euml;</h3>
                    <p class="pl-2">Tirana (Tiran&euml; en albanais) est la capitale et la plus peuplée des villes de l'Albanie. Elle est le centre du district de Tirana, un des 12 districts constituants de l'Albanie.</p>
                </div>
                <div>
                    <h3>2.Shkod&euml;r</h3>
                    <p class="pl-2">Shkodra (Shkod&euml;r en albanais) est une municipalité du nord-ouest de l'Albanie, la ville principale de la région et au bord du lac du même nom, le plus grand lac des Balkans (d'une surface de 370 km<sup>2</sup>), près des fleuves Drin, Kir et Buna, où passe la frontière actuelle de l'Albanie avec le Monténégro. Elle abrite le Château de Shkodra, qui se trouve à une hauteur de 130 mètres.</p>
                </div>
                <div>
                    <h3>3.Prishtin&euml;</h3>
                    <p class="pl-2">Pristina (Prishtin&euml; en albanais)une ville avec une population majoritairement albanaise, aux côtés d’autres communautés plus petites. Avec une population municipale de 204 721 habitants (2016), Pristina est la deuxième plus grande ville du monde avec une population majoritairement albanophone, après l'Albanie, la capitale Tirana .</p>
                </div>
            </div>
            <div id="qenderSlide" class="col-sm-6 carousel slide d-flex align-items-center" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/city/qender1.png" class="d-block w-100" alt="qender1">
                            <div class="intro carousel-caption d-non d-md-block">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/city/shkodra.png" class="d-block w-100" alt="shkodra">
                            <div class="intro carousel-caption d-non d-md-block">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/city/prishtine.png" class="d-block w-100" alt="prishtine">
                            <div class="intro carousel-caption d-none d-md-block">
                                <p>3</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#qenderSlide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="sr-only">Pr&eacute;c&eacute;dent</span></span>                    
                    </a>
                    <a class="carousel-control-next" href="#qenderSlide" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                            <span class="sr-only">Suivant</span></span>                    
                    </a>
                </div>
        </div>
        <!-- fin ville + slide -->
        <!-- debut Food + slide-->
        <div class="border row pt-2 pb-2 fond">
            <div class="col-sm-6  d-flex align-items-center">
                <div id="foodSlide" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/food/burek.jpg" class="d-block w-100" alt="burek">
                            <div class="intro carousel-caption d-none d-md-block">
                                <p>1</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/food/fllija.jpg" class="d-block w-100" alt="fllija">
                            <div class=" intro carousel-caption d-none d-md-block">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost:8080/wp-content/themes/albi/images/food/pasul.jpg" class="d-block w-100" alt="pasul">
                            <div class=" intro carousel-caption d-none d-md-block">
                                <p>3</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#foodSlide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="sr-only">Pr&eacute;c&eacute;dent</span></span>                    
                    </a>
                    <a class="carousel-control-next" href="#foodSlide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                        <span class="sr-only">Suivant</span></span>                    
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h2>Ushqim tradicional Shqiptar / <i>Nourriture traditionelle albanais</i></h2>
                <h3>1.Burek</h3>
                <p class="pl-2">Un börek, burek, ou beurek est une variété de pâtisserie salée</p>
                <h3>2.Flija</h3>
                <p class="pl-2">La flia (aussi connue sous le nom de « fli » ou « flija ») est un plat de la cuisine albanaise. Elle se compose de plusieurs couches de crêpes couvertes avec de la crème</p>
                <h3>3.Pasul</h3>
                <p class="pl-2">Le pasul est une soupe avec un m&eacute;lange d'haricots blancs, sauce toamte, de viande boeuf le tout en rajoutant du paprika et du piment</p>
            </div>
        </div>
        <!-- fin Food + slide -->
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