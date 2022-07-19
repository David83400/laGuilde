<?php $this->title = 'La Guilde | Accueil'; ?>

<!-- Carousel section -->
<section id="carouselSection">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-xl-6 offset-xl-3 my-4 my-lg-5">
                <h2 class="text-center darkBrownCol dancingFont">La nature n'est pas une décharge, agissons
                    ensemble !
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="carousel my-3">
                    <div id="carouselFade" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-shadow boxShadow">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner carousel-fade">
                                <div class="carousel-item active">
                                    <img src="/images/home/slider/slider1.jpg" class="d-block w-100" alt="Un lac pollué par des déchets sauvages.">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/home/slider/slider2.jpg" class="d-block w-100" alt="Une plage polluée par du plastique.">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/home/slider/slider3.jpg" class="d-block w-100" alt="La surface d'un lac polluée par du plastique.">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/home/slider/slider4.jpg" class="d-block w-100" alt="Un homme ramassant des déchets dans un lac.">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/home/slider/slider5.jpg" class="d-block w-100" alt="Une plage polluée par du plastique.">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cards section -->
<section id="cardsSection" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-xl-8 offset-xl-2 mt-4 mb-5 my-lg-5">
                <h2 class="text-center darkBrownCol dancingFont mt-4">Chacun a un rôle à jouer à son niveau.
                    C'est
                    pourquoi, nous devons tous nous interroger sur ce que nous pouvons faire !
                </h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-5 g-xl-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card1.jpg" class="card-img-top" alt="Bénévoles ramassant des déchets dans la nature.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Découvrez la communauté !</h5>
                        <p class="card-text">Au delà de son objectif de protection de l’environnement, ce projet a
                            vocation à favoriser les échanges entre usagers de la nature. Créez vos propres parcours
                            de randonnées et
                            collaborez avec la communauté en les partageant avec les autres membres. La volonté de
                            tous les membres de la Guilde
                            étant de limiter et même d’éliminer l'impact négatif des activités de l'homme sur
                            l’environnement,
                            associez vous ... <a href="Views/laGuilde.html#guildeCommunity" class="greenlightCol">Voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card2.jpg" class="card-img-top" alt="Un dépot sauvage d'ordures en bord de mer.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Une application simple à utiliser !</h5>
                        <p class="card-text">L’application est d’une simplicité élémentaire. En effet, lorsqu'un
                            randonneur trouve une décharge sauvage, et qu’il
                            n’est pas en capacité de la nettoyer soit par manque de temps, soit par manque de
                            matériel, l’application lui donne la
                            possibilité de la prendre en photo et de la géolocaliser. Une fois la photo prise et le
                            lieu indiqué sur la carte, le
                            randonneur ou la randonneuse n'a plus qu'à entrer les informations sur la décharge ...
                            <a href="Views/discoverAppli.html#simpleUtilisation" class="greenlightCol">Voir plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card3.jpg" class="card-img-top" alt="Une femme criant dans un mégaphone.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Proposez des actions !</h5>
                        <p class="card-text">Au delà de son objectif de protection de la nature et de tous les
                            éléments qui la composent, ce projet a également
                            vocation à favoriser l’émergence de nouvelles idées pour limiter l’impact de l’homme sur
                            son environnement. Grâce au
                            réseau social que nous avons mis en place dans la section membre, vous pouvez contribuer
                            avec la communauté ... <a href="Views/laGuilde.html#getInvolved" class="greenlightCol">Voir plus</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card4.jpg" class="card-img-top" alt="Un randonneur dans un paysage de montagne.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Ressourcez vous et respirez !</h5>
                        <p class="card-text">Cette application est couplée à un site de parcours de randonnées
                            coopératif. Celle-ci vous permettra de vous aérer sur
                            un des différents tracés proposés par les membres de la Guilde …. laissez vous guider et
                            aérez vous l’esprit. Une fois
                            le parcours choisi, vous n’avez plus qu’à vous laisser guider par les indications ...
                            <a href="Views/discoverAppli.html#hikingAppPresent" class="greenlightCol">Voir plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card5.jpg" class="card-img-top" alt="Un appareil photographique et d'une boussole sur une carte routière.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Créez vos parcours et partagez !</h5>
                        <p class="card-text">Ce projet a également pour mission de favoriser le mieux vivre la
                            nature ensemble et le partage. Cette application vous
                            permettra de créer vos propres parcours de randonnée et de les partager avec les membres
                            de la communauté. Partez à la
                            découverte de lieux que vous ne connaissez pas. Faites la reconnaissance des parcours
                            ... <a href="Views/discoverAppli.html#createJourney" class="greenlightCol">Voir plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/home/cards/card6.jpg" class="card-img-top" alt="Une femme prenant une photo avec son appareil.">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Partagez vos plus belles photos !</h5>
                        <p class="card-text">Cette application a été créée pour faire prendre conscience que
                            l’impact de l’être humain sur son environnement est
                            mauvais, mais notre aspiration n’est pas de ne montrer que le négatif. Ainsi grâce à la
                            communauté, nous avons également
                            la possibilité d’élever les consciences en montrant les beautés de la nature. Avec le
                            réseau social de la Guilde, vous
                            avez la possibilité de partager vos photos de randonnées à la fois avec les ... <a href="Views/discoverAppli.html#sharePhoto" class="greenlightCol">Voir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Frame section -->
