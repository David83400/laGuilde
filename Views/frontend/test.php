<?php $title = 'La Guilde'; ?>

<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>
<a href="/home">retour accueil</a>

<div class="news">
    <h3>
        <?php foreach ($members as $member) : ?>
            <?= $member->pseudo ?>
            <em>le <?= $member->inscription_date ?></em>
            <!--$member->pseudo au lieu de $member['pseudo'] grâce à fetch_OBJ dans database Core
            au lieu de fetch assoc .... maintenant je manipule un objet -->
    </h3>

    <p>
        <?= $member->password ?>
    <?php endforeach; ?>
    <br />
    <em><a href="#">Commentaires</a></em>
    </p>
</div>