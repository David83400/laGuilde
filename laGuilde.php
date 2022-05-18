<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- meta description -->
    <meta name="description"
        content="La Guilde des nettoyeurs a pour vocation de donner la possibilité à ses utilisateurs de géolocaliser des décharges sauvages dans la nature" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name=”twitter:site” content=”@laguilde” />
    <meta name="twitter:title" content="La Guilde : pour une nature sans déchets.">
    <meta name="twitter:description"
        content="Pour une nature sans déchets, la Guilde des nettoyeurs a mis en place une application qui donne la possibilité à ses utilisateurs randonneurs de géolocaliser les décharges sauveges sur les sites naturels.">
    <meta name=”twitter:image” content=”https://www.laguilde.com/slider.jpg” />

    <!-- Open Graph -->
    <meta property="og:title" content="La Guilde : pour une nature sans déchets." />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://www.laguilde.com/" />
    <meta property="og:image" content="https://www.laguilde.com/slider.jpg" />
    <meta property="og:description"
        content="Pour une nature sans déchets, la Guilde des nettoyeurs a mis en place une application qui donne la possibilité à ses utilisateurs randonneurs de géolocaliser les décharges sauveges sur les sites naturels." />
    <meta property="og:site_name" content="laGuilde" />

    <!-- personal css -->
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="/public/images/logo/favicon.png" />

    <!-- Bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Font Awesome icons-->
    <script src="https://kit.fontawesome.com/c9ef589bf6.js" crossorigin="anonymous"></script>

    <title>La Guilde | La communauté</title>
</head>

<body class="black merriFont">
    <!-- Main header -->
    <?php include('Views/frontend/header.php'); ?>
    <!-- Navbar -->
    <?php include('Views/frontend/navbar.php'); ?>
    <!-- Slider -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <img src="/public/images/guildePage/slider/slider1.jpg" class="boxShadow w-100"
                        alt="Bénévoles ramassant des déchets dans la forêt.">
                </div>
            </div>
        </div>
    </section>
    <!-- Guilde Community section -->
    <section id="guildeCommunity">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 mt-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Découvrez la communauté de la guilde des
                        nettoyeurs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <p class="text-center">Au delà de son objectif de protection de l’environnement, ce projet a
                        vocation à favoriser les échanges entre usagers de
                        la nature. Créez vos propres parcours de randonnées et collaborez avec la communauté en les
                        partageant avec les autres
                        membres. La volonté de tous les membres de la Guilde étant de limiter et même d’éliminer
                        l'impact négatif des activités
                        de l'homme sur l’environnement, associez vous à la communauté pour localiser et nettoyer les
                        lieux pollués. Soyez
                        volontaires, et participez au nettoyage de nos différents sites naturels ….. on a tous un rôle à
                        jouer à notre niveau.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3  g-5 g-xl-4">
                <div class="col">
                    <img src="/public/images/guildePage/cards/card1.jpg" class="boxShadow d-block w-100"
                        alt="Mains les unes sur les autres en signe de partenariat.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card2.jpg" class="boxShadow d-block w-100"
                        alt="Bénévoles ramassant des déchets dans la nature.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card3.jpg" class="boxShadow d-block w-100"
                        alt="Hommes et femmes brandissant des pancartes pour sauver la planète contre le plastique et les déchets sauvages.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card4.jpg" class="boxShadow d-block w-100"
                        alt="Bénévoles ramassant des déchets dans la nature.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card5.jpg" class="boxShadow d-block w-100"
                        alt="Bénévoles ramassant des déchets dans la forêt.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card6.jpg" class="boxShadow d-block w-100"
                        alt="Bénévoles ramassant des déchets dans un lac.">
                </div>
            </div>
        </div>
    </section>
    <!-- Get involved -->
    <section id="getInvolved" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 mt-5 p-0">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Impliquez vous et proposez des actions à la
                        communauté !</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <p class="text-center">Au delà de son objectif de protection de la nature et de tous les éléments
                        qui la composent, ce projet a également
                        vocation à favoriser l’émergence de nouvelles idées pour limiter l’impact de l’homme sur son
                        environnement. Grâce au
                        réseau social que nous avons mis en place dans la section membre, vous pouvez contribuer avec la
                        communauté en créant et
                        partageant vos idées et vos envies. La flore n’est qu’un des nombreux axes de notre projet ...
                        la faune a également
                        besoin des nombreuses actions que nous pouvons mettre en place en travaillant main dans la main.
                        Soyons volontaires et
                        mettons nos envies et nos idées en commun ….. on a tous un rôle à jouer à notre niveau.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3  g-5 g-xl-4">
                <div class="col">
                    <img src="/public/images/guildePage/cards/card7.jpg" class="boxShadow d-block w-100"
                        alt="La patte d'un chien dans la main d'une femme, une preuve d'amour.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card8.jpg" class="boxShadow d-block w-100"
                        alt="Un chiot carressé par une main.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card9.jpg" class="boxShadow d-block w-100"
                        alt="Un lapin mange dans la main d'une femme.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card10.jpg" class="boxShadow d-block w-100"
                        alt="Un cheval sent une main qui vient le caresser.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card11.jpg" class="boxShadow d-block w-100"
                        alt="Un écureuil mange dans la main d'un homme.">
                </div>
                <div class="col">
                    <img src="/public/images/guildePage/cards/card12.jpg" class="boxShadow d-block w-100"
                        alt="Une petite chèvre sent une main.">
                </div>
            </div>
        </div>
    </section>
    <!-- Discovery application section -->
    <section id="discoveryApplySection" class="bladeBrownBac pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3 my-5">
                    <h2 class="text-center greenlightCol dancingFont">Découvrez l'application</h2>
                </div>
            </div>
            <div class="row">
                <div class="mapAppli boxShadow col-8 offset-2 p-0">
                    <img src="/public/images/openStreetMap/openstreetmap1.jpg" class="d-block w-100"
                        alt="Carte Openstreetmap">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <a href="appli.php">
                        <button type="button" class="button greenlightBac whiteCol boxShadow">Découvrir</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include('Views/frontend/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>