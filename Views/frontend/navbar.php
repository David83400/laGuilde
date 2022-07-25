<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-2 p-sm-4 bg-body rounded sticky-top my-1">
    <div class="container">
        <div class="logoResponsive greenlightBac text-center d-flex align-items-center">
            <a href="/home">
                <h1 class="whiteCol dancingFont">La guilde des nettoyeurs</h1>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#responsiveNavbar" aria-controls="responsiveNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="responsiveNavbar">
            <ul class="navbar-nav pt-3 pt-lg-0">
                <li class="nav-item ms-4">
                    <a class="nav-link active clearBrownCol p-1" aria-current="page" href="/home"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link darkBrownCol p-1" href="/community">La guilde</a>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link darkBrownCol p-1" href="/discoverAppli">Découvrez
                        l'application</a>
                </li>
                <?php if (isset($_SESSION['member']) && !empty($_SESSION['member']['id'])) : ?>
                    <li class="nav-item ms-4">
                        <a class="nav-link darkBrownCol p-1" href="/appli/homePage">L'appli</a>
                    </li>
                    <li class="nav-item dropdown ms-4">
                        <a class="nav-link dropdown-toggle darkBrownCol p-1" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user me-2"></i><?= $_SESSION['member']['pseudo'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item darkBrownCol bladeBrownBac" href="/profil/displayProfil/<?= $_SESSION['member']['id']; ?>">Mon profil</a></li>
                            <li><a class="dropdown-item darkBrownCol bladeBrownBac" href="#">Mes randonnées</a></li>
                            <li><a class="dropdown-item darkBrownCol bladeBrownBac" href="#">Mes alertes déchets</a></li>
                            <li><a class="dropdown-item darkBrownCol bladeBrownBac" href="#">Le réseau social</a></li>
                            <li><a class="dropdown-item darkBrownCol bladeBrownBac" href="/assistance">Nous contacter</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item ms-4">
                        <a class="nav-link darkBrownCol p-1" href="/home#contactSection">Contact</a>
                    </li>
                    <li class="connectionResponsive nav-item ms-4">
                        <a class="nav-link darkBrownCol p-1" href="/login/connection">Se connecter</a>
                    </li>
                    <li class="inscriptionResponsive nav-item ms-4">
                        <a class="nav-link darkBrownCol p-1" href="/login/register">S'inscrire</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>