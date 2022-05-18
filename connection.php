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

    <title>La Guilde | Se connecter</title>
</head>

<body class="black merriFont">
    <!-- Main header -->
    <?php include('Views/frontend/header.php'); ?>
    <!-- Navbar -->
    <?php include('Views/frontend/navbar.php'); ?>
    <!-- Connection section -->
    <section id="connectionSection" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 mb-4">
                    <h2 class="text-center darkBrownCol dancingFont mt-3">Se connecter</h2>
                </div>
            </div>
            <form action="post"
                class="row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4">
                <div class="row my-4">
                    <div class="col-12 mb-2 p-0">
                        <input type="text" id="pseudo" class="bladeBrownBac form-control w-100"
                            placeholder="Votre pseudo">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 mb-2 p-0">
                        <input type="email" id="email" class="bladeBrownBac form-control w-100"
                            placeholder="Votre email">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 mb-2 p-0">
                        <input type="text" id="password" class="bladeBrownBac form-control w-100"
                            placeholder="Votre mot de passe">
                    </div>
                </div>
                <div class="row"><button type="button"
                        class="greenlightBac whiteCol boxShadow col-12 mb-1 ps-0">Envoyer</button>
                </div>
                <div class="row mt-4">
                    <div class="col-12 mb-2 p-0">
                        <a href="#" class="greenlightCol">Mot de passe oublié ?</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-2 p-0">
                        <a href="inscription.html" class="greenlightCol">Vous n'avez pas encore de compte ?</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- footer -->
    <?php include('Views/frontend/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>