<section id="frameSection">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 my-5">
                <h2 class="text-center darkBrownCol dancingFont mb-2">Agissons ensemble !</h2>
            </div>
        </div>
        <div class="row">
            <div class="imageBox col-10 offset-1 col-lg-6 offset-lg-2 d-lg-flex flex-lg-row">
                <div class="childsFrame boxShadow">
                    <img src="images/home/frame/frame1.jpg" alt="Enfants de différentes nationalités tenant des pancartes pour sauver la planète." class="d-block w-100">
                    <div class="frameText">
                        <p class="whiteCol dancingFont text-center p-xl-5 p-xxl-5">Chacun a son rôle à jouer mais
                            ensemble, on est plus forts.</p>
                    </div>
                </div>
                <div class="handsFrame boxShadow">
                    <img src="images/home/frame/frame2.jpg" alt="Des mains tenant une pousse de plante.">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discovery application section -->
<?php if (!isset($_SESSION['member'])) {
?>
    <section id="discoveryApplySection" class="bladeBrownBac pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 my-5">
                    <h2 class="text-center greenlightCol dancingFont">Découvrez l'application</h2>
                </div>
            </div>
            <div class="row">
                <div class="mapAppli boxShadow col-8 offset-2 p-0">
                    <img src="images/openStreetMap/openstreetmap1.jpg" class="d-block w-100" alt="Carte Openstreetmap">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <a href="discoverAppli">
                        <button type="button" class="button greenlightBac whiteCol boxShadow">Découvrir</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- Contact section -->
<section id="contactSection" class="mt-1 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-3 mb-5 p-2">
                <h2 class="text-center darkBrownCol dancingFont mt-3">Contactez nous</h2>
            </div>
        </div>
        <div class="row">
            <?php if (isset($errors)) { ?>
                <?php foreach ($errors as $error) : ?>
                    <div class="alert bladeBrownBac boxShadow col-8 offset-2 col-lg-8 offset-lg-2 mb-3">
                        <h4 class="darkBrownCol text-center pt-2"><?= $error; ?></h4>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
            <?php if (isset($hits)) { ?>
                <?php foreach ($hits as $hit) : ?>
                    <div class="alert bladeBrownBac boxShadow col-8 offset-2 col-lg-8 offset-lg-2 mb-3">
                        <h4 class="greenlightCol text-center pt-2"><?= $hit; ?></h4>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
            <?= $contactForm ?>
        </div>
    </div>
</section>