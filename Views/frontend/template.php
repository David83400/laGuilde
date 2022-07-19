<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- meta description -->
    <meta name="description" content="La Guilde des nettoyeurs a pour vocation de donner la possibilité à ses utilisateurs de géolocaliser des décharges sauvages dans la nature" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name=”twitter:site” content=”@laguilde” />
    <meta name="twitter:title" content="La Guilde : pour une nature sans déchets.">
    <meta name="twitter:description" content="Pour une nature sans déchets, la Guilde des nettoyeurs a mis en place une application qui donne la possibilité à ses utilisateurs randonneurs de géolocaliser les décharges sauveges sur les sites naturels.">
    <meta name=”twitter:image” content=”https://www.laguilde.com/slider.jpg” />

    <!-- Open Graph -->
    <meta property="og:title" content="La Guilde : pour une nature sans déchets." />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://www.laguilde.com/" />
    <meta property="og:image" content="https://www.laguilde.com/slider.jpg" />
    <meta property="og:description" content="Pour une nature sans déchets, la Guilde des nettoyeurs a mis en place une application qui donne la possibilité à ses utilisateurs randonneurs de géolocaliser les décharges sauveges sur les sites naturels." />
    <meta property="og:site_name" content="laGuilde" />


    <!-- Bootstrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- personal css -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Font Awesome icons-->
    <script src="https://kit.fontawesome.com/c9ef589bf6.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/logo/favicon.png" />

    <title><?= $title ?></title>
</head>

<body class="black merriFont">
    <!-- Main header -->
    <?= $header ?>
    <!-- Navbar -->
    <?= $navbar ?>
    <!-- Session message -->
    <?= $session ?>
    <!-- content -->
    <?= $content ?>
    <!-- footer -->
    <?= $footer ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- leaflet js link -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- leaflet markerCluster js link -->
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

    <!-- Personal js link -->
    <script src="/javascript/ojects/LeafletMap.js"></script>
    <script src="/javascript/ojects/PellMell.js"></script>
    <script src="/javascript/ojects/FormValidate.js"></script>
    <script src="/javascript/ojects/main.js"></script>
    <script src="/javascript/scripts.js"></script>

    <!--<script src="/Vendor/dist/polyfill.bundle.js"></script>
        <script src="/Vendor/dist/app.bundle.js"></script>-->
</body>

</html>