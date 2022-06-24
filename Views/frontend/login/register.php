<?php $title = 'La Guilde | S\'inscrire'; ?>
<!-- Connection section -->
<section id="inscriptionSection" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mb-4">
                <h2 class="text-center darkBrownCol dancingFont mt-3">S'inscrire</h2>
            </div>
        </div>
        <form action="post" id="form" class="row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4 p-sm-5">
            <div class="row mt-4 mb-1">
                <div class="col-12 mb-2 p-0">
                    <input type="text" id="pseudo" class="bladeBrownBac form-control w-100 mb-1" placeholder="Votre pseudo">
                    <span class="greenlightCol">5 à 19 caractères</span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 mb-2 p-0">
                    <input type="email" id="email" class="bladeBrownBac form-control" placeholder="Votre email">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 mb-2 p-0">
                    <input type="email" id="emailConfirm" class="bladeBrownBac form-control" placeholder="Confirmez votre email">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-12 mb-2 p-0">
                    <input type="text" id="password" class="bladeBrownBac form-control mb-1" placeholder="Votre mot de passe">
                    <span class="greenlightCol">8 caractères minimum</span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 mb-2 p-0">
                    <input type="text" id="passwordConfirm" class="bladeBrownBac form-control" placeholder="Confirmez le mot de passe">
                </div>
            </div>
            <div class="row">
                <a href="test.php">
                    <button type="button" id="inscription" class="greenlightBac whiteCol boxShadow col-12 mb-1 ps-0">S'inscrire
                    </button>
                    <!--<button type="button" id="inscription"
                        class="blurButton greenlightBac whiteCol boxShadow col-12 mb-1 ps-0" disabled>S'inscrire
                    </button>-->
                </a>
            </div>
        </form>
    </div>
</section>