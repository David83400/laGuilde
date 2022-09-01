<?php $this->title = 'La Guilde | ' . $member->getPseudo(); ?>

<section id="memberInfos" class="my-5">
    <div class="container">
        <div class="row my-3">
            <div class="col-12 d-flex flex-column justify-content-around">
                <div class="d-flex flex-column justify-content-between text-center">
                    <h2 class="darkBrownCol dancingFont my-2">Bonjour <?= ucfirst($member->getPseudo()) ?></h2>
                    <h3 class="darkBrownCol dancingFont my-2">Vous trouverez ici vos informations de connexion</h3>
                    <p class="mt-3 mb-2"><span>Votre pseudo : </span><?= $member->getPseudo() ?></p>
                    <p class="my-2"><span>Votre email : </span><?= $memberEmail->getEmail() ?></p>
                    <p class="my-2"><span>Vous êtes inscrit depuis le </span><?= date_format($member->getInscription_date(), 'd/m/Y à H:i:s') ?></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 changeMdp text-center">
                <h3 class="darkBrownCol dancingFont mt-2">Changer de mot de passe</h3>
            </div>
            <div class="col-12 text-center">
                <?php if (isset($errors)) { ?>
                    <?php foreach ($errors as $error) : ?>
                        <div class="alert bladeBrownBac boxShadow col-8 offset-2 col-lg-8 offset-lg-2 my-3">
                            <h4 class="darkBrownCol text-center pt-2"><?= $error; ?></h4>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
                <?php if (isset($hits)) { ?>
                    <?php foreach ($hits as $hit) : ?>
                        <div class="alert bladeBrownBac boxShadow col-8 offset-2 col-lg-8 offset-lg-2 my-3">
                            <h4 class="greenlightCol text-center pt-2"><?= $hit; ?></h4>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
            <div class="col-12 text-center">
                <?= $changeMdpForm ?>
            </div>
        </div>
    </div>
</section>