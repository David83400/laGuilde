<?php $title = 'La Guilde'; ?>
<?php ob_start() ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>
<a href="/home.php">retour accueil</a>

<?php while ($data = $req->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['pseudo']) ?>
            <em>le <?php echo $data['date_creation']; ?></em>
        </h3>
        
        <p>
            <?= htmlspecialchars($data['password']) ?>
            <br />
            <em><a href="#">Commentaires</a></em>
        </p>
    </div>
<?php
}
$req->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php') ?>