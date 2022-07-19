<?php if (isset($_SESSION['error'])) {
?>
    <section id="sessionMessage">
        <div class="container">
            <div class="row">
                <div class="alert bladeBrownBac boxShadow text-center" role="alert">
                    <h1 class="darkBrownCol"><?php echo $_SESSION['error'];
                                                unset($_SESSION['error']) ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if (isset($_SESSION['success'])) {
?>
    <section id="sessionMessage">
        <div class="container">
            <div class="row">
                <div class="alert bladeBrownBac boxShadow text-center" role="alert">
                    <h1 class="greenlightCol"><?php echo $_SESSION['success'];
                                                unset($_SESSION['success']) ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php } ?>