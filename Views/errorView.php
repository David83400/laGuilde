<?php $title = 'La Guilde | Erreur'; ?>
<?php ob_start() ?>
<section id="error">
    <h1>Une erreur est survenue : <?= $errorMessage ?></h1>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('frontend/template.php') ?>