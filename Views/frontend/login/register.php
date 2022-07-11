<?php $this->title = 'La Guilde | S\'inscrire'; ?>

<?php if (isset($_SESSION['error'])) {
?>
    <section id="sessionMessage">
        <div class="container">
            <div class="row">
                <div class="alert alert-danger text-center" role="alert">
                    <h1><?php echo $_SESSION['error'];
                        unset($_SESSION['error']) ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section id="inscriptionSection" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mb-4">
                <h2 class="text-center darkBrownCol dancingFont mt-3">S'inscrire</h2>
            </div>
        </div>
        <?= $registerForm ?>
    </div>
</section>