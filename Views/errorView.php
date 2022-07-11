<?php $this->title = 'La guilde | Erreur : ' . http_response_code() ?>
<section id="error">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center my-5">
                <div class="text-center my-5">
                    <h1 class="my-5">Nous sommes désolés, mais <?= $errorMessage ?></h1>
                </div>
                <div class="text-center my-5">
                    <h5>Erreur : <?= http_response_code() ?></h5>
                </div>
                <div class="text-center my-5">
                    <button type="button" class="greenlightBac whiteCol boxShadow" onclick="window.location.href = '/';">Retour à la page d'accueil</button>
                </div>
            </div>
        </div>
    </div>
</section>