<?php $title = 'La Guilde | Se connecter'; ?>
<?php ob_start() ?>
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
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>