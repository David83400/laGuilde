<?php $this->title = 'La Guilde'; ?>

<h1>Informations sur le compte de <?= $members->pseudo ?></h1>
<article>
    <h2><?= ucfirst($members->pseudo) ?></h2>
    <p>Mot de passe : <?= $members->password ?></p>
    <p>Inscrit depuis le <?= $members->inscription_date ?></p>
</article>