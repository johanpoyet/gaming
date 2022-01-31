<?php
/* code préparé pour passer l'affichage des billets en dynamique */
    $SQL = " "; // requete à trouver
    $stmt = $connexion->prepare($SQL);
    // $stmt->execute(array()); // on passe dans le tableaux les paramètres si il y en a à fournir (aucun ici)
    // $evenements = $stmt->fetchAll(); // on met le resultat de la requete dans un tableau
    //var_dump($evenements); // on affiche le contenu de la variable $evenements (ici un tableau php array())
    $stmt->closeCursor(); // on ferme le curseur des résultats
?>

<header>
    <h1 class="entry-title" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop='title'>Agenda rétrogaming et jeux vidéo</span></h1>
    <h2 style="border-bottom:0px;font-size:18px;text-transform:inherit;margin-top:10px;font-weight:700;line-height:25px;color:#000;">Manifestations, festivals, conférences, soirées geek et esport...</h2>
    <p style="margin-top:-18px;font-weight:400;line-height:25px;"> Agenda retrogaming et jeux vidéo : événements, festivals et salons, soirées, E-sport, vide-greniers, conférences et expositions qui ont pour thématique le rétrogaming et les jeux vidéo</p>
</header>

<div class="cat-layout clearfix">
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/4386-Japan+Matsuri+2021.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200523_matsuri2020.jpg" width="350" height="245" alt="Japan Matsuri 2021" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/4386-Japan+Matsuri+2021.html">Japan Matsuri 2021</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Montpellier</strong> du <font style='color:#15b1de;'>Samedi 23 octobre 2021</font> au <font style='color:#15b1de;'>Dimanche 24 octobre 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Le festival des cultures traditionnelles et des loisirs ludiques japonais Japan Matsuri revient en 2021 pour une 10ème édition qui vous accueillera au Parc des Expositions de Montpellier avec de très nombreuses nouveautés et activités. (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/4220-Comic+Con+Vesoul+2021.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200209_comicconvesoul2020.jpg" width="350" height="245" alt="Comic Con Vesoul 2021" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/4220-Comic+Con+Vesoul+2021.html">Comic Con Vesoul 2021</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Vesoul</strong> du <font style='color:#15b1de;'>Samedi 2 octobre 2021</font> au <font style='color:#15b1de;'>Dimanche 3 octobre 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Parc Expo Vesoul accueille la Comic Con Vesoul qui se déroulera du 2 au 3 octobre 2021 (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/3995-Japan+Party+2021+-+Salon+Fantastique.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200523_japanparty2021.jpg" width="350" height="245" alt="Japan Party 2021 - Salon Fantastique" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/3995-Japan+Party+2021+-+Salon+Fantastique.html">Japan Party 2021 - Salon Fantastique</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Paris 12ème</strong> du <font style='color:#15b1de;'>Samedi 28 août 2021</font> au <font style='color:#15b1de;'>Dimanche 29 août 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Japan Party revient pour une 9e édition les 28 et 29 Août 2021. Cette année, Le Salon Fantastique et Japan Party 2021 s'allient pour louer ensemble le hall de l'espace Événement du Parc Floral de Paris (bois de Vincennes) et faire un double salon. (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/4248-Brussels+Games+Festival+2021.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200525_brusselsgamesfestival.jpg" width="350" height="245" alt="Brussels Games Festival 2021" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/4248-Brussels+Games+Festival+2021.html">Brussels Games Festival 2021</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Bruxelles</strong> du <font style='color:#15b1de;'>Vendredi 27 août 2021</font> au <font style='color:#15b1de;'>Dimanche 29 août 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">La 8ème édition du Brussels Games Festival réunira au Parc du Cinquantenaire du 27 au 29 août 2021 tout ce qui se fait de mieux en matière de jeux de société (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/3786-Japan+Expo+2021+-+21eme+edition.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/201001_japanexpo2021.jpg" width="350" height="245" alt="Japan Expo 2021 - 21ème édition" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/3786-Japan+Expo+2021+-+21eme+edition.html">Japan Expo 2021 - 21ème édition</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Villepinte</strong> du <font style='color:#15b1de;'>Jeudi 15 juillet 2021</font> au <font style='color:#15b1de;'>Dimanche 18 juillet 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Initialement, le 21ème festival Japan Expo 2020 devait avoir lieu en 2020 mais c'est du 15 au 18 juillet 2021, et toujours au Parc des Expositions de Paris-Nord Villepinte que Japan Expo recevra de prestigieux invités et vous offrira l'occasion de les rencontrer lors de séances de dédicace, de masterclass ou de conférences au cours desquelles ils parlent de leur travail, de leur carrière et de leurs uvres. (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/3934-FLIP+2021+-+35eme+edition+du+Festival+Ludique+International+de+Parthenay.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200525_flip2021.jpg" width="350" height="245" alt="FLIP 2021 - 35ème édition du Festival Ludique International de Parthenay" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/3934-FLIP+2021+-+35eme+edition+du+Festival+Ludique+International+de+Parthenay.html">FLIP 2021 - 35ème édition du Festival Ludique International de Parthenay</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Parthenay</strong> du <font style='color:#15b1de;'>Mercredi 7 juillet 2021</font> au <font style='color:#15b1de;'>Dimanche 18 juillet 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Le Festival Ludique International de Parthenay vous accueille en 2021 pour sa 35ème édition : sur son immense plateau de jeux, novices ou amateurs éclairés se laisseront guider par les animateurs de la Cité des Jeux dans cet incroyable parcours ludique ! (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/4378-Comiccon+de+Montreal+2021.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/200523_montrealcomicon.jpg" width="350" height="245" alt="Comiccon de Montréal 2021" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/4378-Comiccon+de+Montreal+2021.html">Comiccon de Montréal 2021</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Montréal</strong> du <font style='color:#15b1de;'>Vendredi 9 juillet 2021</font> au <font style='color:#15b1de;'>Dimanche 11 juillet 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">Le Comiccon de Montréal célèbrera sa douzième édition du 9 au 11 juillet 2021. Il prend la forme d'un salon consacré à la culture populaire, laquelle englobe notamment les comic books, les bandes dessinées, la science-fiction, l'horreur, le manga, l'anime, les jouets, le cinéma, les jeux vidéo et l'univers du divertissement (...) </div>
                </div>
            </div>
        </article>
    </div>
    <div class="row clearfix">
        <article class="def">
            <div class="col-sm-6 col-md-4 col-lg-5">
                <figure class="overlay relative"> <a itemprop="url" href="https://www.rom-game.fr/agenda/4457-RoboCup+2021+Bordeaux.html" class="thumb-overlay-small"> <img src="https://www.rom-game.fr/multimedia/agendaM/201007_robocup2021.jpg" width="350" height="245" alt="RoboCup 2021 Bordeaux" class="img-responsive"> </a>
                    <figcaption>
                        <div class="entry-meta"></div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-7">
                <div class="entry">
                    <h3> <a href="https://www.rom-game.fr/agenda/4457-RoboCup+2021+Bordeaux.html">RoboCup 2021 Bordeaux</a></h3>
                    <div class="entry-meta"> <time class="entry-date"><strong>Bordeaux</strong> du <font style='color:#15b1de;'>Mardi 22 juin 2021</font> au <font style='color:#15b1de;'>Lundi 28 juin 2021</font></time></div>
                    <div style="margin-top:5px;" class="text">RoboCup 2021 Bordeaux est la plus grande compétition de Robotique et d'Intelligence Artificielle du monde et ses milliers de robots viendront en France en juin 2021, accueillis en territoire aquitain au Parc des expositions de Bordeaux ! (...) </div>
                </div>
            </div>
        </article>
    </div>
</div>