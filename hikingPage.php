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
    <!-- hiking section -->
    <section id="hikingSection" class="py-5">
        <div class="container-fluid">
            <div class="information">
                <div class="row item js-marker" data-lat="43.191199" data-lng="6.041984"
                    data-img="/public/images/discoverAppliPage/slider/slider2.jpg">
                    <div class="col-12">
                        <div class="itemImage boxShadow">
                            <img src="/public/images/discoverAppliPage/slider/slider2.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="itemText px-5">
                            <h2 class="dancingFont darkBrownCol mt-5 mb-3">Titre de la randonnée</h2>
                            <div class="hikingInfo">
                                <ul class="d-flex flex-wrap mb-5 p-0">
                                    <li class="mt-3 me-3"><img src="/public/images/appliPage/icon/imgEasy.jpg" alt=""
                                            class="me-1"><span>Facile</span></li>
                                    <li class="mt-3 me-3"><i
                                            class="fa fa-stopwatch darkBrownCol me-1"></i><span>4h00</span>
                                    </li>
                                    <li class="mt-3 me-3"><i
                                            class="fa fa-shoe-prints darkBrownCol me-1"></i><span>23km</span></li>
                                    <li class="mt-3 me-3"><i class="fa fa-mountain darkBrownCol"></i><i
                                            class="fa fa-arrow-up darkBrownCol me-1"></i><span>1543m</span></li>
                                    <li class="mt-3 me-3"><i class="fa fa-mountain darkBrownCol"></i><i
                                            class="fa fa-arrow-down darkBrownCol me-1"></i><span>8537m</span></li>
                                    <li class="mt-3 me-3"><i
                                            class="fa fa-route darkBrownCol me-1"></i><span>Aller-retour</span></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel tellus vitae leo
                                scelerisque maximus. Proin vel
                                sollicitudin velit. Duis sit amet sem molestie, eleifend lectus sit amet, tincidunt
                                lorem.
                                Sed eget diam nec nulla
                                hendrerit sagittis. Nam vulputate quis est volutpat posuere. Sed nulla nulla, tincidunt
                                nec
                                mattis eu, iaculis non
                                ligula. In porta sapien eu libero dapibus, eu posuere lacus pretium. Quisque eleifend
                                gravida sodales. Donec faucibus ex
                                a sollicitudin imperdiet. Ut vitae rutrum nisi. Ut et nibh ex.

                                Vivamus luctus justo urna, in tristique tortor porttitor at. Pellentesque maximus,
                                sapien at
                                efficitur dictum, quam
                                felis placerat mi, eu consectetur urna nisi eget dolor. Maecenas fringilla blandit
                                imperdiet. Curabitur imperdiet a
                                tortor at interdum. Phasellus interdum vestibulum ornare. Pellentesque at viverra
                                mauris, in
                                varius sem. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Vivamus ornare mi a turpis commodo, nec
                                mattis
                                purus posuere.

                                Nulla erat justo, fringilla a fringilla id, mattis vitae velit. Nam vel odio congue,
                                consectetur justo vitae, facilisis
                                nunc. In hac habitasse platea dictumst. Pellentesque tincidunt vestibulum magna, quis
                                elementum urna dapibus gravida.
                                Curabitur sed tristique erat. Curabitur sapien odio, egestas quis mattis at, convallis
                                rutrum felis. Fusce sed ex
                                hendrerit, tempor nibh vitae, dapibus nibh.

                                Quisque dignissim quam massa, et sollicitudin dui placerat sed. Nunc in nibh porta,
                                bibendum
                                purus a, scelerisque nisi.
                                Nulla ut sapien est. Nulla sed justo est. Nullam nec dapibus dui. Pellentesque luctus
                                pretium tempor. Maecenas ultrices
                                lectus et nunc convallis scelerisque. Pellentesque in mi nibh. Duis rhoncus interdum
                                lectus,
                                vitae consequat velit
                                congue non. Aenean porta urna non nibh cursus, sit amet tempor nisi tincidunt.
                                Pellentesque
                                consectetur lacinia commodo.
                                Nullam libero sapien, placerat et est elementum, blandit elementum quam. Cras ultricies
                                nisi
                                egestas, rhoncus lectus
                                quis, sagittis lorem.

                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Proin
                                ornare elementum orci. Nam
                                vel orci in lorem iaculis venenatis in quis lorem. Ut id vehicula libero. Sed faucibus
                                imperdiet odio vel congue.
                                Praesent quis quam et leo consectetur tincidunt. Nunc consectetur venenatis ex, quis
                                placerat ligula pulvinar eget.

                                Aliquam erat volutpat. Aliquam luctus semper eros. Fusce at leo eu ex vestibulum
                                consequat
                                vel a magna. In nec nisl at
                                tellus fermentum tincidunt quis non orci. Suspendisse tincidunt purus nulla, sit amet
                                porttitor nisi bibendum quis.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos.
                                Praesent vel consectetur
                                urna. Maecenas malesuada ante eu dui sollicitudin maximus. In bibendum augue eget quam
                                lacinia ultrices.

                                Nulla nec bibendum odio. Quisque tristique efficitur arcu in vehicula. Nullam dignissim
                                est
                                leo, sit amet porttitor ex
                                suscipit at. Duis tincidunt dui at augue pellentesque, non ultrices tellus scelerisque.
                                Cras
                                a tempor est, nec auctor
                                diam. Phasellus vel congue nulla. Nullam eros urna, gravida id malesuada ac, tristique
                                ac
                                ligula. Etiam vulputate
                                condimentum posuere. Etiam sit amet dui sit amet felis iaculis vehicula a in nisi.
                                Vivamus
                                maximus ut purus vel
                                consequat. Donec sed pulvinar lorem. Vestibulum euismod lorem ultricies purus posuere
                                blandit. Nam eget mi eros.
                                Vestibulum a quam.</p>
                        </div>
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