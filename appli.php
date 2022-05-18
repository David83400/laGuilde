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

    <!-- Leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

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

    <!-- leaflet markerCluster css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

    <title>La Guilde | L'application</title>
</head>

<body class="black merriFont">
    <!-- Main header -->
    <?php include('Views/frontend/header.php'); ?>
    <!-- Navbar -->
    <?php include('Views/frontend/navbar.php'); ?>
    <!-- Appli section -->
    <section id="appliSection" class="py-5">
        <div class="container-fluid">
            <div class="listMap">
                <div class="item js-marker" data-lat="43.191199" data-lng="6.041984"
                    data-img="/public/images/home/cards/card1.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card1.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.329229" data-lng="6.045799"
                    data-img="/public/images/home/cards/card2.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card2.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.237875" data-lng="6.072200"
                    data-img="/public/images/home/cards/card3.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card3.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.406550" data-lng="6.061187"
                    data-img="/public/images/home/cards/card4.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card4.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.726075" data-lng="5.812820"
                    data-img="/public/images/home/cards/card5.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card5.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.593539" data-lng="6.016305"
                    data-img="/public/images/home/cards/card6.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card6.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.700001" data-lng="6.03333"
                    data-img="/public/images/home/cards/card6.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card6.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.191199" data-lng="6.071984"
                    data-img="/public/images/home/cards/card1.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card1.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.329229" data-lng="6.145799"
                    data-img="/public/images/home/cards/card2.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card2.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.237875" data-lng="6.272200"
                    data-img="/public/images/home/cards/card3.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card3.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.406550" data-lng="6.361187"
                    data-img="/public/images/home/cards/card4.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card4.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.726075" data-lng="6.812820"
                    data-img="/public/images/home/cards/card5.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card5.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.593539" data-lng="6.716305"
                    data-img="/public/images/home/cards/card6.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card6.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
                <div class="item js-marker" data-lat="43.700001" data-lng="6.63333"
                    data-img="/public/images/home/cards/card6.jpg">
                    <div class="image">
                        <img src="/public/images/home/cards/card6.jpg" alt="" class="w-100">
                    </div>
                    <div class="itemText">
                        <div class="itemTitle d-flex justify-content-between align-items-center">
                            <h4>Randonnée ...</h4><span><a href="#map" class="greenlightCol"> Visualiser sur la
                                    carte</a></span>
                        </div>
                        <p>Description de la randonnée ...<a href="hikingPage.php" class="greenlightCol"> Lire la
                                suite</a></p>
                    </div>
                </div>
            </div>
            <div id="map" class="map">

            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include('Views/frontend/footer.php'); ?>
    
    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- leaflet js link -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <!-- leaflet markerCluster js link -->
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

    <!-- Personal js link -->
    <script src="javascript/ojects/LeafletMap.js"></script>
    <script src="javascript/ojects/main.js"></script>
    <script src="javascript/scripts.js"></script>
</body>

</html>