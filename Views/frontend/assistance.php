<section id="assistanceSection" class="mt-1 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-3 mb-5 p-2">
                <h2 class="text-center darkBrownCol dancingFont mt-3">Contactez nous</h2>
            </div>
        </div>
        <div class="row">
            <?php if (isset($errors)) { ?>
                <?php foreach ($errors as $error) : ?>
                    <div class="alert bladeBrownBac boxShadow col-8 offset-2 col-lg-8 offset-lg-2 mb-3">
                        <h4 class="darkBrownCol text-center pt-2"><?= $error; ?></h4>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
            <?= $assistanceForm ?>
        </div>
    </div>
</section>