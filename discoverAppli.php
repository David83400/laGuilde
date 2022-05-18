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

    <title>La Guilde | Découvrez l'application</title>
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
                <div class="col-12 mt-5">
                    <img src="/public/images/discoverAppliPage/slider/slider1.jpg" class="boxShadow w-100"
                        alt="Bord de mer pollué par des déchets sauvages.">
                </div>
            </div>
        </div>
    </section>
    <!-- Simple utilisation section -->
    <section id="simpleUtilisation" class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 mt-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Simple à utiliser !</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <p class="text-center">L’application est d’une simplicité élémentaire. En effet, lorsqu'un
                        randonneur trouve une décharge sauvage, et qu’il
                        n’est pas en capacité de la nettoyer soit par manque de temps, soit par manque de matériel,
                        l’application lui donne la
                        possibilité de la prendre en photo et de la géolocaliser. Une fois la photo prise et le lieu
                        indiqué sur la carte, le
                        randonneur ou la randonneuse n'a plus qu'à entrer les informations sur la décharge. Il peut
                        entrer le type de déchets
                        (plastique, métal, déchets organiques…) et leur quantité. Ces informations sont essentielles
                        pour prévoir le matériel à
                        apporter en vue du nettoyage. Une fois les indications complétées, un marqueur est mis en place
                        sur la carte à
                        l'emplacement de la zone polluée. Le marqueur sera différent suivant le type de déchets
                        enregistrés dans les
                        informations. Il est également possible de créer un itinéraire pour se rendre facilement sur le
                        point de récolte sans
                        forcément emprunter le chemin de randonnée. Une fois les déchets récoltés et le site dépollué,
                        le marqueur pourra être
                        changé.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-5 g-xl-4">
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card1.jpg" class="boxShadow d-block w-100"
                        alt="Plage polluée par des déchets sauvages.">
                </div>
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card2.jpg" class="boxShadow d-block w-100"
                        alt="Poisson mort prisonnier d'un gant en plastique.">
                </div>
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card3.jpg" class="boxShadow d-block w-100"
                        alt="Un lac pollué par des déchets sauvages.">
                </div>
                <div class="col imgResponsive">
                    <img src="/public/images/discoverAppliPage/cards/card4.jpg" class="boxShadow d-block w-100"
                        alt="Un lac pollué par des déchets sauvages.">
                </div>
            </div>
        </div>
    </section>
    <!-- Hiking appli presentation section -->
    <section id="hikingAppPresent" class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Randonnez grâce à notre application.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <p class="text-center">Cette application est couplée à un site de parcours de randonnées coopératif.
                        Celle-ci vous permettra de vous aérer sur
                        un des différents tracés proposés par les membres de la Guilde …. laissez vous guider et aérez
                        vous l’esprit. Une fois
                        le parcours choisi, vous n’avez plus qu’à vous laisser guider par les indications, le tracé gps
                        et les différentes
                        photos de la randonnée. Si vous rencontrez une décharge sauvage sur le parcours, vous n’avez
                        plus qu’à la géolocaliser
                        grâce à l’application. Vous pouvez également enregistrer vos performances ... le nombre de
                        kilomètres parcourus, le
                        dénivelé, la durée qu’il vous a fallu pour faire la totalité du parcours de la randonnée.
                        Remplissez vos poumons d’air
                        frais.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-5">
                    <img src="/public/images/discoverAppliPage/slider/slider2.jpg" class="boxShadow w-100"
                        alt="Un randonneur dans un paysage de montagne.">
                </div>
            </div>
        </div>
    </section>
    <!-- Recharge section -->
    <section id="rechargeSection" class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Ressourcez vous et respirez !</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-5 g-xl-4">
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card5.jpg" class="boxShadow d-block w-100"
                        alt="Des belles piscines naturelles.">
                </div>
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card6.jpg" class="boxShadow d-block w-100"
                        alt="Un randonneur bivouac dans un paysage de montagne.">
                </div>
                <div class="col">
                    <img src="/public/images/discoverAppliPage/cards/card7.jpg" class="boxShadow d-block w-100"
                        alt="Une randonneuse marche dans un paysage de montagne.">
                </div>
                <div class="col imgResponsive">
                    <img src="/public/images/discoverAppliPage/cards/card8.jpg" class="boxShadow d-block w-100"
                        alt="Un paysage de montagne avec un lac.">
                </div>
            </div>
        </div>
    </section>
    <!-- Create journey section -->
    <section id="createJourney" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Créez vos propres parcours et partagez les
                        avec la communauté !</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <p class="text-center">Ce projet a également pour mission de favoriser le mieux vivre la nature
                        ensemble et le partage. Cette application vous
                        permettra de créer vos propres parcours de randonnée et de les partager avec les membres de la
                        communauté. Partez à la
                        découverte de lieux que vous ne connaissez pas. Faites la reconnaissance des parcours et
                        utilisez la trace gps de
                        l’application pour vous suivre. Créez votre randonnée en mettant en place des checkpoints. Vous
                        avez également la
                        possibilité d’insérer un descriptif, des indications, des points de repères pour ne pas se
                        perdre, des photos. Grâce à
                        vos partages et à vos découvertes, vous faites vivre la communauté et partagez de l’amour et des
                        lieux magnifiques.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <img src="/public/images/discoverAppliPage/slider/slider3.jpg" class="boxShadow w-100"
                        alt="Deux randonneurs lisent une carte pour suivre leur parcours.">
                </div>
            </div>
        </div>
    </section>
    <!-- Share photo section -->
    <section id="sharePhoto" class="d-flex flex-column mt-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 my-5">
                    <h2 class="text-center darkBrownCol dancingFont mt-4">Partagez vos plus belles photos sur le réseau
                        social des membres de la guilde.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2 mb-5 mb-lg-0">
                    <p class="text-center">Cette application a été créée pour faire prendre conscience que l’impact de
                        l’être humain sur son environnement est
                        mauvais, mais notre aspiration n’est pas de ne montrer que le négatif. Ainsi grâce à la
                        communauté, nous avons également
                        la possibilité d’élever les consciences en montrant les beautés de la nature. Avec le réseau
                        social de la Guilde, vous
                        avez la possibilité de partager vos photos de randonnées à la fois avec les membres, mais
                        également sur les autres
                        réseaux sociaux. L’objectif étant de montrer les beautés de la nature et le bonheur qu’elle peut
                        nous apporter. En
                        partageant de l’amour et des belles choses on parviendra à élever les consciences. On a tous un
                        rôle à jouer à notre
                        niveau !
                    </p>
                </div>
            </div>
            <ul
                class="row row-cols-1 row-cols-lg-3 d-lg-flex justify-content-lg-center align-items-lg-center g-5 g-lg-0 pellMell">
                <li class="col mixesImg" data-animation-rotate="-15" data-animation-translate-x="10"
                    data-animation-translate-Y="-200">
                    <div class="image1">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg1.jpg" class="boxShadow"
                            alt="Une aurore boréale au dessus d'un lac la nuit.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="-12" data-animation-translate-x="-108"
                    data-animation-translate-Y="338">
                    <div class="image2">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg2.jpg" class="boxShadow"
                            alt="Une petite cascade qui se jette dans une piscine naturelle.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="5" data-animation-translate-x="423"
                    data-animation-translate-Y="91">
                    <div class="image3">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg3.jpg" class="boxShadow"
                            alt="Un coucher de soleil au dessus de la mer.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="25" data-animation-translate-x="160"
                    data-animation-translate-Y="-307">
                    <div class="image4">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg4.jpg" class="boxShadow"
                            alt="Des randonneurs marchent sur un chemin côtier.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="-15" data-animation-translate-x="-403"
                    data-animation-translate-Y="360">
                    <div class="image5">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg5.jpg" class="boxShadow"
                            alt="Un lac au milieu d'un paysage de montagne.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="18" data-animation-translate-x="-263"
                    data-animation-translate-Y="-37">
                    <div class="image6">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg6.jpg" class="boxShadow"
                            alt="Des randonneurs marchent dans la montagne.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="-18" data-animation-translate-x="-332"
                    data-animation-translate-Y="67">
                    <div class="image7">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg7.jpg" class="boxShadow"
                            alt="Une randonneuse marche sur un parcours de montagne.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="12" data-animation-translate-x="260"
                    data-animation-translate-Y="451">
                    <div class="image8">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg8.jpg" class="boxShadow"
                            alt="Un paysage de bord de mer avec un temps nuageux.">
                    </div>
                </li>
                <li class="col mixesImg" data-animation-rotate="15" data-animation-translate-x="121"
                    data-animation-translate-Y="71">
                    <div class="image9">
                        <img src="/public/images/discoverAppliPage/mixesImg/mixesImg9.jpg" class="boxShadow"
                            alt="Un randonneur marche sur un parcours de montagne.">
                    </div>
                </li>
            </ul>
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

    <!-- Personal js link -->
    <script src="javascript/ojects/PellMell.js"></script>
    <script src="javascript/ojects/main.js"></script>
    <script src="javascript/scripts.js"></script>
</body>

</html>